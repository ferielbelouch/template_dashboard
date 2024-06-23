<?php

namespace ContainerIxXsf99;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_M0moeqtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.m0moeqt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.m0moeqt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'activationRepository' => ['privates', 'App\\Repository\\ActivationRepository', 'getActivationRepositoryService', true],
        ], [
            'activationRepository' => 'App\\Repository\\ActivationRepository',
        ]);
    }
}
