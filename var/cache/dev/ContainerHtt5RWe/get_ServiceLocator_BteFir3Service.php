<?php

namespace ContainerHtt5RWe;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BteFir3Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BteFir3' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BteFir3'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'em' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'repo' => ['privates', 'App\\Repository\\StudentRepository', 'getStudentRepositoryService', true],
        ], [
            'doctrine' => '?',
            'em' => '?',
            'repo' => 'App\\Repository\\StudentRepository',
        ]);
    }
}
