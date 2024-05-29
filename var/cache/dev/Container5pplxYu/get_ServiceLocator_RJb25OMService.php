<?php

namespace Container5pplxYu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_RJb25OMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.RJb25OM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.RJb25OM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'operationRepository' => ['privates', 'App\\Repository\\OperationRepository', 'getOperationRepositoryService', true],
        ], [
            'operationRepository' => 'App\\Repository\\OperationRepository',
        ]);
    }
}
