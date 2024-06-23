<?php

namespace ContainerW9bbrex;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getVichUploader_Listener_Upload_UsersImagesService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'vich_uploader.listener.upload.users_images' shared service.
     *
     * @return \Vich\UploaderBundle\EventListener\Doctrine\UploadListener
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/BaseListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/EventListener/Doctrine/UploadListener.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/AdapterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/src/Adapter/ORM/DoctrineORMAdapter.php';

        return $container->privates['vich_uploader.listener.upload.users_images'] = new \Vich\UploaderBundle\EventListener\Doctrine\UploadListener('users_images', ($container->privates['vich_uploader.adapter.orm'] ??= new \Vich\UploaderBundle\Adapter\ORM\DoctrineORMAdapter()), ($container->privates['vich_uploader.metadata_reader'] ?? self::getVichUploader_MetadataReaderService($container)), ($container->services['vich_uploader.upload_handler'] ?? $container->load('getVichUploader_UploadHandlerService')));
    }
}
