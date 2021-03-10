<?php
/**
 * Blog Endpoint
 *
 * @package		itslit.co.uk
 * @author		Marc Towler <marc@marctowler.co.uk>
 * @copyright	Copyright (c) 2018 Marc Towler
 * @license		https://github.com/MarcTowler/itslit.co.uk/blob/master/LICENSE.md
 * @link		https://www.itslit.co.uk
 * @since		Version 0.1
 * @filesource
 */

 namespace SITE\Controllers;

 use SITE\Library;
 use SITE\Model;
 use GuzzleHttp\Client;

class Blog extends Library\BaseController
{
    private $_guzzle;

    public function __construct()
    {
        parent::__construct();

        $this->_guzzle = new Client();
    }

    public function __destruct()
    {
        $this->_log->saveMessage();
    }

    /**
     * Covers the router's default method incase a part of the URL was missed
     *
     * @return array|string
     * @throws \Exception
     */
    public function index()
    {
        $this->_view->setTemplate('Application/View/blog-list');

        return $this->_output->output(200, $this->_view->render(), false);
    }

    public function post()
    {
        $this->_view->setTemplate('Application/View/blog-post');

        return $this->_output->output(200, $this->_view->render(), false);
    }
}