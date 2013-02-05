<?php
namespace VivoSandboxModule\CMS\UI\Content;

use Zend\Session\Container;
use Zend\Session\SessionManager;
use Vivo\CMS\UI\Component;

class SessionSample extends Component
{

    protected $session;

    public function __construct(SessionManager $sm)
    {
        $this->session = new Container(__CLASS__, $sm);
    }

    public function init()
    {
        //         $this->session->setExpirationHops(5);
        $this->session->setExpirationSeconds(10);
        $this->session->test = $this->session->test+1;
        $this->view->test = $this->session->test;
    }
}