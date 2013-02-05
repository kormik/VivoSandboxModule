<?php
namespace VivoSandboxModule\CMS\UI\Content;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\EventManagerAwareInterface;

use Zend\Session\Container;
use Zend\Session\SessionManager;
use Vivo\CMS\UI\Component;

class LogSample extends Component implements EventManagerAwareInterface
{


    protected $events;

    public function init()
    {
        //just log event
        $this->events->trigger('log', $this, array('message' => "Sample log entry."));

        //add log message to another trigered event
        $this->events->trigger('someEvent', $this,
                array('log'=> array('message' => "SomeEvent triggered...")));

    }

    public function setEventManager(EventManagerInterface $eventManager)
    {
        $this->events = $eventManager;
        $this->events->addIdentifiers(__CLASS__);
    }

    public function getEventManager() {
        return $this->events;
    }
}
