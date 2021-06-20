<?php

namespace SITE\Controllers;

use SITE\Library;
use SITE\Model;
use GuzzleHttp\Client;

class Main extends Library\BaseController
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
        $rawData = $this->_guzzle->get('http://api.itslit.uk/twitch/topclips/itslittany/4/month');
        $data    = json_decode($rawData->getBody(), true);
        $data    = $data['response'];

        //$rawVOD = $this->_guzzle->get('http://api.itslit.uk/twitch/recent_vods/itslittany/8');
        $rawVOD = $this->_guzzle->get('http://api.itslit.uk/twitch/recent_vods/itslittany/8');
        $VOD    = json_decode($rawVOD->getBody(), true);
        $VOD    = $VOD['response'];

        $this->_view->setTemplate('Application/View/index', true);
        $this->_view->loggedIn = false;
        $this->_view->authURL = 'https://api.twitch.tv/kraken/oauth2/authorize?response_type=code&approval_prompt=auto&scope=user_read%20user_subscriptions&redirect_uri=https://dev.itslit.uk/Oauth/twitch/&client_id=prsbbjzh28rr4m0urdir6h79hy4yvz';

        if(isset($data[0]))
        {
            $this->_view->clip1Name   = (isset($data[0]) ? $data[0]['title'] : '');
            $this->_view->clip1URL    = (isset($data[0]) ? explode("?", $data[0]['url'])[0] : '');
            $this->_view->clip1Img    = (isset($data[0]) ? $data[0]['thumbnails']['medium'] : 'Application/View/img/blank.png');
            $this->_view->clip1Game   = (isset($data[0]) ? $data[0]['game'] : '');
            $this->_view->clip1Author = (isset($data[0]) ? $data[0]['curator']['display_name'] : '');
            $this->_view->clip1Views  = (isset($data[0]) ? $data[0]['views'] : '');
            $this->_view->clip1Time   = (isset($data[0]) ? $this->_getDateDiff(date("Y-m-d"), $data[0]['created_at'], 1) : '');
        }

        if(isset($data[1]))
        {
            $this->_view->clip2Name   = (isset($data[1]) ? $data[1]['title'] : '');
            $this->_view->clip2URL    = (isset($data[1]) ? explode("?", $data[1]['url'])[0] : '');
            $this->_view->clip2Img    = (isset($data[1]) ? $data[1]['thumbnails']['medium'] : 'Application/View/img/blank.png');
            $this->_view->clip2Game   = (isset($data[1]) ? $data[1]['game'] : '');
            $this->_view->clip2Author = (isset($data[1]) ? $data[1]['curator']['display_name'] : '');
            $this->_view->clip2Views  = (isset($data[1]) ? $data[1]['views'] : '');
            $this->_view->clip2Time   = (isset($data[1]) ? $this->_getDateDiff(date("Y-m-d"), $data[1]['created_at'], 1) : '');
        }

        if(isset($data[2]))
        {
            $this->_view->clip3Name   = (isset($data[2]) ? $data[2]['title'] : '');
            $this->_view->clip3URL    = (isset($data[2]) ? explode("?", $data[2]['url'])[0] : '');
            $this->_view->clip3Img    = (isset($data[2]) ? $data[2]['thumbnails']['medium'] : 'Application/View/img/blank.png');
            $this->_view->clip3Game   = (isset($data[2]) ? $data[2]['game'] : '');
            $this->_view->clip3Author = (isset($data[2]) ? $data[2]['curator']['display_name'] : '');
            $this->_view->clip3Views  = (isset($data[2]) ? $data[2]['views'] : '');
            $this->_view->clip3Time   = (isset($data[2]) ? $this->_getDateDiff(date("Y-m-d"), $data[2]['created_at'], 1) : '');
        }

        if(isset($data[3]))
        {
            $this->_view->clip4Name   = (isset($data[3]) ? $data[3]['title'] : '');
            $this->_view->clip4URL    = (isset($data[3]) ? explode("?", $data[3]['url'])[0] : '');
            $this->_view->clip4Img    = (isset($data[3]) ? $data[3]['thumbnails']['medium'] : 'Application/View/img/blank.png');
            $this->_view->clip4Game   = (isset($data[3]) ? $data[3]['game'] : '');
            $this->_view->clip4Author = (isset($data[3]) ? $data[3]['curator']['display_name'] : '');
            $this->_view->clip4Views  = (isset($data[3]) ? $data[3]['views'] : '');
            $this->_view->clip4Time   = (isset($data[3]) ? $this->_getDateDiff(date("Y-m-d"), $data[3]['created_at'], 1) : '');
        }

        $this->_view->vod1img    = ((isset($VOD[0]) && $VOD[0]['thumbnail_url'] !== '') ? str_replace("%{height}", "300", str_replace("%{width}", "500", $VOD[0]['thumbnail_url'])) : 'Application/View/img/blank.png');
        $this->_view->vod1url    = (isset($VOD[0]) ? $VOD[0]['url'] : '');
        $this->_view->vod1length = (isset($VOD[0]) ? $VOD[0]['duration'] : '');
        $this->_view->vod1title  = (isset($VOD[0]) ? $VOD[0]['title'] : '');
        $this->_view->vod1age    = (isset($VOD[0]) ? $this->_getDateDiff($VOD[0]['created_at'], date("Y-m-d H:i:s"), 1) : '');
        $this->_view->vod1views  = (isset($VOD[0]) ? $VOD[0]['view_count'] : '');

        $this->_view->vod2img    = (isset($VOD[1]) ? str_replace("%{height}", "300", str_replace("%{width}", "500", $VOD[1]['thumbnail_url'])) : '');
        $this->_view->vod2url    = (isset($VOD[1]) ? $VOD[1]['url'] : '');
        $this->_view->vod2length = (isset($VOD[1]) ? $VOD[1]['duration'] : '');
        $this->_view->vod2title  = (isset($VOD[1]) ? $VOD[1]['title'] : '');
        $this->_view->vod2age    = (isset($VOD[1]) ? $this->_getDateDiff($VOD[1]['created_at'], date("Y-m-d H:i:s"), 1) : '');
        $this->_view->vod2views  = (isset($VOD[1]) ? $VOD[1]['view_count'] : '');

        $this->_view->vod3img    = (isset($VOD[2]) ? str_replace("%{height}", "300", str_replace("%{width}", "500", $VOD[2]['thumbnail_url'])) : '');
        $this->_view->vod3url    = (isset($VOD[2]) ? $VOD[2]['url'] : '');
        $this->_view->vod3length = (isset($VOD[2]) ? $VOD[2]['duration'] : '');
        $this->_view->vod3title  = (isset($VOD[2]) ? $VOD[2]['title'] : '');
        $this->_view->vod3age    = (isset($VOD[2]) ? $this->_getDateDiff($VOD[2]['created_at'], date("Y-m-d H:i:s"), 1) : '');
        $this->_view->vod3views  = (isset($VOD[2]) ? $VOD[2]['view_count'] : '');

        $this->_view->vod4img    = (isset($VOD[3]) ? str_replace("%{height}", "300", str_replace("%{width}", "500", $VOD[3]['thumbnail_url'])) : '');
        $this->_view->vod4url    = (isset($VOD[3]) ? $VOD[3]['url'] : '');
        $this->_view->vod4length = (isset($VOD[3]) ? $VOD[3]['duration'] : '');
        $this->_view->vod4title  = (isset($VOD[3]) ? $VOD[3]['title'] : '');
        $this->_view->vod4age    = (isset($VOD[3]) ? $this->_getDateDiff($VOD[3]['created_at'], date("Y-m-d H:i:s"), 1) : '');
        $this->_view->vod4views  = (isset($VOD[3]) ? $VOD[3]['view_count'] : '');

        $this->_view->vod5img    = (isset($VOD[4]) ? str_replace("%{height}", "300", str_replace("%{width}", "500", $VOD[4]['thumbnail_url'])) : '');
        $this->_view->vod5url    = (isset($VOD[4]) ? $VOD[4]['url'] : '');
        $this->_view->vod5length = (isset($VOD[4]) ? $VOD[4]['duration'] : '');
        $this->_view->vod5title  = (isset($VOD[4]) ? $VOD[4]['title'] : '');
        $this->_view->vod5age    = (isset($VOD[4]) ? $this->_getDateDiff($VOD[4]['created_at'], date("Y-m-d H:i:s"), 1) : '');
        $this->_view->vod5views  = (isset($VOD[4]) ? $VOD[4]['view_count'] : '');

        $this->_view->vod6img    = (isset($VOD[5]) ? str_replace("%{height}", "300", str_replace("%{width}", "500", $VOD[5]['thumbnail_url'])) : '');
        $this->_view->vod6url    = (isset($VOD[5]) ? $VOD[5]['url'] : '');
        $this->_view->vod6length = (isset($VOD[5]) ? $VOD[5]['duration'] : '');
        $this->_view->vod6title  = (isset($VOD[5]) ? $VOD[5]['title'] : '');
        $this->_view->vod6age    = (isset($VOD[5]) ? $this->_getDateDiff($VOD[5]['created_at'], date("Y-m-d H:i:s"), 1) : '');
        $this->_view->vod6views  = (isset($VOD[5]) ? $VOD[5]['view_count'] : '');

        $this->_view->vod7img    = (isset($VOD[6]) ? str_replace("%{height}", "300", str_replace("%{width}", "500", $VOD[6]['thumbnail_url'])) : '');
        $this->_view->vod7url    = (isset($VOD[6]) ? $VOD[6]['url'] : '');
        $this->_view->vod7length = (isset($VOD[6]) ? $VOD[6]['duration'] : '');
        $this->_view->vod7title  = (isset($VOD[6]) ? $VOD[6]['title'] : '');
        $this->_view->vod7age    = (isset($VOD[6]) ? $this->_getDateDiff($VOD[6]['created_at'], date("Y-m-d H:i:s"), 1) : '');
        $this->_view->vod7views  = (isset($VOD[6]) ? $VOD[6]['view_count'] : '');

        $this->_view->vod8img    = (isset($VOD[7]) ? str_replace("%{height}", "300", str_replace("%{width}", "500", $VOD[7]['thumbnail_url'])) : '');
        $this->_view->vod8url    = (isset($VOD[7]) ? $VOD[7]['url'] : '');
        $this->_view->vod8length = (isset($VOD[7]) ? $VOD[7]['duration'] : '');
        $this->_view->vod8title  = (isset($VOD[7]) ? $VOD[7]['title'] : '');
        $this->_view->vod8age    = (isset($VOD[7]) ? $this->_getDateDiff($VOD[7]['created_at'], date("Y-m-d H:i:s"), 1) : '');
        $this->_view->vod8views  = (isset($VOD[7]) ? $VOD[7]['view_count'] : '');

        return $this->_output->output(200, $this->_view->render(), false);
    }

    private function _getDateDiff($time1, $time2, $precision = 2)
	{
		if($precision === 0) {
			$precision = 2;
		}
		// If not numeric then convert timestamps
		if(!is_int($time1)) {
			$time1 = strtotime($time1);
		}
		if(!is_int($time2)) {
			$time2 = strtotime($time2);
		}
		// If time1 > time2 then swap the 2 values
		if($time1 > $time2) {
			list($time1, $time2) = array($time2, $time1);
		}
		// Set up intervals and diffs arrays
		$intervals = array('year', 'month', 'week', 'day', 'hour', 'minute', 'second');
		$diffs = array();
		foreach($intervals as $interval) {
			// Create temp time from time1 and interval
			$ttime = strtotime('+1 ' . $interval, $time1);
			// Set initial values
			$add = 1;
			$looped = 0;
			// Loop until temp time is smaller than time2
			while($time2 >= $ttime) {
				// Create new temp time from time1 and interval
				$add++;
				$ttime = strtotime("+" . $add . " " . $interval, $time1);
				$looped++;
			}
			$time1 = strtotime("+" . $looped . " " . $interval, $time1);
			$diffs[$interval] = $looped;
		}
		$count = 0;
		$times = array();

		foreach($diffs as $interval => $value) {

			// Break if we have needed precision
			if($count >= $precision) {
				break;
			}

			// Add value and interval if value is bigger than 0
			if($value > 0) {

				if($value != 1) {
					$interval .= "s";
				}
				// Add value and interval to times array
				$times[] = $value . " " . $interval;
				$count++;
			}
		}
		// Return string with times
		return implode(", ", $times);
	}

}