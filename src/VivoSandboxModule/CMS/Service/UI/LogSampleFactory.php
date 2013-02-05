<?php
namespace VivoSandboxModule\CMS\Service\UI;

use VivoSandboxModule\CMS\UI\Content\SessionSample;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class LogSampleFactory implements FactoryInterface
{
    /**
     * Create SessionSample UI component
     *
     * @param  ServiceLocatorInterface $serviceLocator
     * @return \Zend\Stdlib\Message
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return new SessionSample($serviceLocator->get('session_manager'));
    }
}
