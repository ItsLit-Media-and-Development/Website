<?php

namespace SITE\Controllers;

use SITE\Library;
use SITE\Model;
use GuzzleHttp\Client;

class Rpg extends Library\BaseController
{
    private $_guzzle;

    public function __construct()
    {
        parent::__construct();

        $this->_guzzle = new Client(array('curl' => array(CURLOPT_SSL_VERIFYPEER => false,),));
    }

    public function index()
    {
        $this->_view->setTemplate('Application/View/rpg', true);
        return $this->_output->output(200, $this->_view->render(), false);
    }
}