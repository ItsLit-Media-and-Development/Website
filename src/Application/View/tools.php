<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="Application/View/img/logo.png" type="image/x-icon">
        <link rel="icon" href="Application/View/img/logo.png" type="image/x-icon">
        <title>ItsLittany</title>
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@itslittany">
        <meta name="twitter:title" content="ItsLittany - Streamer and Developer">
        <meta name="twitter:description" content="Itslittany is a part time affiliate Twitch Streamer who also makes bots and projects for individuals.">
        <meta name="twitter:creator" content="@itslittany">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="Application/View/img/header.png">

        <!-- Open Graph data -->
        <meta property="og:title" content="ItsLittany - Streamer and Developer" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://itslit.uk" />
        <!--<meta property="og:image" content="" />-->
        <meta property="og:description" content="Itslittany is a part time affiliate Twitch Streamer who also makes bots and projects for individuals." />
        <meta property="og:site_name" content="ItsLittany - Streamer and Developer" />
        
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="Application/View/css/font-awesome.min.css">
        <link rel="stylesheet" href="Application/View/css/bootstrap.min.css">
        <link rel="stylesheet" href="Application/View/animate.min.css">
        <!-- plugins css -->
        <link href="Application/View/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
        <link href="Application/View/css/owl.carousel.min.css" rel="stylesheet">
        <!-- theme css -->
        <link rel="stylesheet" href="Application/View/css/theme.min.css">
        <link rel="stylesheet" href="Application/View/css/custom.css">
    </head>
    <body class="fixed-header">
        <!-- header -->
        <header id="header">
            <div class="container">
                <div class="navbar-backdrop">
                    <div class="navbar">
                        <div class="navbar-left">
                            <a class="navbar-toggle">
                                <i class="fa fa-bars"></i>
                            </a>
                            <!--<a style="padding-top:10px; padding-left:10px;" href="index.html" class="logo"><img style="height:40px; width:auto;" src="Application/View/img/logo_r.png" /></a>-->
                            <nav class="nav">
                                <ul>
                                    <li>
                                        <a href="/">
                                            Home
                                        </a>
                                    </li>
                                    <!--<li>
                                        <a href="/games">
                                            Games
                                        </a>
                                    </li>-->
                                    <li>
                                        <a href="/perks">
                                            Sub-Perks
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/spec">
                                            The Gear
                                        </a>
                                    </li>
                                    <!--<li>
                                        <a href="https://www.designbyhumans.com/shop/itslittany/" target="_blank">
                                            Merch
                                        </a>
                                    </li>-->
                                    <li>
                                        <a href="/tools">
                                            Stream Tools
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/rpg">
                                            Discord/Twitch RPG 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/contact">
                                            Contact
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="nav navbar-right">
                            <ul>
                                <?php if($this->loggedIn){ ?>
                                <!--<li class="hidden-xs-down">
                                    <a href="<?php echo $this->authURL; ?>">
                                        <span class="tw-button__text" data-a-target="tw-button-text">
                                            <i class="fa fa-twitch"></i>
                                            &nbsp; Connect&nbsp;with&nbsp;Twitch
                                        </span>
                                    </a>
                                </li>-->
                                <?php /*} else {*/?>
                                <li class="has-dropdown">
                                    <img style="width:35px;" src="https://static-cdn.jtvnw.net/jtv_user_pictures/c8089f6b1f7d75d4-profile_image-300x300.png" /> &nbsp; 
                                    <span style="font-weight:600;color:#B1B1B1;">
                                        ItsLittany <i class="fa fa-caret-down"></i>
                                    </span>
                                    <ul style="top:35px;left:-3px;padding-bottom:2px;">
                                        <li>
                                            <a href="dashboard.php">
                                                <i style="padding-right:5px;" class="fa fa-tachometer"></i>
                                                My Dashboard
                                            </a>
                                        </li>
                                        <li>
                                            <a class="disabled" style="text-decoration: line-through;">
                                                <i style="color:red;padding-left:2px;padding-right:5px;" class="fa fa-lock"></i> 
                                                The Icebox
                                            </a>
                                        </li>
                                        <hr style="margin:0px; border-top:#2575dc 1px solid" />
                                        <hr style="margin:0px;" />
                                        <li style="">
                                            <a href="logout.php">
                                                <i style="color:red;padding-right:5px;" class="fa fa-sign-out"></i> 
                                                Log Out
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <?php }?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /header -->
        <!-- main -->
        <div class="site-content" role="main">
            <section class="py-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0 alert-info">
                                        The INbox - Q&A System
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <!-- start .post -->
                                    <div class="post border-0 mb-0 pb-0">
                                            <!--<p class="alert alert-primary">
                                                Looking for BETA testers! <a target="_blank" href="https://twitter.com/messages/compose?recipient_id=705431755717791746">Click here to drop ItsLittany a DM on Twitter</a>
                                            </p>-->
                                        <div class="post-thumbnail" align="center">
                                            <img class="post-img" src="Application/View/img/qna.PNG" alt="INbox in action" />
                                        </div>
                                        <div class="post-body">
                                            <p>
                                                Every streamer, pro or casual, knows what its like to go digging through the chat to try and find questions asked to them. Or to read a chat thread that has annoyed comments with repeated questions being asked. 
                                            </p>
                                            <p>
                                                However, with The INbox you not only keep track of those questions, you also get them in the order they were asked so no fan has to feel left out. Even better, with the way the app is designed you can answer them at your own pace, in your own time.  You are in control!
                                            </p>
                                            <p>
                                                All your viewers have to do is use a simple command when asking their question, the information is filtered to you, and you're left to stream like a pro all while not breaking a sweat
                                            </p>
                                            <br />
                                            <p>
                                                <strong>Features:</strong>
                                                <ul>
                                                    <li>
                                                        Automatic updating of the Question List
                                                    </li>
                                                    <li>
                                                        Mobile friendly
                                                    </li>
                                                    <li>
                                                        Easy to embed into OBS/SLOBS/XSplit
                                                    </li>
                                                    <li>
                                                        Works with all major chatbots
                                                    </li>
                                                    <li>
                                                        100% free to use
                                                    </li>
                                                    <li>
                                                        Simple to use
                                                    </li>
                                                </ul>
                                            </p>
                                            <center>
                                                <button class="btn btn-outline btn-lg btn-rounded badge-warning">
                                                <a target="_blank" href="https://twitter.com/messages/705431755717791746-705431755717791746?recipient_id=705431755717791746&text=I%20would%20like%20to%20sign%20up%20to%20the%20beta%20for%20The%20INbox">
                                                    Sign up for the beta via Twitter DM!
                                                </a>
                                                </button>
                                            </center>
                                        </div>
                                    </div>
                                    <!-- end .post -->
                                </div>
                                <!--<div class="card-footer d-block d-md-flex align-items-center">
                                    <a class="btn btn-outline ml-0 mb-2 mb-md-0 d-block d-md-inline" href="blog-post.html" role="button">
                                        Read more
                                    </a>
                                    <div class="d-flex d-md-inline-block ml-auto">
                                        <button class="btn btn-default btn-icon font-size-md mr-auto mr-md-1">
                                            <i class="ya ya-like"></i> Like (30)
                                        </button>
                                        <button class="btn btn-default btn-icon font-size-md">
                                            <i class="ya ya-comment"></i> Comments (20)
                                        </button>
                                    </div>
                                </div>-->
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h2 class="mb-0 alert-info">
                                            TES - Twitch Embed System
                                    </h2>
                                </div>
                                <div class="card-body">
                                    <!-- start .post -->
                                    <div class="post border-0 mb-0 pb-0">
                                        <div class="post-thumbnail" align="center">
                                            <img class="post-img" src="Application/View/img/TES.PNG" alt="TES in action" />
                                        </div>
                                        <div class="post-body">
                                            <p>
                                                TES allows you to post your Twitch stream into your tweet and play a preview of what is going on in stream! The information posted on Twitter is automatically updated to include the game you are playing and your stream title.
                                            </p>
                                            <div class="row">
                                            <div class="col">
                                                <select class="form-control mb-3"id="platform" name="platform">
                                                    <option value="">Select your platform</option>
                                                    <option value="mixer">Mixer</option>
                                                    <option value="twitch">Twitch</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <input class="form-control mb-3" id="inputname" type="text" placeholder="Enter your username here" />
                                            </div>
                                            <div class="col">
                                                <input class="form-control" id="output" type="text" placholder="" readonly="" />
                                            </div>
                                            </div>
                                            <p class="alert alert-primary" style="display: none;" id="alert">Link Copied!</p>
                                            <center>
                                                <button class="btn btn-outline btn-lg btn-rounded badge-warning" data-container="body" data-toggle="popover" data-placement="top" data-content="Copied to Clipboard" type="button" onclick="setValue()">
                                                    Generate your TES link
                                                </button>
                                            </center>
                                            <br />
                                            <br />
                                            <p>
                                                Just put the above link into your Tweet and let the magic happen!
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end .post -->
                                </div>
                                <!--<div class="card-footer d-block d-md-flex align-items-center">
                                    <a class="btn btn-outline ml-0 mb-2 mb-md-0 d-block d-md-inline" href="blog-post.html" role="button">
                                        Read more
                                    </a>
                                    <div class="d-flex d-md-inline-block ml-auto">
                                        <button class="btn btn-default btn-icon font-size-md mr-auto mr-md-1">
                                            <i class="ya ya-like"></i> Like (30)
                                        </button>
                                        <button class="btn btn-default btn-icon font-size-md">
                                            <i class="ya ya-comment"></i> Comments (20)
                                        </button>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /main -->
        <!-- footer -->
        <footer id="footer">
            <div class="container">
                <div class="footer-bottom" style="margin-top:-5px;">
                    <img style="height:100px; width:auto;" src="Application/View/img/logo.png" />
                    <div class="footer-social" style="margin-top:40px;">
                        <a href="https://www.twitter.com/itslittany" target="_blank" data-toggle="tooltip" title="twitter">
                            <i class="fa fa-twitter"></i>
                        </a>
                        <a href="https://steamcommunity.com/groups/itslittany" target="_blank" data-toggle="tooltip" title="steam">
                            <i class="fa fa-steam"></i>
                        </a>
                        <a href="https://www.twitch.tv/itslittany" target="_blank" data-toggle="tooltip" title="twitch">
                            <i class="fa fa-twitch"></i>
                        </a>
                        <a href="https://www.youtube.com/user/itslittany126TV" target="_blank" data-toggle="tooltip" title="youtube">
                            <i class="fa fa-youtube"></i>
                        </a>
                    </div>
                    <p>
                        Copyright &copy; 2019 
                        <a href="https://www.itslit.uk" target="_blank">
                            ItsLittany
                        </a>
                        . All rights reserved.
                        <br />
                    </p>
                </div>
            </div>
        </footer>
        <!-- /footer -->
        <!-- vendor js -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37729517-3"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-37729517-3');
        </script>

        <script src="Application/View/js/jquery-3.2.1.min.js"></script>
        <script src="Application/View/js/popper.min.js"></script>
        <script src="Application/View/js/bootstrap.min.js"></script>
        <script src="Application/View/js/lightbox.js"></script>
        <script type="text/javascript">
            (function($) {
            "use strict";
            $('.btn').click(function() {
                copy(this);
                return false;
            });
            })(jQuery);
        </script>
        <script>
            function copyText()
            {
                var copyText = document.getElementById("output");

                // Select the text field 
                copyText.select();

                // Copy the text inside the text field 
                document.execCommand("copy");

                document.getElementById('alert').style.display = "block";
            }

            function setValue() {
                if(document.getElementById('inputname').value !== '')
                {
                    if(document.getElementById('platform').value == 'twitch')
                    {
                        document.getElementById('output').value = "https://itslit.uk/TES/twitch/" + document.getElementById('inputname').value;

                        copyText();
                    } else if(document.getElementById('platform').value == 'mixer') {
                        document.getElementById('output').value = "https://itslit.uk/TES/mixer/" + document.getElementById('inputname').value;
                        
                        copyText();
                    } else {
                        document.getElementById('output').value = "Select your platform!";
                    }
                } else {
                    document.getElementById('output').value = 'Enter your username!';
                }
            }
        </script>
        <!-- theme js -->
        <script src="Application/View/js/theme.min.js"></script>
    </body>
</html>