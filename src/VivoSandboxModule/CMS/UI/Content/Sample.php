<?php
namespace VivoSandboxModule\CMS\UI\Content;

use Zend\Session\Container;

use Zend\Session\SessionManager;
use Vivo\SiteManager\Event\SiteEvent;
use Vivo\UI\ComponentContainerInterface;
use Zend\Http\Response;
use Vivo\CMS\UI\Component;

class Sample extends Component
{

    private $response;
    private $api;

    public function __construct(Response $response,
            \VivoSandboxModule\CMS\Api\Content\Sample $api,
            SiteEvent $siteEvent)
    {

//         $this->response = $response;
         $this->api = $api;
//         $this->siteEvent = $siteEvent;
        //$this->response->setStatusCode(302);
    }

    public function init()
    {

    }

    public function testApi() {
        echo __METHOD__;
        echo get_class($this->response);
        //echo get_class($this->siteEvent);
        print_r($this->siteEvent->test);
    }

    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    public function submit($arg1, $arg2) {
        $this->view->date = $this->api->getCurrentDate()->format('j.m.Y');
        $this->view->call = __METHOD__ . ">>> arg1:$arg1 arg2:$arg2";
    }
    public function view()
    {
        echo $this->getparent()->getName();
        return parent::view();
    }
}
