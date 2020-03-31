<?php

/*
 * App core class
 * Creates URL & loads core controller
 * URL Format - /controller/method/param
 */

class Core{
    protected $currentController = 'Pages';
    protected $currentMethod = 'index';
    protected $params = [];

    public function __construct()
    {
        return $this->getUrl();
    }

    public function getUrl()
    {
        echo $_GET['url'];
    }
}