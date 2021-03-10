<?php

namespace SITE\Controllers;

use SITE\Library;
use SITE\Model;

class Spec extends Library\BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Covers the router's default method incase a part of the URL was missed
     *
     * @return array|string
     * @throws \Exception
     */
    public function index()
    {
        $this->_view->setTemplate('Application/View/spec');
        $this->_view->loggedIn  = false;
        $this->_view->authURL   = 'https://api.twitch.tv/kraken/oauth2/authorize?response_type=code&approval_prompt=auto&scope=user_read%20user_subscriptions&redirect_uri=https://dev.itslit.uk/Oauth/twitch/&client_id=prsbbjzh28rr4m0urdir6h79hy4yvz';

        return $this->_output->output(200, $this->_view->render(), false);
    }
}