<?php

namespace SITE\Controllers;

use SITE\Library;
use SITE\Model;
use GuzzleHttp\Client;

class Tools extends Library\BaseController
{
    private $_guzzle;

    public function __construct()
    {
        parent::__construct();

        $this->_guzzle = new Client();
    }

    public function index()
    {
        $this->_view->setTemplate('Application/View/tools');

        return $this->_output->output(200, $this->_view->render(), false);
    }
}