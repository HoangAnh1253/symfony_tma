<?php

namespace ContainerRfkAax5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGedmo_Listener_SoftdeleteableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gedmo.listener.softdeleteable' shared autowired service.
     *
     * @return \Gedmo\SoftDeleteable\SoftDeleteableListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/doctrine/event-manager/lib/Doctrine/Common/EventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/Mapping/MappedEventSubscriber.php';
        include_once \dirname(__DIR__, 4).'/vendor/gedmo/doctrine-extensions/src/SoftDeleteable/SoftDeleteableListener.php';

        $container->services['gedmo.listener.softdeleteable'] = $instance = new \Gedmo\SoftDeleteable\SoftDeleteableListener();

        $instance->setAnnotationReader(($container->privates['annotations.cached_reader'] ?? $container->getAnnotations_CachedReaderService()));

        return $instance;
    }
}
