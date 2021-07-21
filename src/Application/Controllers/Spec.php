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
        $this->_view->setTemplate('Application/View/spec', true);

        return $this->_output->output(200, $this->_view->render(), false);
    }
}