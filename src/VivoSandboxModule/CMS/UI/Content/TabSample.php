<?php
namespace VivoSandboxModule\CMS\UI\Content;

use Vivo\UI\Text;

use Vivo\CMS\UI\Blank;

use Vivo\CMS\UI\Component;

class TabSample extends Component
{
    public function __construct()
    {
    }

    public function init()
    {
        $tabs = $this->tabs;
        /* @var $tabs \Vivo\UI\TabContainer */
        $tabs->addComponent(new Blank(), 'tab1');
        $tabs->addComponent(new Text('tab 2'), 'tab2');
        parent::init();
    }
}
