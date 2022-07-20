<?php

namespace ContainerRfkAax5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Form\UserType' shared autowired service.
     *
     * @return \App\Form\UserType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/UserType.php';

        return $container->services['App\\Form\\UserType'] = new \App\Form\UserType();
    }
}
