<?php

namespace ContainerMxAqsax;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getBlogControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z.3asT3.App\Controller\BlogController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z.3asT3.App\\Controller\\BlogController::delete()'] = ($container->privates['.service_locator.Z.3asT3'] ?? $container->load('get_ServiceLocator_Z_3asT3Service'))->withContext('App\\Controller\\BlogController::delete()', $container);
    }
}
