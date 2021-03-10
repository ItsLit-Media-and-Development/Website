<?php
/**
 * Index Model Class
 *
 * All database functions regarding the Index endpoint is stored here
 *
 * @package		itslit.co.uk
 * @author		Marc Towler <marc@marctowler.co.uk>
 * @copyright	Copyright (c) 2018 Marc Towler
 * @license		https://github.com/MarcTowler/itslit.co.uk/blob/master/LICENSE.md
 * @link		https://www.itslit.co.uk
 * @since		Version 0.1
 * @filesource
 */

namespace SITE\Model;

use SITE\Library;

class IndexModel
{
    private $_db;
    private $_config;
    private $_output;

    public function __construct()
    {
        $this->_config = new Library\Config();
        $this->_db = $this->_config->database();
    }

}