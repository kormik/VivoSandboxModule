<?php
namespace VivoSandboxModule\CMS\UI\Content;

use Vivo\UI\ComponentContainerInterface;
use Zend\Http\Response;
use Vivo\CMS\UI\Component;

class Sample extends Component
{

    private $response;

    private $api;

    public function __construct(Response $response, \VivoSandboxModule\CMS\Api\Content\Sample $api)
    {
        $this->response = $response;
        $this->api = $api;
        //$this->response->setStatusCode(302);
    }

    public function init()
    {
//        echo $this->getPath();
    }

    public function setResponse(Response $response)
    {
        $this->response = $response;
    }

    public function submit($arg1, $arg2) {
        $this->view->date = $this->api->getCurrentDate()->format('j.m.Y');
        $this->view->call = __METHOD__ . ">>> arg1:$arg1 arg2:$arg2";
    }
}
