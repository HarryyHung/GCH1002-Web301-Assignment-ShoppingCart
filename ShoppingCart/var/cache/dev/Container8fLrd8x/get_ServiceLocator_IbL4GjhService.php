<?php

namespace Container8fLrd8x;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_IbL4GjhService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.ibL4Gjh' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.ibL4Gjh'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'customerRepository' => ['privates', 'App\\Repository\\CustomerRepository', 'getCustomerRepositoryService', true],
        ], [
            'customerRepository' => 'App\\Repository\\CustomerRepository',
        ]);
    }
}
