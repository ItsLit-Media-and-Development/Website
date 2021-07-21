<?php

namespace SITE\Controllers;

use SITE\Library;
use SITE\Model;
use GuzzleHttp\Client;

class Team extends Library\BaseController
{
    private $_guzzle;
    public function __construct()
    {
        parent::__construct();

        $this->_guzzle = new Client(array('curl' => array(CURLOPT_SSL_VERIFYPEER => false,),));
    }

    /**
     * Covers the router's default method incase a part of the URL was missed
     *
     * @return array|string
     * @throws \Exception
     */
    public function index()
    {
        $this->_view->setTemplate('Application/View/team', true);

        return $this->_output->output(200, $this->_view->render(), false);
    }
}