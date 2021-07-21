<?php
namespace SITE\Controllers;

use SITE\Library;
use SITE\Model\OauthModel;
use GuzzleHttp\Client;

class Oauth extends Library\BaseController
{
	private $_twitch_redirect;
    private $_db;
    private $_guzzle;
  	private $_config;

    public function __construct()
    {
		parent::__construct();

		$this->_db = new OauthModel();
        $this->_guzzle = new Client();

		$_twitch_redirect = $this->_config->GetSettings("API_BASE") . 'Oauth/twitch/';
    }

	public function twitch()
	{
		if(isset($this->_params[0])) {
			//We know it is an internal request!
			$query = $this->_db->authorize($this->_params[0], 'twitch');

			return ($query != false) ? $query : $this->_guzzle->get('https://api.twitch.tv/oauth/twitch');
		}

		$parameters = [
			'client_id'     => $this->_config->getSettings('CLIENT_ID'),
			'client_secret' => $this->_config->getSettings('TWITCH_SECRET'),
			'redirect_uri'  => $this->_twitch_redirect,
			'code'          => $_GET['code'],
			'grant_type'    => 'authorization_code'
		];

		$response = $this->_guzzle->request('POST', 'https://id.twitch.tv/oauth2/token', ['form_params' => $parameters]);

		$response = json_decode($response->getBody(), true);

		return $response['access_token'];
	}
}