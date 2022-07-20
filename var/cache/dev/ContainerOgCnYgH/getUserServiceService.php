<?php

namespace ContainerOgCnYgH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Service\UserService' shared autowired service.
     *
     * @return \App\Service\UserService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/UserService.php';

        return $container->services['App\\Service\\UserService'] = new \App\Service\UserService(($container->services['App\\Repository\\UserRepository'] ?? $container->load('getUserRepositoryService')));
    }
}
