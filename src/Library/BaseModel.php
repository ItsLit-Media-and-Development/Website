<?php
namespace SITE\Library;


abstract class BaseModel
{
	protected $_db;
	protected $_config;
	protected $_output;

	public function __construct()
	{
		$this->_config = new Config();
		$this->_db = $this->_config->database();
	}
}