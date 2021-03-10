<?php
/**
 * Router Library
 *
 * Parses the URL to define parameters for Endpoints
 *
 * @package		itslit.co.uk
 * @author		Marc Towler <marc@marctowler.co.uk>
 * @copyright	Copyright (c) 2018 Marc Towler
 * @license		https://github.com/MarcTowler/itslit.co.uk/blob/master/LICENSE.md
 * @link		https://www.itslit.co.uk
 * @since		Version 0.1
 * @filesource
 */

namespace SITE\Library;


use PharIo\Manifest\Library;

class Router
{
    private $_segments = [];
    private $_parameters = [];
    private $_headers = [];
    private $_config;

    public function __construct()
    {
        $this->_config = new Config();
        $this->getSegments();
        $this->getParameters();
        $this->getHeaders();
    }

    private function getURI()
    {
        return rtrim(substr($_SERVER['REQUEST_URI'], 1), '/');
    }

    private function getSegments()
    {
        $this->_segments = explode('/', $this->getURI());
    }

    public function getController()
    {
        return ((isset($this->_segments[0]) && $this->_segments[0] != '')) ? $this->_segments[0] : $this->_config->getSettings("DEFAULT_CONTROLLER");
    }

    public function getMethod()
    {
        return ((isset($this->_segments[1]) && $this->_segments[1] != '')) ? $this->_segments[1] : $this->_config->getSettings("DEFAULT_ACTION");
    }

    private function getParameters()
    {
        if(is_array($this->_segments))
        {
            $parameters = (count($this->_segments) > 2) ? array_slice($this->_segments, 2) : false;

            if(!$parameters)
            {
                return false;
            }

            //remove empty parameters
            $parameters = array_diff($parameters, array(''));

            //reindex the array
            $parameters = array_values($parameters);

            $this->_parameters = $parameters;
        }
    }

    private function getHeaders()
    {
        foreach(apache_request_headers() as $key => $val)
        {
            $this->_headers[$key] = $val;
        }
    }

    public function getParameter($index)
    {
        return (is_array($this->_parameters) && isset($this->_parameters[$index])) ? $this->_parameters[$index] : false;
    }

    public function getAllParameters()
    {
        return (!empty($this->_parameters)) ? $this->_parameters : false;
    }

    public function getHeader($index)
    {
        return (is_array($this->_headers) && isset($this->_headers[$index])) ? $this->_headers[$index] : false;
    }

    public function getAllHeaders()
    {
        return (!empty($this->_headers)) ? $this->_headers : false;
    }
}