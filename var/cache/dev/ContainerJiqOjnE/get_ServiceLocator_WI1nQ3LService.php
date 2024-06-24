<?php

namespace ContainerJiqOjnE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_WI1nQ3LService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.wI1nQ3L' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.wI1nQ3L'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\OperationController::delete' => ['privates', '.service_locator.LfRE9Ab', 'get_ServiceLocator_LfRE9AbService', true],
            'App\\Controller\\OperationController::edit' => ['privates', '.service_locator.LfRE9Ab', 'get_ServiceLocator_LfRE9AbService', true],
            'App\\Controller\\OperationController::index' => ['privates', '.service_locator.RJb25OM', 'get_ServiceLocator_RJb25OMService', true],
            'App\\Controller\\OperationController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\OperationController::show' => ['privates', '.service_locator.vxMQ6pO', 'get_ServiceLocator_VxMQ6pOService', true],
            'App\\Controller\\ProfileController::index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.R0Sb2kd', 'get_ServiceLocator_R0Sb2kdService', true],
            'App\\Controller\\UserController::generatePdf' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController::new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.URv18j3', 'get_ServiceLocator_URv18j3Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\OperationController:delete' => ['privates', '.service_locator.LfRE9Ab', 'get_ServiceLocator_LfRE9AbService', true],
            'App\\Controller\\OperationController:edit' => ['privates', '.service_locator.LfRE9Ab', 'get_ServiceLocator_LfRE9AbService', true],
            'App\\Controller\\OperationController:index' => ['privates', '.service_locator.RJb25OM', 'get_ServiceLocator_RJb25OMService', true],
            'App\\Controller\\OperationController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\OperationController:show' => ['privates', '.service_locator.vxMQ6pO', 'get_ServiceLocator_VxMQ6pOService', true],
            'App\\Controller\\ProfileController:index' => ['privates', '.service_locator.9kKwU2t', 'get_ServiceLocator_9kKwU2tService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.V6D1oJY', 'get_ServiceLocator_V6D1oJYService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.rSTd.nA', 'get_ServiceLocator_RSTd_NAService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.R0Sb2kd', 'get_ServiceLocator_R0Sb2kdService', true],
            'App\\Controller\\UserController:generatePdf' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.kPUOGb8', 'get_ServiceLocator_KPUOGb8Service', true],
            'App\\Controller\\UserController:new' => ['privates', '.service_locator.CsMkqUa', 'get_ServiceLocator_CsMkqUaService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.URv18j3', 'get_ServiceLocator_URv18j3Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.y4_Zrx.', 'get_ServiceLocator_Y4Zrx_Service', true],
        ], [
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\OperationController::delete' => '?',
            'App\\Controller\\OperationController::edit' => '?',
            'App\\Controller\\OperationController::index' => '?',
            'App\\Controller\\OperationController::new' => '?',
            'App\\Controller\\OperationController::show' => '?',
            'App\\Controller\\ProfileController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::generatePdf' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::new' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\OperationController:delete' => '?',
            'App\\Controller\\OperationController:edit' => '?',
            'App\\Controller\\OperationController:index' => '?',
            'App\\Controller\\OperationController:new' => '?',
            'App\\Controller\\OperationController:show' => '?',
            'App\\Controller\\ProfileController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:generatePdf' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:new' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}