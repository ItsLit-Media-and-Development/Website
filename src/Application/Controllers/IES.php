<?php

namespace SITE\Controllers;

use SITE\Library;
use SITE\Model;
use GuzzleHttp\Client;

class IES extends Library\BaseController
{
    private $_guzzle;
    public function __construct()
    {
        parent::__construct();

        $this->_guzzle = new Client();
    }

    /**
     * Covers the router's default method incase a part of the URL was missed
     *
     * @return array|string
     * @throws \Exception
     */
    public function index()
    {
        
    }

    public function twitch()
    {
        $game     = $this->_guzzle->get('https://api.itslit.uk/twitch/current_game/' . $this->_params[0]);
        $gData    = json_decode($game->getBody(), true);
        $title    = $this->_guzzle->get('https://api.itslit.uk/twitch/current_title/' . $this->_params[0]);
        $tData    = json_decode($title->getBody(), true);

        $this->_view->setTemplate('Application/View/IES');
        $this->_view->title = $gData['response'];
        $this->_view->desc  = $tData['response'];
        $this->_view->name  = $this->_params[0];

        return $this->_output->output(200, $this->_view->render(), false);
    }
}