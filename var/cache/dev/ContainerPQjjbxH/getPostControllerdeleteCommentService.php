<?php

namespace ContainerPQjjbxH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPostControllerdeleteCommentService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.aCnRYOo.App\Controller\PostController::deleteComment()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.aCnRYOo.App\\Controller\\PostController::deleteComment()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'comment' => ['privates', '.errored..service_locator.aCnRYOo.App\\Entity\\Comment', NULL, 'Cannot autowire service ".service_locator.aCnRYOo": it needs an instance of "App\\Entity\\Comment" but this type has been excluded in "config/services.yaml".'],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'comment' => 'App\\Entity\\Comment',
            'em' => '?',
        ]))->withContext('App\\Controller\\PostController::deleteComment()', $container);
    }
}
