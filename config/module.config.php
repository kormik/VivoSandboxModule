<?php
/**
 * VivoSandboxModule configuration file
 *
 */
return array(
    'templates' => array (
        'template_map' => array(
            'VivoSandboxModule\CMS\UI\Content\Sample' => __DIR__.'/../view/VivoSandboxModule/CMS/UI/Content/Sample.phtml',
            'VivoSandboxModule\CMS\UI\Content\SessionSample' => __DIR__.'/../view/VivoSandboxModule/CMS/UI/Content/SessionSample.phtml',
            'VivoSandboxModule\CMS\UI\Content\LogSample' => __DIR__.'/../view/VivoSandboxModule/CMS/UI/Content/LogSample.phtml',
            'VivoSandboxModule\CMS\UI\Content\TabSample' => __DIR__.'/../view/VivoSandboxModule/CMS/UI/Content/TabSample.phtml',
        ),
    ),
    'component_mapping' => array (
        'front_component' => array (
           'VivoSandboxModule\CMS\Model\Content\Sample' => 'VivoSandboxModule\CMS\UI\Content\Sample',
           'VivoSandboxModule\CMS\Model\Content\SessionSample' => 'VivoSandboxModule\CMS\UI\Content\SessionSample',
        ),
    ),
    'service_manager' => array (
        'factories' => array (
             'VivoSandboxModule\CMS\UI\Content\SessionSample' => 'VivoSandboxModule\CMS\Service\UI\SessionSampleFactory',
             'VivoSandboxModule\CMS\UI\Content\TabSample' => 'VivoSandboxModule\CMS\UI\Content\TabSampleFactory',
        ),
    ),
);
