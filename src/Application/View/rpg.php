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
            <div class="site-content" role="main">
                <section class="bg-image bg-dark py-8 px-4 px-lg-0" ya-style="background-color: #454648">
                    <img class="background" src="https://static.giantbomb.com/uploads/original/0/1992/3070043-god+of+war_20180421113217.png" alt="">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8">
                                <h2 class="h1 font-weight-bold text-white mb-2">
                                    Questions &amp; Answers
                                </h2>
                                <p class="text-light">
                                    Improve ashamed married expense bed her comfort pursuit four time took ye your as.
                                </p>
                                <form class="mt-4 mb-lg-7 pt-2 w-75" action="search.html">
                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-lg form-control-inline border-0 shadow-none" placeholder="Search for answer...">
                                        <div class="input-group-append">
                                            <button type="submit" class="btn btn-light btn-lg px-3 border-0">
                                                <i class="ya ya-search m-0"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="divider" ya-svg="divider"></div>
                </section>
                <section class="pt-4 pb-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-3 order-2 order-lg-1">
                                <div class="widget widget-secondary">
                                    <div class="widget-header">
                                        Faq
                                    </div>
                                    <div class="widget-body p-0">
                                        <div class="list-group list-group-lg list-group-flush">
                                            <a class="list-group-item" href="#"><i class="ya ya-content"></i> Introduction</a>
                                            <a class="list-group-item active" href="#"><i class="ya ya-gear"></i> Account Settings <span class="badge badge-secondary badge-pill">25</span></a>
                                            <a class="list-group-item" href="#"><i class="ya ya-users"></i> Subscriptions</a><a class="list-group-item" href="#"><i class="ya ya-credit-card"></i> Payment Methods</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end .widget -->
                            </div>
                            <div class="col-lg-9 order-1 order-lg-2 pl-lg-4">
                                <div id="account-settings" class="accordion mb-4">
                                    <div class="accordion-header">
                                        Account Settings
                                    </div>
                                    <div class="accordion-item">
                                        <a class="accordion-link" href="#collapseaccount-settings1" data-toggle="collapse" aria-expanded="true" data-target="#collapseaccount-settings1" aria-controls="collapseaccount-settings1">
                                            Can I upgrade my account from yearly to unlimited?
                                        </a>
                                        <div class="collapse show" id="collapseaccount-settings1">
                                            <p class="accordion-text">
                                                Left till here away at to whom past. Feelings laughing at no wondered repeated provided finished. It acceptance thoroughly my advantages everything as. Are projecting inquietude affronting preference saw who. Shy celebrated met sentiments she reasonably but. Proposal its disposed eat advanced marriage sociable. Drawings led greatest add subjects endeavor gay remember. Principles one yet assistance you met impossible.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a class="accordion-link collapsed" href="#collapseaccount-settings2" data-toggle="collapse" aria-expanded="false" data-target="#collapseaccount-settings2" aria-controls="collapseaccount-settings2">
                                            How to add a new group?
                                        </a>
                                        <div class="collapse" id="collapseaccount-settings2">
                                            <p class="accordion-text">
                                                He into walk roof made tall cold he. Feelings way likewise addition wandered contempt bed indulged. General enquire picture letters garrets on offices of no on. Give lady of they such they sure it. Me contained explained my education. Vulgar as hearts by garret. Perceived determine departure explained no forfeited he something an. Contrasted dissimilar get joy you instrument out reasonably. 
                                            </p>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <a class="accordion-link collapsed" href="#collapseaccount-settings3" data-toggle="collapse" aria-expanded="false" data-target="#collapseaccount-settings3" aria-controls="collapseaccount-settings3">
                                            How do I invite team members?
                                        </a>
                                    <div class="collapse" id="collapseaccount-settings3">
                                        <p class="accordion-text">
                                            Boy desirous families prepared gay reserved add ecstatic say. Replied joy age visitor nothing cottage. Mrs door paid led loud sure easy read. Hastily at perhaps as neither or ye fertile tedious visitor. Use fine bed none call busy dull when. Quiet ought match my right by table means. Principles up do in me favourable affronting. Twenty mother denied effect we to do on. 
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link collapsed" href="#collapseaccount-settings4" data-toggle="collapse" aria-expanded="false" data-target="#collapseaccount-settings4" aria-controls="collapseaccount-settings4">
                                        Where can I download gameforest?
                                    </a>
                                    <div class="collapse" id="collapseaccount-settings4">
                                        <p class="accordion-text">
                                            Expenses as material breeding insisted building to in. Continual so distrusts pronounce by unwilling listening. Thing do taste on we manor. Him had wound use found hoped. <br><br>Dwelling and speedily ignorant any steepest. Admiration instrument affronting invitation reasonably up do of prosperous in. Shy saw declared age debating ecstatic man. Call in so want pure rank am dear were. Remarkably to continuing in surrounded diminution on. In unfeeling existence objection immediate repulsive on he in. Imprudence comparison uncommonly me he difficulty diminution resolution. Likewise proposal differed scarcely dwelling as on raillery. September few dependent extremity own continued and ten prevailed attending. Early to weeks we could. 
                                        </p>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <a class="accordion-link collapsed" href="#collapseaccount-settings5" data-toggle="collapse" aria-expanded="false" data-target="#collapseaccount-settings5" aria-controls="collapseaccount-settings5">
                                        How can I download the invoice for my purchase?
                                    </a>
                                    <div class="collapse" id="collapseaccount-settings5">
                                        <p class="accordion-text">
                                            Projecting surrounded literature yet delightful alteration but bed men. Open are from long why cold. If must snug by upon sang loud left. As me do preference entreaties compliment motionless ye literature.
                                        </p>
                                    </div>
                                </div>
                            </div><!-- end list-group -->
                        </div>
                    </div>
                </section>
            </div>
            <!-- end .site-content -->
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
            <!-- end .site-footer -->
        <!-- end .site --><!-- js: vendor -->
            <script src="js/vendor.js"></script><script src="js/theme.min.js?ver=5.0.3"></script><!-- theme settings --><script>var gameforest = {disqus: 'gameforestyakuzieu',facebook: {lang: 'en_US',version: 'v3.2',id: '',}}</script><script async src="https://www.googletagmanager.com/gtag/js?id=UA-99337124-1"></script><script>window.dataLayer = window.dataLayer || [];function gtag() {dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-99337124-1');</script></body></html>
        </section>
    </body>
</html>