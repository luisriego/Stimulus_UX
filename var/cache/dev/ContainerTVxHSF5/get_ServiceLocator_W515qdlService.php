<?php

namespace ContainerTVxHSF5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W515qdlService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W515qdl' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W515qdl'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartStorage' => ['privates', 'App\\Service\\CartStorage', 'getCartStorageService', false],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', false],
            'session' => ['services', 'session', 'getSessionService', false],
        ], [
            'cartStorage' => 'App\\Service\\CartStorage',
            'entityManager' => '?',
            'productRepository' => 'App\\Repository\\ProductRepository',
            'session' => '?',
        ]);
    }
}
