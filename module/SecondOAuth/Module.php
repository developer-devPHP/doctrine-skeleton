<?php

namespace SecondOAuth;

use Zend\ModuleManager\ModuleManager;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use Zend\Config\Config;
use Zend\Mvc\MvcEvent;

class Module implements
    AutoloaderProviderInterface,
    ConfigProviderInterface
{
    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function onBootstrap(MvcEvent $e) {
        $serviceManager = $e->getParam('application')->getServiceManager()
            ->get('oauth2.doctrineadapter.second')->bootstrap($e);
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                'oauth2.doctrineadapter.second' => function($serviceManager) {

                    $globalConfig = $serviceManager->get('Config');
                    $config = new Config($globalConfig['zf-oauth2-doctrine']['second']);
                    $factory = $serviceManager->get('ZF\OAuth2\Doctrine\Adapter\DoctrineAdapterFactory');
                    $factory->setConfig($config);
                    $adapter = $factory->createService($serviceManager);

                    return $adapter;
                }
            ],
        ];
    }
}
