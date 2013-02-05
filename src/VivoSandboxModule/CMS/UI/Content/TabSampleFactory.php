<?php
namespace VivoSandboxModule\CMS\UI\Content;

use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\FactoryInterface;

class TabSampleFactory implements FactoryInterface
{
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $tabSample =  new TabSample();
        $tabSample->addComponent($serviceLocator->get('Vivo\UI\TabContainer'), 'tabs');
        return $tabSample;
    }
}
