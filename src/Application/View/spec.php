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
            <section class="py-lg-5 border-bottom-dashed">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 mx-auto">
                            <div class="post post-single">
                                <div class="post-header">
                                    <h1 class="post-title">
                                        The equipment used
                                    </h1>
                                </div>
                                <div class="post-body">
                                    <p>
                                        Thanks to such a supportive community, I have a new and upgraded rig put together to deliver the maximum frames and entertainment for all!
                                    </p>
                                    <h3>
                                        PC Specs
                                    </h3>
                                    <p>
                                        <ul>
                                            <li>
                                                <strong>CPU:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B07B428M7F/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B07B428M7F&linkCode=as2&tag=itslittany-21&linkId=2e7286c5ea49393549148e4007fcd4e0">AMD Ryzen 7 2700X Processor with Wraith Prism Cooler</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B07B428M7F" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                            <li>
                                                <strong>Motherboard:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B07FP11742/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B07FP11742&linkCode=as2&tag=itslittany-21&linkId=bf9a0c568d570629f392f9a4225c0d8e">MSI B450 GAMING PRO CARBON AC</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B07FP11742" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                            <li>
                                                <strong>Video Card:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B01GCAW1IA/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B01GCAW1IA&linkCode=as2&tag=itslittany-21&linkId=5fe79c036a2f770f8e1858c6cbc59efc">GIGABYTE NVIDIA GeForce GTX 1080</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B01GCAW1IA" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                            <li>
                                                <strong>Memory:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B014UYPEXE/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B014UYPEXE&linkCode=as2&tag=itslittany-21&linkId=db3ffec830165797812d1d74b8763bd6">Corsair Vengeance LPX 32 GB DDR4 3000 MHz </a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B014UYPEXE" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                            <li>
                                                <strong>Case:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B07DY76G2Q/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B07DY76G2Q&linkCode=as2&tag=itslittany-21&linkId=11a8901b2cf5ca50c03eaa9dbe6a8f2c">Cooler Master H500</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B07DY76G2Q" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                            <li>
                                                <strong>SSD:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B01F9G43WU/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B01F9G43WU&linkCode=as2&tag=itslittany-21&linkId=4646681861923bb38f1115c2a88f0cea">SanDisk SSD PLUS 240 GB</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B01F9G43WU" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                            <li>
                                                <strong>PSU:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B071NL8YZH/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B071NL8YZH&linkCode=as2&tag=itslittany-21&linkId=f5f291ca2912c0116628b0d1f90a1a9a">EVGA 650 B3, 80+ BRONZE 650W, Fully Modular</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B071NL8YZH" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                            <li>
                                                <strong>Webcam:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B006A2Q81M/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B006A2Q81M&linkCode=as2&tag=itslittany-21&linkId=2042a60f0bb525019e5e0f72295d644b">Logitech, C920 HD Pro</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B006A2Q81M" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                        </ul>
                                    </p>
                                    <br />
                                    <h3>
                                        Additional Tech
                                    </h3>
                                    <p>
                                        <ul>
                                            <li>
                                                <strong>Capture Card:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B01DRWCOGA/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B01DRWCOGA&linkCode=as2&tag=itslittany-21&linkId=5a41ef59543a12a45a19993602cb76ae">Elgato Game Capture HD60 S</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B01DRWCOGA" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                            <li>
                                                <strong>Microphone:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B006DIA77E/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B006DIA77E&linkCode=as2&tag=itslittany-21&linkId=e9795360435642057f0b360be26aad8f">Blue Microphones Snowball</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B006DIA77E" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                            <li>
                                                <strong>Console:</strong> <a target="_blank" href="https://www.amazon.co.uk/gp/product/B07K14XKZH/ref=as_li_tl?ie=UTF8&camp=1634&creative=6738&creativeASIN=B07K14XKZH&linkCode=as2&tag=itslittany-21&linkId=080305685f9ddae26083098ea560ef06">Sony PlayStation 4</a><img src="//ir-uk.amazon-adsystem.com/e/ir?t=itslittany-21&l=am2&o=2&a=B07K14XKZH" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />
                                            </li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
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