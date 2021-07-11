<?php

namespace SITE\Controllers;

use SITE\Library;
use SITE\Model;
use GuzzleHttp\Client;

class ShopTitans extends Library\BaseController
{
    private $_guzzle;
    public function __construct()
    {
        parent::__construct();
        $this->_config = new Library\Config();

        $this->_guzzle = new Client(
            [
                'curl' => [
                    CURLOPT_SSL_VERIFYPEER => false,
                ],
                'headers' => [
                    'user' => $this->_config->getSettings('API_USER'),
                    'token' => $this->_config->getSettings('API_KEY'),
                ]
            ]);
    }

    /**
     * Covers the router's default method incase a part of the URL was missed
     *
     * @return array|string
     * @throws \Exception
     */
    public function index()
    {
        $this->_view->setTemplate('Application/View/shop_titans', true);
        $this->_view->loggedIn  = false;
        $this->_view->submitted = false;
        $this->_view->authURL   = 'https://api.twitch.tv/kraken/oauth2/authorize?response_type=code&approval_prompt=auto&scope=user_read%20user_subscriptions&redirect_uri=https://dev.itslit.uk/Oauth/twitch/&client_id=prsbbjzh28rr4m0urdir6h79hy4yvz';


        if(isset($_POST) && !empty($_POST))
        {
            $data = json_encode($_POST, true);

            $tmp = $this->_guzzle->post('http://api/ShopTitans/WebsiteUpdate', [
                'body' => $data
            ]);

            $response = $tmp->getBody()->getContents();

            $response = json_decode($response, true);

            $this->_view->submitted = $response['response']['success'];
        }


        $rawData = $this->_guzzle->get('http://api/ShopTitans/GetAllUsers/?user=discord_bot&token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJ1c2VyIjoiZGlzY29yZF9ib3QiLCJsZXZlbCI6NH0.QzeOwIJPvCh6DHJ5MFyTaz9H1TOOawB-mcblfFqKuIs');
        $data    = json_decode($rawData->getBody(), true);
        $this->_view->user    = $data['response'];

        return $this->_output->output(200, $this->_view->render(), false);
    }
}