<?php

namespace Container5pplxYu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Messenger_HandlerDescriptor_6kVvRT_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.messenger.handler_descriptor.6kVvRT.' shared service.
     *
     * @return \Symfony\Component\Messenger\Handler\HandlerDescriptor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Handler/HandlerDescriptor.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-client/Messenger/PingWebhookMessageHandler.php';

        return $container->privates['.messenger.handler_descriptor.6kVvRT.'] = new \Symfony\Component\Messenger\Handler\HandlerDescriptor(new \Symfony\Component\HttpClient\Messenger\PingWebhookMessageHandler(($container->privates['.debug.http_client'] ?? self::get_Debug_HttpClientService($container))), []);
    }
}
