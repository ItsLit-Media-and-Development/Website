<?php
/**
 * Blog Model Class
 *
 * All database functions regarding the Blog endpoint is stored here
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

class BlogModel
{
    private $_db;
    private $_config;
    private $_output;

    public function __construct()
    {
        $this->_config = new Library\Config();
        $this->_db = $this->_config->database();
    }

    public function list_posts()
    {
        $stmt->prepare("SELECT p.postID, m.name, p.postTitle, p.postSlug, p.postDesc, p.postDate, p.views FROM blog_posts_seo p, users m WHERE p.poster = m.ID AND postDate <= NOW() AND published = 1 ORDER BY postDate DESC");
        $stmt->execute();

        $this->_output = $stmt->fetchAll(\PDO::FETCH_ASSOC);

        return $this->_output;
    }

    public function get_post(string $slug, bool $preview)
    {
        if($preview)
        {
            $stmt->prepare("SELECT p.postID, m.name, p.postTitle, p.postDesc, p.postCont, p.postDate, views FROM blog_posts_seo p, users m WHERE m.ID = p.poster AND postID = :postID AND published = 0");
        } else {
            $stmt->prepare("SELECT p.postID, m.memberID, m.name, p.postTitle, p.postDesc, p.postCont, p.postDate, views FROM blog_posts_seo p, users m WHERE m.memberID = p.poster AND postSlug = :postID AND published = 1");
        }

        $stmt->execute(array(':postID' => $slug));
        $this->_output = $stmt->fetch();

        return $this->_output;
    }
}