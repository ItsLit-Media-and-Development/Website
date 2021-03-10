<?php
namespace SITE\Library;


abstract class BaseController
{
	protected $_params;
	protected $_output;
	protected $_log;
    protected $_router;
	protected $_view;
	protected $_header;

	public function __construct()
	{
		$this->_router = new Router();
		$this->_params = $this->_router->getAllParameters();
		$this->_output = new Output();
        $this->_log    = new Logger();
		$this->_view   = new View();

		$this->_view->authURL = 'https://api.twitch.tv/kraken/oauth2/authorize?response_type=code&approval_prompt=auto&scope=user_read%20user_subscriptions&redirect_uri=https://dev.itslit.uk/Oauth/twitch/&client_id=prsbbjzh28rr4m0urdir6h79hy4yvz';
		$this->_view->loggedIn = false;
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
	public function main()
	{
		$this->_log->set_message("Main() Called from " . $_SERVER['REMOTE_ADDR'] . ", returning a 501", "INFO");

		return $this->_output->output(501, "Function not implemented", false);
	}
}