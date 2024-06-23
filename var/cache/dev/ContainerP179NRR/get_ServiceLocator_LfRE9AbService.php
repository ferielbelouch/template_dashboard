<?php

namespace ContainerP179NRR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_LfRE9AbService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.LfRE9Ab' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.LfRE9Ab'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'operation' => ['privates', '.errored..service_locator.LfRE9Ab.App\\Entity\\Operation', NULL, 'Cannot autowire service ".service_locator.LfRE9Ab": it needs an instance of "App\\Entity\\Operation" but this type has been excluded in "config/services.yaml".'],
        ], [
            'entityManager' => '?',
            'operation' => 'App\\Entity\\Operation',
        ]);
    }
}
