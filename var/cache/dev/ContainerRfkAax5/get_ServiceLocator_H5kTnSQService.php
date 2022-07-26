<?php

namespace ContainerRfkAax5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_H5kTnSQService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.H5kTnSQ' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.H5kTnSQ'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'authenticationUtils' => ['privates', 'security.authentication_utils', 'getSecurity_AuthenticationUtilsService', true],
            'jwtTokenManagerInterface' => ['services', 'lexik_jwt_authentication.jwt_manager', 'getLexikJwtAuthentication_JwtManagerService', true],
        ], [
            'authenticationUtils' => '?',
            'jwtTokenManagerInterface' => '?',
        ]);
    }
}
