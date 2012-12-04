<?php
/**
 * VivoSandboxModule configuration file
 *
 */
return array(
        'templates' => array (
            'template_map' => array(
                 'VivoSandboxModule\CMS\UI\Content\Sample' => __DIR__.'/../view/VivoSandboxModule/CMS/UI/Content/Sample.phtml',
            ),
        ),
           'component_mapping' => array (
            'front_component' => array (
                'VivoSandboxModule\CMS\Model\Content\Sample' => 'VivoSandboxModule\CMS\UI\Content\Sample',
            ),         
    ),
);
