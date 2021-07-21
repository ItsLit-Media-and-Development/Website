<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="<?php echo $this->baseURL; ?>Application/View/img/logo.png" type="image/x-icon">
        <link rel="icon" href="<?php echo $this->baseURL; ?>Application/View/img/logo.png" type="image/x-icon">
        <title>ItsLittany</title>
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@itslittany">
        <meta name="twitter:title" content="ItsLittany - Streamer and Developer">
        <meta name="twitter:description" content="Itslittany is a part time affiliate Twitch Streamer who also makes bots and projects for individuals.">
        <meta name="twitter:creator" content="@itslittany">
        <!-- Twitter summary card with large image must be at least 280x150px -->
        <meta name="twitter:image:src" content="../Application/View/img/header.png">

        <!-- Open Graph data -->
        <meta property="og:title" content="ItsLittany - Streamer and Developer" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="https://itslit.uk" />
        <!--<meta property="og:image" content="" />-->
        <meta property="og:description" content="Itslittany is a part time affiliate Twitch Streamer who also makes bots and projects for individuals." />
        <meta property="og:site_name" content="ItsLittany - Streamer and Developer" />
        
        <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
        <link rel="stylesheet" href="<?php echo $this->baseURL; ?>Application/View/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $this->baseURL; ?>Application/View/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo $this->baseURL; ?>Application/View/animate.min.css">
        <!-- plugins css -->
        <link href="<?php echo $this->baseURL; ?>Application/View/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
        <link href="<?php echo $this->baseURL; ?>Application/View/css/owl.carousel.min.css" rel="stylesheet">
        <!-- theme css -->
        <link rel="stylesheet" href="<?php echo $this->baseURL; ?>Application/View/css/theme.min.css?ver=5.0.3">
        <link rel="stylesheet" href="<?php echo $this->baseURL; ?>Application/View/css/custom.css">
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
                                    <li>
                                        <a href="/blog">
                                            Blog
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
                                    <li>
                                        <a href="/team">
                                            Meet the Team
                                        </a>
                                    </li>
                                    <li class ="has-dropdown">
                                        <a href="#">
                                            Tools and Mods
                                        </a>
                                        <ul>
                                            <li>
                                                <a href="/tools">
                                                    Stream Tools
                                                </a>
                                            </li>
                                            <li>
                                                <a href="/tools/mods">
                                                    Game Mods
                                                </a>
                                            </li>
                                        </ul>
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
                                <li class="hidden-xs-down">
                                    <a href="<?php echo $this->authURL; ?>">
                                        <span class="tw-button__text" data-a-target="tw-button-text">
                                            <i class="fa fa-twitch"></i>
                                            &nbsp; Connect&nbsp;with&nbsp;Twitch
                                        </span>
                                    </a>
                                </li>
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