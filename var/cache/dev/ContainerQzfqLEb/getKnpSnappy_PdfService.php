<?php

namespace ContainerQzfqLEb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpSnappy_PdfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knp_snappy.pdf' shared service.
     *
     * @return \Knp\Snappy\Pdf
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-snappy/src/Knp/Snappy/GeneratorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-snappy/src/Knp/Snappy/AbstractGenerator.php';
        include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-snappy/src/Knp/Snappy/Pdf.php';

        $container->services['knp_snappy.pdf'] = $instance = new \Knp\Snappy\Pdf('wkhtmltopdf', [], []);

        $instance->setLogger(($container->privates['monolog.logger.snappy'] ?? $container->load('getMonolog_Logger_SnappyService')));

        return $instance;
    }
}
