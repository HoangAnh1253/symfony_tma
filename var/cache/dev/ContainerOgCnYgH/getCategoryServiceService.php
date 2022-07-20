<?php

namespace ContainerOgCnYgH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategoryServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\CategoryService' shared autowired service.
     *
     * @return \App\Service\CategoryService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Traits/DataValidate.php';
        include_once \dirname(__DIR__, 4).'/src/Service/CategoryService.php';

        $container->services['App\\Service\\CategoryService'] = $instance = new \App\Service\CategoryService(($container->services['App\\Repository\\CategoryRepository'] ?? $container->load('getCategoryRepositoryService')), ($container->privates['validator'] ?? $container->load('getValidatorService')), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Service\\CategoryService', $container));

        return $instance;
    }
}
