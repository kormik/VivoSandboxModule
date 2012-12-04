<?php
namespace VivoSandboxModule\CMS\Api\Content;

class Sample
{
    public function __construct()
    {

    }

    public function getCurrentDate() {
        return new \DateTime();
    }
}
