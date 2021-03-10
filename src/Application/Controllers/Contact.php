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
        $this->_view->setTemplate('Application/View/contact');
        $this->_view->loggedIn  = false;
        $this->_view->submitted = false;
        $this->_view->authURL   = 'https://api.twitch.tv/kraken/oauth2/authorize?response_type=code&approval_prompt=auto&scope=user_read%20user_subscriptions&redirect_uri=https://dev.itslit.uk/Oauth/twitch/&client_id=prsbbjzh28rr4m0urdir6h79hy4yvz';

        if(isset($_POST) && !empty($_POST))
        {
            $this->_guzzle->post('https://api.itslit.uk/Ticket/create', [
                'form_params' => $_POST
            ]);

            $this->_view->submitted = true;
        }

        return $this->_output->output(200, $this->_view->render(), false);
    }
}