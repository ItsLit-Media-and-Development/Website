<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <link rel="shortcut icon" href="../Application/View/img/logo.png" type="image/x-icon">
        <link rel="icon" href="../Application/View/img/logo.png" type="image/x-icon">
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
        <link rel="stylesheet" href="../Application/View/css/font-awesome.min.css">
        <link rel="stylesheet" href="../Application/View/css/bootstrap.min.css">
        <link rel="stylesheet" href="../Application/View/css/animate.min.css">
        <!-- plugins css -->
        <link href="../Application/View/css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
        <link href="../Application/View/css/owl.carousel.min.css" rel="stylesheet">
        <!-- theme css -->
        <link rel="stylesheet" href="../Application/View/css/theme.min.css">
        <link rel="stylesheet" href="../Application/View/css/custom.css">
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
                            <!--<a style="padding-top:10px; padding-left:10px;" href="index.html" class="logo"><img style="height:40px; width:auto;" src="../Application/View/img/logo_r.png" /></a>-->
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
            <section class="py-lg-5 border-bottom-dashed">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="post post-single">
                                <div class="post-header">
                                    <h1 class="post-title">Battle royale games explained what could be the next big hit</h1>
                                    <div class="post-meta">
                                        <span class="post-meta-item">
                                            <i class="ya ya-calendar"></i> September 10, 2018
                                        </span>
                                        <a class="post-meta-item" href="#comments">
                                            <i class="ya ya-comment"></i> 20 comments
                                        </a>
                                        <span class="post-meta-item">
                                            <i class="ya ya-clock"></i> 5 min read
                                        </span>
                                    </div>
                                </div>
                                <div class="post-thumbnail">
                                    <img class="post-img" src="https://img.youtube.com/vi/LDzYR5_TR2o/maxresdefault.jpg" alt="Battle royale games explained what could be the next big hit">
                                </div>
                                <div class="post-body">
                                    <p>
                                        Now seven world think timed while her. Spoil large oh he rooms on since an. Am up unwilling eagerness perceived incommode. Are not windows set luckily musical hundred can. Collecting if sympathize middletons be of of reasonably. Horrible so kindness at thoughts exercise no weddings subjects. <strong>Nathan Drake removed</strong> towards journey chapter females offered not. Led distrusts otherwise who may newspaper but. Last he dull am none he mile hold as.
                                    </p>
                                    <p>
                                        Smallest directly families surprise honoured am an. Speaking replying mistress him numerous she returned feelings may day. Evening way luckily son exposed get general greatly. Zealously prevailed be arranging do.
                                    </p>
                                    <blockquote class="blockquote">
                                        <p>
                                            “This is a pretty fast price drop for a game — that released last month and has garnered some ratings.”
                                        </p>
                                        <footer class="blockquote-footer">
                                            Someone famous in <cite title="Source Title">Source Title</cite>
                                        </footer>
                                    </blockquote>
                                    <p>
                                        Article nor prepare chicken you him now. Shy merits say advice ten before lovers innate add. She cordially behaviour can attempted <a href="#">estimable</a>. Trees delay fancy noise manor do as an small. Felicity now law securing breeding likewise extended and. Roused either who favour why ham.Among going manor who did. Do ye is celebrated it sympathize considered. May ecstatic did surprise elegance the ignorant age. Own her miss cold last. It so numerous if <a href="#">he outlived disposal</a>. How but sons mrs lady when. Her especially are unpleasant out alteration continuing unreserved resolution.
                                    </p>
                                    <ul>
                                        <li>
                                            Deal damage with SMGs to opponents — 5 Battle Stars
                                        </li>
                                        <li>
                                            Search a Supply Llama — 5 Battle Stars
                                        </li>
                                        <li>
                                            Clinger, Stink Bomb, or Grenade Eliminations — 10 Battle Stars
                                        </li>
                                    </ul>
                                    <h6>Absolute the best game</h6>
                                    <p>
                                        Good draw knew bred ham busy his hour. Ask agreed answer rather joy nature admire wisdom. Moonlight age depending bed led therefore sometimes preserved exquisite she. An fail up so shot leaf wise in. Minuter highest his arrived for put and. Hopes lived by rooms oh in no death house. Contented direction september but end led excellent ourselves may.
                                    </p>
                                    <div class="d-flex align-items-center mt-4 pt-1">
                                        <div class="tags">
                                            <a href="#">#playstation4</a>
                                            <a href="#">#anthem</a>
                                            <a href="#">#fps</a>
                                            <a href="#">#upcoming</a>
                                            <a href="#">#gameplay</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end .post-single -->
                            <div class="d-inline-flex d-md-flex flex-column flex-md-row align-items-center justify-content-center text-center text-md-left w-100 px-1 px-md-0 mb-3 mb-md-0">
                                <div class="mb-4 mb-md-0 mr-md-auto">
                                    <p>send us your feedback</p>
                                    <div class="reaction">
                                        <button class="btn btn-link" type="button">
                                            <span class="d-inline-block" ya-svg="awesome" data-toggle="tooltip" title="Awesome"></span> 
                                            <span class="reaction-count">49</span>
                                        </button>
                                        <button class="btn btn-link" type="button">
                                            <span class="d-inline-block" ya-svg="like" data-toggle="tooltip" title="Like"></span> 
                                            <span class="reaction-count">88</span>
                                        </button>
                                        <button class="btn btn-link" type="button">
                                            <span class="d-inline-block" ya-svg="sick" data-toggle="tooltip" title="Sick"></span> 
                                            <span class="reaction-count">15</span>
                                        </button>
                                        <button class="btn btn-link" type="button">
                                            <span class="d-inline-block" ya-svg="angry" data-toggle="tooltip" title="Angry"></span> 
                                            <span class="reaction-count">13</span>
                                        </button>
                                    </div>
                                    <!-- end .reaction -->
                                </div>
                                <a class="avatar-card" href="profile.html">
                                    <div>
                                        <div class="avatar-title">Smallville</div>
                                        <p class="avatar-text">gameforest author</p>
                                    </div>
                                    <img src="img/user-5.jpg" alt="">
                                </a>
                                <!-- end .avatar-card -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end .site-content -->
        <!-- vendor js -->
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-37729517-3"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-37729517-3');
        </script>

        <script src="../Application/View/js/jquery-3.2.1.min.js"></script>
        <script src="../Application/View/js/popper.min.js"></script>
        <script src="../Application/View/js/bootstrap.min.js"></script>
        <script src="../Application/View/js/lightbox.js"></script>
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
        <script src="../Application/View/js/theme.min.js"></script>
    </body>
</html>