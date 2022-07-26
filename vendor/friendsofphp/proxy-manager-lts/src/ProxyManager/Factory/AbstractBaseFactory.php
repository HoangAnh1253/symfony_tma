<?php

declare(strict_types=1);

namespace ProxyManager\Factory;

use OutOfBoundsException;
use ProxyManager\Configuration;
use ProxyManager\Generator\ClassGenerator;
use ProxyManager\ProxyGenerator\ProxyGeneratorInterface;
use ProxyManager\Signature\Exception\InvalidSignatureException;
use ProxyManager\Signature\Exception\MissingSignatureException;
use ProxyManager\Version;
use ReflectionClass;

use function array_key_exists;
use function assert;
use function class_exists;
use function is_a;
use function serialize;
use function sha1;

/**
 * Base factory common logic
 */
abstract class AbstractBaseFactory
{
    protected $configuration;

    /**
     * Cached checked class names
     *
     * @var array<string, string>
     * @psalm-var array<string, class-string>
     */
    private $checkedClasses = [];

    public function __construct(?Configuration $configuration = null)
    {
        $this->configuration = $configuration ?? new Configuration();
    }

    /**
     * Generate a proxy from a class name
     *
     * @param array<string, mixed> $proxyOptions
     * @psalm-param class-string<RealObjectType> $className
     *
     * @psalm-return class-string<RealObjectType>
     *
     * @throws InvalidSignatureException
     * @throws MissingSignatureException
     * @throws OutOfBoundsException
     *
     * @psalm-template RealObjectType of object
     */
    protected function generateProxy(string $className, array $proxyOptions = []): string
    {
        $cacheKey = $proxyOptions ? sha1(serialize([$className, $proxyOptions])) : $className;

        if (array_key_exists($cacheKey, $this->checkedClasses)) {
            $generatedClassName = $this->checkedClasses[$cacheKey];

            assert(is_a($generatedClassName, $className, true));

            return $generatedClassName;
        }

        $proxyParameters = [
            'className'           => $className,
            'factory'             => static::class,
            'proxyManagerVersion' => Version::getVersion(),
            'proxyOptions'        => $proxyOptions,
        ];
        $proxyClassName  = $this
            ->configuration
            ->getClassNameInflector()
            ->getProxyClassName($className, $proxyParameters);

        if (! class_exists($proxyClassName)) {
            $this->generateProxyClass(
                $proxyClassName,
                $className,
                $proxyParameters,
                $proxyOptions
            );
        }

        $this
            ->configuration
            ->getSignatureChecker()
            ->checkSignature(new ReflectionClass($proxyClassName), $proxyParameters);

        return $this->checkedClasses[$cacheKey] = $proxyClassName;
    }

    abstract protected function getGenerator(): ProxyGeneratorInterface;

    /**
     * Generates the provided `$proxyClassName` from the given `$className` and `$proxyParameters`
     *
     * @param array<string, mixed> $proxyParameters
     * @param array<string, mixed> $proxyOptions
     * @psalm-param class-string $proxyClassName
     * @psalm-param class-string $className
     */
    private function generateProxyClass(
        string $proxyClassName,
        string $className,
        array $proxyParameters,
        array $proxyOptions = []
    ): void {
        $className = $this->configuration->getClassNameInflector()->getUserClassName($className);
        $phpClass  = new ClassGenerator($proxyClassName);

        /** @psalm-suppress TooManyArguments - generator interface was not updated due to BC compliance */
        $this->getGenerator()->generate(new ReflectionClass($className), $phpClass, $proxyOptions);

        $phpClass = $this->configuration->getClassSignatureGenerator()->addSignature($phpClass, $proxyParameters);

        /** @psalm-suppress TooManyArguments - generator interface was not updated due to BC compliance */
        $this->configuration->getGeneratorStrategy()->generate($phpClass, $proxyOptions);

        $autoloader = $this->configuration->getProxyAutoloader();

        $autoloader($proxyClassName);
    }
}
