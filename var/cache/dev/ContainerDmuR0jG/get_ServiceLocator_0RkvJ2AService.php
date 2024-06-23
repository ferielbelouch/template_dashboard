<?php

namespace ContainerDmuR0jG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_0RkvJ2AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.0RkvJ2A' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.0RkvJ2A'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'documentRepository' => ['privates', 'App\\Repository\\DocumentRepository', 'getDocumentRepositoryService', true],
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'userPasswordHasher' => ['privates', 'security.user_password_hasher', 'getSecurity_UserPasswordHasherService', true],
        ], [
            'documentRepository' => 'App\\Repository\\DocumentRepository',
            'entityManager' => '?',
            'userPasswordHasher' => '?',
        ]);
    }
}