<?php
/**
 * Config Library
 *
 * Parses the config file and provides core functions
 *
 * @package		itslit.uk
 * @author		Marc Towler <marc@marctowler.co.uk>
 * @copyright	Copyright (c) 2021 Marc Towler
 * @link		https://www.itslit.uk
 * @since		Version 0.1
 * @filesource
 */

namespace SITE\Library;


class Config
{
    /**
     * @var array $site Holds the config settings
     */
    private $site;

    /**
     * @var object $db Holds the database connection object
     */
    protected $db;

    /**
     * Config constructor. Pulls the ini settings
     */
    public function __construct()
    {
        //Load the config files in and split them
        $this->site = parse_ini_file("Config/site.ini");
    }

    /**
     * Get the system's name from the config file
     *
     * @return String returns the system's name
     * @throws \Exception on config error
     */
    public function getName()
    {
        if(isset($this->site['name']) && $this->site['name'] != '')
        {
            return $this->site['name'];
        } else {
            throw new \Exception('config is missing "name" setting');
        }
    }

    /**
     * Pulls a config setting from the file
     *
     * @param string $key The requested setting
     * @return String The setting value
     * @throws \Exception on malformed $key
     */
    public function getSettings($key)
    {
        if($key == '' || !is_string($key))
        {
            throw new \Exception('config::getSettings() must have a string variable passed');
        }

        return $this->site[$key];
    }

    /**
     * Connects to the database
     *
     * @param string $override Optional allows temporary settings change
     * @return object|\PDO The database connection object
     * @throws \Exception on missing settings
     */
    public function database($override = '')
    {
        if(!is_object($this->db))
        {
            if(!isset($this->site['DBHOST']))
            {
                throw new \Exception("config::database needs settings, check your config");
            } else {
                $this->db = new \PDO("mysql:host=" . $this->site['DBHOST'] . ";port=" . $this->site['PORT'] .
                    ";dbname=" . $this->site['DBNAME'], $this->site['DBUSER'], $this->site['DBPASS']);
                $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }
        } else {
            $this->db = new \PDO("mysql:host=" . $override['DBHOST'] . ";port=" . $override['PORT'] .
                ";dbname=" . $override['DBNAME'], $override['DBUSER'], $override['DBPASS']);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }

        return $this->db;
    }
}