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
        $this->_view->setTemplate('Application/View/blog-list', true);

        return $this->_output->output(200, $this->_view->render(), false);
    }

    public function post()
    {
        $postTitle = str_replace(".html", "", $this->_params[0]);

        $this->_view->setTemplate('Application/View/blog-post', true);
        $this->_view->title = ucwords(str_replace("-", " ",$postTitle));
        $this->_view->postedOn = "September 1, 2022";
        $this->_view->readTime = "5";
        $this->_view->body = "

        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis elementum convallis turpis, in porttitor ante rhoncus sit amet. Donec congue orci vel leo faucibus, ut egestas arcu mollis. Praesent dictum eleifend vestibulum. Nulla feugiat magna ut efficitur congue. Pellentesque a sodales risus, id volutpat ante. Cras ullamcorper nec sapien at sodales. Proin nec mi et dolor rhoncus vestibulum. Nam rutrum, dui vitae porttitor auctor, lacus odio rutrum nisl, a tempor leo quam sollicitudin tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam egestas elit eget augue posuere mollis. Morbi tristique rhoncus sapien, at accumsan lorem finibus nec. Donec molestie consectetur varius.
        
        Fusce sed bibendum odio, eget porttitor massa. Quisque vitae viverra elit. Donec ante arcu, luctus ac metus consectetur, mollis malesuada diam. Phasellus vel tellus blandit, tincidunt leo at, sodales neque. Praesent semper dapibus consectetur. Sed vitae suscipit quam. Phasellus justo nulla, cursus pulvinar nunc vel, tempor faucibus neque. Etiam rutrum suscipit fringilla. Curabitur vel justo enim. Integer dignissim maximus est, non ornare augue facilisis at. Morbi aliquam sem rhoncus quam faucibus aliquet. Vivamus nec dolor auctor, sodales nunc a, eleifend est.
        
        Etiam in consectetur tortor, quis laoreet odio. Nullam facilisis ac sapien sed maximus. Phasellus eu diam elit. Maecenas porta felis ut mauris dictum hendrerit. Vestibulum nec vulputate nibh, a placerat mauris. Sed accumsan id dolor eget blandit. Mauris faucibus nibh vitae dui mattis tristique. Mauris sit amet bibendum nibh. Cras auctor magna et nunc scelerisque, non bibendum nunc bibendum. Nullam pretium nibh tortor, ac ultricies enim aliquet sit amet. Nunc nec cursus erat. Pellentesque quis magna nulla. Nunc vitae rutrum metus, a tempor neque. Nulla egestas porta risus. Aliquam pellentesque bibendum laoreet.
        
        Ut ut orci nulla. Mauris id lectus justo. Curabitur aliquet metus eget dolor varius, sit amet tincidunt arcu ullamcorper. Nunc dolor augue, accumsan ac interdum ut, tempor tempus mauris. Nunc molestie ex tellus, ac facilisis sem auctor vel. Aliquam massa arcu, sodales quis semper porta, fringilla nec leo. Mauris nec tristique elit. Maecenas justo erat, malesuada vel ornare quis, semper et nisl. Nullam imperdiet dolor quis ligula congue dignissim. Donec vel tellus ac urna molestie vehicula.
        
        Sed eget tempus nulla, et blandit ligula. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec dictum at nunc ut vulputate. Proin malesuada suscipit pretium. Morbi nulla mi, imperdiet eu placerat nec, maximus id leo. Integer consectetur condimentum diam ac placerat. Morbi dui erat, luctus sit amet tellus nec, eleifend ornare eros. Donec ornare rhoncus turpis at rutrum. Nunc dapibus ullamcorper posuere. Curabitur dapibus, tellus nec ullamcorper facilisis, eros lectus imperdiet est, et elementum eros erat id metus. Phasellus est lectus, faucibus sed sodales eu, condimentum at ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi at vehicula eros, sit amet fermentum orci.
        
        Quisque gravida elementum nulla, et porta ligula eleifend quis. Vivamus dapibus magna tellus, in fringilla mauris lobortis ac. Proin mattis, mi vel congue varius, augue orci lacinia ipsum, a mattis nulla elit nec lectus. Praesent vestibulum, nunc quis vehicula malesuada, neque ligula pellentesque ipsum, vitae venenatis urna sapien sed ex. Praesent erat massa, imperdiet sed consectetur eget, tempus non ligula. Ut nec tempor arcu. Proin pretium eleifend augue vitae tempor. Ut eget turpis rhoncus, auctor neque pharetra, vehicula lorem. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce rutrum ipsum vel ligula euismod auctor. Cras sed urna luctus, mollis augue vitae, tincidunt justo. Donec vel euismod magna.
        
        Vestibulum porttitor libero in diam sollicitudin, a pretium libero blandit. Vestibulum in condimentum lorem. Etiam in elit nunc. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Maecenas ultrices magna sed blandit posuere. Ut non mi ligula. In consequat consequat sagittis. Aenean aliquam sapien diam, convallis pharetra elit luctus vitae. In hac habitasse platea dictumst. Donec a sem est. Morbi non euismod leo, nec porta nisi. Sed eros justo, molestie nec massa eu, dignissim iaculis eros. Maecenas massa lacus, tristique eu lorem a, mattis pretium orci.
        
        Duis lobortis tempor orci, vitae commodo mauris. Nullam arcu elit, rutrum at purus eget, finibus aliquam sem. Morbi sed est lacus. Etiam dapibus, ligula sed varius blandit, sem ligula malesuada ipsum, nec consequat libero lectus eu lacus. Sed non diam tortor. Sed viverra mauris sagittis magna faucibus, et pulvinar nulla fringilla. Fusce vitae tempor risus, in facilisis lectus. Ut aliquam vestibulum posuere. Nunc vel magna urna. Proin id mauris mauris.
        
        Integer sed ultrices risus. Suspendisse tincidunt lorem ac odio lobortis lacinia. Vestibulum condimentum, purus at dictum viverra, nisl nisl ullamcorper ex, id posuere orci ex id magna. Sed et ante ut sapien rhoncus molestie id eu diam. Sed vestibulum rhoncus magna, ut feugiat dolor dictum sit amet. Suspendisse eget tristique neque, id posuere augue. Sed est purus, sagittis at tortor ac, sollicitudin interdum ex.
        
        Etiam lorem leo, vestibulum rhoncus laoreet eget, condimentum non tortor. Sed commodo cursus velit, ac suscipit ex. Aliquam erat volutpat. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc sagittis tellus massa, in tempor ipsum iaculis sed. Pellentesque quis ligula tincidunt purus malesuada hendrerit. Maecenas porttitor nulla ac rutrum semper. Vivamus laoreet massa ut bibendum dignissim. Donec sit amet odio sed erat congue commodo. Pellentesque nec dictum purus. Vestibulum at ullamcorper turpis. Morbi convallis lacus sed nulla semper, at aliquam mi malesuada. Ut et neque sollicitudin, ultricies nisi sed, sagittis ex.
        
        Nam sed lacinia felis. Donec viverra urna nec diam ultrices, dignissim elementum nunc pellentesque. Nullam ornare ac augue quis finibus. Nunc mollis aliquam lorem, vel dignissim lectus vestibulum id. Nullam accumsan nec neque ut viverra. Nunc mi purus, sagittis posuere nisi ac, egestas lobortis. ";

        return $this->_output->output(200, $this->_view->render(), false);
    }

    //Function to calculate the read time of a blog post
    private function _ReadTime(string $body)
    {
        $wordCount = str_word_count($body);
        $calc = (float) $wordCount / 200;
        $min = floor($calc);
        $sec = $calc - $min;
        $sec = floor(($sec * 0.6) *100);
        $min += ($sec >= 30) ? 1 : 0;

        return $min;
    }
}