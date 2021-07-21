<?php

namespace SITE\Controllers;

use SITE\Library;
use SITE\Model;
use GuzzleHttp\Client;

class Perks extends Library\BaseController
{
    private $_guzzle;

    public function __construct()
    {
        parent::__construct();

        $this->_guzzle = new Client(array('curl' => array(CURLOPT_SSL_VERIFYPEER => false,),));
    }

    public function index()
    {
        $emoteData = $this->_guzzle->get($this->_config->GetSettings("API_BASE") . 'twitch/subemotes/itslittany');
        $emoteData = json_decode($emoteData->getBody(), true);
        $emoteData = $emoteData['response'];

        $badgeData = $this->_guzzle->get($this->_config->GetSettings("API_BASE") . 'twitch/subbadges/itslittany');
        $badgeData = json_decode($badgeData->getBody(), true);
        $badgeData = $badgeData['response'];

        $this->_view->setTemplate('Application/View/perks', true);
        
        $this->_view->OneMonthImg         = $badgeData[0]['image_url_4x'];
        $this->_view->OneMonthName        = $badgeData[0]['description'];
        $this->_view->ThreeMonthImg       = $badgeData[3]['image_url_4x'];
        $this->_view->ThreeMonthName      = $badgeData[3]['description'];
        $this->_view->SixMonthImg         = $badgeData[6]['image_url_4x'];
        $this->_view->SixMonthName        = $badgeData[6]['description'];
        $this->_view->NineMonthImg        = $badgeData[9]['image_url_4x'];
        $this->_view->NineMonthName       = $badgeData[9]['description'];
        $this->_view->TwelveMonthImg      = $badgeData[12]['image_url_4x'];
        $this->_view->TwelveMonthName     = $badgeData[12]['description'];
        $this->_view->TwentyFourMonthImg  = (isset($badgeData[24]['image_url_4x']) ? $badgeData[24]['image_url_4x'] : '');
        $this->_view->TwentyFourMonthName = (isset($badgeData[24]['description']) ? $badgeData[24]['description'] : '');

        $this->_view->emote1Img = substr($emoteData[0]['emoticons'][0]['url'], 0, -3) . '2.0';
        $this->_view->emote1Name = $emoteData[0]['emoticons'][0]['regex'];
        $this->_view->emote2Img = substr($emoteData[0]['emoticons'][1]['url'], 0, -3) . '2.0';
        $this->_view->emote2Name = $emoteData[0]['emoticons'][1]['regex'];
        $this->_view->emote3Img = (isset($emoteData[0]['emoticons'][2]) ? substr($emoteData[0]['emoticons'][2]['url'], 0, -3) . '2.0' : '');
        $this->_view->emote3Name = (isset($emoteData[0]['emoticons'][2]) ? $emoteData[0]['emoticons'][2]['regex'] : '');
        $this->_view->emote4Img = (isset($emoteData[0]['emoticons'][3]) ? substr($emoteData[0]['emoticons'][3]['url'], 0, -3) . '2.0' : '');
        $this->_view->emote4Name = (isset($emoteData[0]['emoticons'][3]) ? $emoteData[0]['emoticons'][3]['regex'] : '');

        $this->_view->t2Emote1Img = (isset($emoteData[1]['emoticons'][0]) ? substr($emoteData[1]['emoticons'][0]['url'], 0, -3) . '2.0' : '');
        $this->_view->t2Emote1Name = (isset($emoteData[1]['emoticons'][0]) ? $emoteData[1]['emoticons'][0]['regex'] : 'Pending Approval');

        $this->_view->t3Emote1Img = (isset($emoteData[2]['emoticons'][0]) ? substr($emoteData[2]['emoticons'][0]['url'], 0, -3) . '2.0' : '');
        $this->_view->t3Emote1Name = (isset($emoteData[2]['emoticons'][0]) ? $emoteData[2]['emoticons'][0]['regex'] : 'Pending Approval');

        return $this->_output->output(200, $this->_view->render(), false);
    }
}