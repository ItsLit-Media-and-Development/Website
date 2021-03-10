<?php
/**
 * OAuth Model Class
 *
 * All database functions regarding the OAuth endpoint is stored here
 *
 * @package		API
 * @author		Marc Towler <marc@marctowler.co.uk>
 * @copyright	Copyright (c) 2018 Marc Towler
 * @license		https://github.com/Design-Develop-Realize/api/blob/master/LICENSE.md
 * @link		https://api.itslit.uk
 * @since       Version 1.0
 * @filesource
 */

namespace SITE\Model;

use SITE\Library;


class OauthModel extends Library\BaseModel
{
	public function __construct()
	{
		parent::__construct();
	}

    public function create_token($access, $refresh, array $user)
    {
        try
        {
            $stmt = $this->_db->prepare("INSERT INTO api_users (username, channel, SL_access_token, SL_token_expires, ip, SL_name, twitch_id, twitch_icon, SL_refresh_token) VALUES (:user, :channel, :access, DATE_ADD(NOW(), INTERVAL 1 HOUR), :ip, :slname, :tid, :icon, :refresh)");
            $stmt->execute(
                [
                    ':user' => $user['twitch']['display_name'],
                    ':channel' => $user['twitch']['name'],
                    ':access' => $access,
                    ':ip' => $_SERVER['REMOTE_ADDR'],
                    ':slname' => $user['streamlabs'],
                    ':tid' => $user['twitch']['id'],
                    ':icon' => $user['twitch']['icon_url'],
                    ':refresh' => $refresh
                ]
            );

            return ($stmt->rowCount() > 0) ? true : false;
        } catch(\PDOException $e)
        {
            return $e->getMessage();
        }
    }

	public function is_token_valid($username)
	{
		try {
			$stmt = $this->_db->prepare("SELECT COUNT(username) AS ValidTokens FROM api_users WHERE SL_token_expires > NOW() AND username = :username");
			$stmt->execute([':username' => $username]);

			$res = $stmt->fetch(\PDO::FETCH_ASSOC);

			return ($res['ValidTokens'] > 0) ? true : false;
		} catch(\PDOException $e) {
			return $e->getMessage();
		}
	}
  
	public function authorize($name, $type)
	{
		try {
			$stmt = $this->_db->prepare("SELECT * FROM api_users WHERE username = :username");
			$stmt->execute([':username' => $name]);

			$res = $stmt->fetch(\PDO::FETCH_ASSOC);

			return ($type == 'twitch') ? $res['twitch_token'] :
				($type == 'sl') ? $res['SL_access_token'] : $res['SE_token'];
		} catch(\PDOException $e) {
			return $e->getMessage();
		}
	}
}