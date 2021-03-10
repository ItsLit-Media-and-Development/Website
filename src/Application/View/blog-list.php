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
        <link rel="stylesheet" href="Application/View/css/theme.min.css?ver=5.0.3">
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
            <section class="py-lg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-9 mx-auto">
                            <!--<div class="d-md-flex mb-4">
                                <div class="dropdown mr-md-2 mb-2 mb-sm-0">
                                    <button class="btn btn-light btn-icon-left dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="ya ya-tag"></i> All categories
                                    </button>
                                    <div class="dropdown-menu dropdown-height">
                                        <a class="dropdown-item active" href="#">All categories</a>
                                        <a class="dropdown-item" href="#">Playstation 4</a>
                                        <a class="dropdown-item" href="#">Xbox One</a>
                                        <a class="dropdown-item" href="#">PC</a>
                                        <a class="dropdown-item" href="#">Steam</a>
                                        <a class="dropdown-item" href="#">Rockstar</a>
                                        <a class="dropdown-item" href="#">CD Project</a>
                                        <a class="dropdown-item" href="#">Activision</a>
                                        <a class="dropdown-item" href="#">BioWare</a>
                                    </div>
                                </div>
                                <div class="dropdown mr-auto mb-2 mb-sm-0">
                                    <button class="btn btn-light dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Recent posts
                                    </button>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item active" href="#">Recent</a>
                                        <a class="dropdown-item" href="#">Oldest</a>
                                        <a class="dropdown-item" href="#">Popular</a>
                                        <a class="dropdown-item" href="#">Most Comments</a>
                                    </div>
                                </div>
                                <div class="dropdown">
                                    <button class="btn btn-light btn-icon-left dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Descending
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item active" href="#">Descending</a>
                                        <a class="dropdown-item" href="#">Ascending</a>
                                        <a class="dropdown-item" href="#">Random</a>
                                    </div>
                                </div>
                                <div class="btn-group ml-md-2" role="group">
                                    <button type="button" class="btn btn-light">
                                        <i class="ya ya-list m-0"></i>
                                    </button>
                                    <button type="button" class="btn btn-light">
                                        <i class="ya ya-table m-0"></i>
                                    </button>
                                </div>
                            </div>-->
                            <div class="card mb-0">
                                <div class="card-header">
                                    <h6 class="mb-0">
                                        Battle royale games explained what could be the next big hit
                                    </h6>
                                </div>
                                <div class="card-body">
                                    <div class="post border-0 mb-0 pb-0">
                                        <div class="post-thumbnail">
                                            <img class="post-img" src="https://img.youtube.com/vi/LDzYR5_TR2o/maxresdefault.jpg" alt="Battle royale games explained what could be the next big hit">
                                        </div>
                                        <div class="post-body">
                                            <p>
                                                Debating me breeding be answered an he. Spoil event was words her off cause any. Tears woman which no is world miles woody. Wished be do mutual except in effect answer. Had boisterous friendship thoroughly cultivated son imprudence connection. Windows because concern sex its. Law allow saved views hills day ten. Examine waiting his evening day passage proceed.
                                            </p>
                                        </div>
                                    </div>
                                    <!-- end .post -->
                                </div>
                                <div class="card-footer d-block d-md-flex align-items-center">
                                    <a class="btn btn-default btn-icon font-size-md mr-auto mr-md-1" href="blog-post.html" role="button">
                                        Read more
                                    </a>
                                    <div class="d-flex d-md-inline-block ml-auto">
                                        <button class="btn btn-default btn-icon font-size-md mr-auto mr-md-1">
                                            <i class="ya ya-heart-o"></i> Like (30)
                                        </button>
                                        <button class="btn btn-default btn-icon font-size-md">
                                            <i class="ya ya-comment"></i> Comments (20)
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <nav aria-label="Page navigation">
                                <ul class="pagination mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#">Previous</a>
                                    </li>
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">3</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">4</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">5</a>
                                    </li>
                                    <li class="page-item gap">
                                        <span class="page-link">...</span>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">25</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                            <!-- end pagination -->
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- end .site-content -->
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