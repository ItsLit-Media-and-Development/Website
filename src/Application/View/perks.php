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
        <section>
            <div class="container">
                <h1 class="text-center">
                    <u>
                        Twitch Subscriber Perks
                    </u>
                </h1>
                <br />
                <br />
                <h2 class="text-center">
                    Subscriber Badges
                </h2>
                <hr />
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->OneMonthImg; ?>" />
                        <br />
                        <?php echo $this->OneMonthName; ?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->ThreeMonthImg; ?>" />
                        <br />
                        <?php echo $this->ThreeMonthName; ?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->SixMonthImg; ?>" />
                        <br />
                        <?php echo $this->SixMonthName; ?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->NineMonthImg; ?>" />
                        <br />
                        <?php echo $this->NineMonthName; ?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->TwelveMonthImg; ?>" />
                        <br />
                        <?php echo $this->TwelveMonthName; ?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->TwentyFourMonthImg; ?>" />
                        <br />
                        <?php echo $this->TwentyFourMonthName; ?>
                    </div>
                </div>
                <br />
                <br />
                <br />
                <h2 class="text-center">
                    Exclusive Emotes
                </h2>
                <hr />
                <div class="row">
                    <div class="col-lg-1">
                        <h3>
                            $4.99
                        </h3>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->emote1Img;?>" />
                        <br />
                        <?php echo $this->emote1Name;?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->emote2Img;?>" />
                        <br />
                        <?php echo $this->emote2Name;?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->emote3Img;?>" />
                        <br />
                        <?php echo $this->emote3Name;?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->emote4Img;?>" />
                        <br />
                        <?php echo $this->emote4Name;?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <br />
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-lg-1">
                        <h3>
                            $9.99
                        </h3>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->t2Emote1Img; ?>" />
                        <br />
                        <?php echo $this->t2Emote1Name;?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <br />
                    </div>
                    <div class="col-lg-2 text-center">
                        <br />
                    </div>
                    <div class="col-lg-2 text-center">
                        <br />
                    </div>
                    <div class="col-lg-2 text-center">
                        <br />
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-lg-1">
                        <h3>
                            $24.99
                        </h3>
                    </div>
                    <div class="col-lg-2 text-center">
                        <img src="<?php echo $this->t3Emote1Img; ?>" />
                        <br />
                        <?php echo $this->t3Emote1Name;?>
                    </div>
                    <div class="col-lg-2 text-center">
                        <br />
                    </div>
                    <div class="col-lg-2 text-center">
                        <br />
                    </div>
                    <div class="col-lg-2 text-center">
                        <br />
                    </div>
                    <div class="col-lg-2 text-center">
                        <br />
                    </div>
                </div>
                <br />
                <br />
                <br />
                <h2 class="text-center">
                    VIP
                </h2>
                <hr />
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <h3>
                            VIP Bronze
                        </h3>
                    </div>
                    <div class="col-lg-5 text-center">
                        <h4>
                            Comes with $4.99 subscription
                        </h4>
                    </div>
                    <div class="col-lg-4 text-center">
                        <ul>
                            <li>
                                <h4>
                                    Earn 3x more LitCoins.
                                </h4>
                            </li>
                            <li>
                                <h4>
                                    4000 Bonus LitCoins every month.
                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <h3>
                            VIP Silver
                        </h3>
                    </div>
                    <div class="col-lg-5 text-center">
                        <h4>
                            Comes with $9.99 subscription
                        </h4>
                    </div>
                    <div class="col-lg-4 text-center">
                        <ul>
                            <li>
                                <h4>
                                    Earn 4x more LitCoins.
                                </h4>
                            </li>
                            <li>
                                <h4>
                                    6000 Bonus LitCoins every month.
                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-lg-3 text-center">
                        <h3>
                            VIP Gold
                        </h3>
                    </div>
                    <div class="col-lg-5 text-center">
                        <h4>
                            Comes with $24.99 subscription
                        </h4>
                    </div>
                    <div class="col-lg-4 text-center">
                        <ul>
                            <li>
                                <h4>
                                    Earn 5x more LitCoins.
                                </h4>
                            </li>
                            <li>
                                <h4>
                                    10,000 Bonus LitCoins every month.
                                </h4>
                            </li>
                        </ul>
                    </div>
                </div>
                <br />
                <br />
                <br />
                <!-- <h2 class="text-center">Giveaways</h2>
                <hr />
                <p>
                    Access to subscriber only giveaways.
                </p>
                <br />
                <br />
                <br /> -->
                <h2 class="text-center">
                    Ad Free Viewing
                </h2>
                <hr />
                <p class="text-center">
                    Enjoy the interaction and entertainment without missing a beat due to Ads! Now when you subscribe to ItsLittany on twitch you get an Ad free expierence.
                </p>
                <br />
                <br />
            </div>
        </section>
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