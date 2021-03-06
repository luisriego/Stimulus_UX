<?php

namespace ContainerLs2LlAd;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_QuvDhFeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.quvDhFe' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.quvDhFe'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartStorage' => ['privates', 'App\\Service\\CartStorage', 'getCartStorageService', false],
            'colorRepository' => ['privates', 'App\\Repository\\ColorRepository', 'getColorRepositoryService', false],
            'productRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', false],
        ], [
            'cartStorage' => 'App\\Service\\CartStorage',
            'colorRepository' => 'App\\Repository\\ColorRepository',
            'productRepository' => 'App\\Repository\\ProductRepository',
        ]);
    }
}
