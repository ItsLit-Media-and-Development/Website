<?php

namespace SITE\Controllers;

use SITE\Library;
use SITE\Model;
use GuzzleHttp\Client;

class Contact extends Library\BaseController
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
        $this->_view->setTemplate('Application/View/contact', true);

        $this->_view->submitted = false;

        if(isset($_POST) && !empty($_POST))
        {
            $this->_guzzle->post($this->_config->GetSettings("API_BASE") . 'Ticket/create', [
                'form_params' => $_POST
            ]);

            $this->_view->submitted = true;
        }

        return $this->_output->output(200, $this->_view->render(), false);
    }
}