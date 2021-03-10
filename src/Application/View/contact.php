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
                                <?php if(!$this->loggedIn){ ?>
                                <!--<li class="hidden-xs-down">
                                    <a href="<?php echo $this->authURL; ?>">
                                        <span class="tw-button__text" data-a-target="tw-button-text">
                                            <i class="fa fa-twitch"></i>
                                            &nbsp; Connect&nbsp;with&nbsp;Twitch
                                        </span>
                                    </a>
                                </li>-->
                                <?php } else {?>
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
            <section class="overflow-hidden py-8 px-3 px-md-0" style="background-color: #252525" data-parallax="scroll" data-image-src="https://static.giantbomb.com/uploads/original/0/5370/2791736-7947254676-Star_.jpg">
                <div class="overlay" ya-style="background-color: #252525;opacity: .9"></div>
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h2 class="display-3 text-white mb-3">
                                Contact ItsLittany
                            </h2>
                            <p class="h5 font-weight-light text-warning mb-0">
                                Drop me a message!
                            </p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="py-lg-6">
                <?php if($this->submitted) {?>
                <div class="alert alert-darken-success" role="alert">
                    <center>
                        Form successfully submitted, thank you!
                    </center>
                </div>
                <?php }?>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <form method="POST" action="">
                                <div class="form-group">
                                    <label for="name">
                                        Name
                                    </label>
                                    <input type="text" class="form-control form-control-lg" id="name" name="name" placeholder="Enter your name" />
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="email">
                                                Email address
                                            </label>
                                            <input type="email" class="form-control form-control-lg" id="email" name="email" placeholder="Enter email" />
                                            <small class="form-text text-muted">
                                                We’ll never share your email with anyone else.
                                            </small>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="message">
                                        Message
                                    </label>
                                    <textarea class="form-control form-control-lg" id="message" name="message" rows="5"></textarea>
                                </div>
                                <button type="submit" class="btn btn-outline btn-lg mt-3 mt-lg-4">
                                    Send message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
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
        <!-- theme js -->
        <script src="Application/View/js/theme.min.js"></script>
    </body>
</html>