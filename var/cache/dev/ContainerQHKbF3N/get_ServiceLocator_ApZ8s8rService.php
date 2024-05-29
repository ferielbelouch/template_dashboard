<?php

namespace ContainerQHKbF3N;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ApZ8s8rService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ApZ8s8r' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ApZ8s8r'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\OperationController::delete' => ['privates', '.service_locator.LfRE9Ab', 'get_ServiceLocator_LfRE9AbService', true],
            'App\\Controller\\OperationController::edit' => ['privates', '.service_locator.LfRE9Ab', 'get_ServiceLocator_LfRE9AbService', true],
            'App\\Controller\\OperationController::index' => ['privates', '.service_locator.RJb25OM', 'get_ServiceLocator_RJb25OMService', true],
            'App\\Controller\\OperationController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\OperationController::show' => ['privates', '.service_locator.vxMQ6pO', 'get_ServiceLocator_VxMQ6pOService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\OperationController:delete' => ['privates', '.service_locator.LfRE9Ab', 'get_ServiceLocator_LfRE9AbService', true],
            'App\\Controller\\OperationController:edit' => ['privates', '.service_locator.LfRE9Ab', 'get_ServiceLocator_LfRE9AbService', true],
            'App\\Controller\\OperationController:index' => ['privates', '.service_locator.RJb25OM', 'get_ServiceLocator_RJb25OMService', true],
            'App\\Controller\\OperationController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\OperationController:show' => ['privates', '.service_locator.vxMQ6pO', 'get_ServiceLocator_VxMQ6pOService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\OperationController::delete' => '?',
            'App\\Controller\\OperationController::edit' => '?',
            'App\\Controller\\OperationController::index' => '?',
            'App\\Controller\\OperationController::new' => '?',
            'App\\Controller\\OperationController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\OperationController:delete' => '?',
            'App\\Controller\\OperationController:edit' => '?',
            'App\\Controller\\OperationController:index' => '?',
            'App\\Controller\\OperationController:new' => '?',
            'App\\Controller\\OperationController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
