<?php

namespace ContainerUwIy2HI;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_VeATVQqService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.VeATVQq' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.VeATVQq'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'registrosalidaRepository' => ['privates', 'App\\Repository\\RegistrosalidaRepository', 'getRegistrosalidaRepositoryService', true],
        ], [
            'registrosalidaRepository' => 'App\\Repository\\RegistrosalidaRepository',
        ]);
    }
}
