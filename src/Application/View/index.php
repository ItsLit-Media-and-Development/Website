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
        <link rel="stylesheet" href="Application/View/css/animate.min.css">
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
        <section class="bg-image bg-image-sm section-streamer player p-y-65">
            <div class="overlay"></div>
            <div class="container" id="twitch-embed">
                <!--<iframe class="embed-responsive embed-responsive-16by9"
                    src="https://player.twitch.tv/?channel=itslittany&muted=true"
                    height="720"
                    width="1280"
                    frameborder="0"
                    scrolling="no"
                    allowfullscreen="true">
                </iframe>
                <div class="text-right m-t-20">
                    <a href="//streamlabs.com/itslittany" class="btn btn-outline-default btn-rounded btn-lg float-left m-r-30">
                        Donate <i class="fa fa-gbp"></i>
                    </a>
                    <a href="//twitch.tv/itslittany" class="btn btn-twitch btn-shadow btn-rounded btn-lg m-l-20">
                        Watch on Twitch <i class="fa fa-twitch"></i>
                    </a>
                </div>-->

                <script src="https://embed.twitch.tv/embed/v1.js"></script>

                            <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
                            <script type="text/javascript">
                              new Twitch.Embed("twitch-embed", {
                                width: '100%',
                                height: 600,
                                channel: "itslittany"
                              });
                            </script>
            </div>
        </section>
        <section class="bg-primary promo promo-subscribe">
            <div class="container">
                <h3>
                    Subscribe to my channel and get your own custom badge with emoticons and much more!
                </h3>
                <a class="btn btn-outline-default" href="https://www.twitch.tv/itslittany/subscribe" target="_blank" role="button">
                    Subscribe <i class="fa fa-heart-o"></i>
                </a>
            </div>
        </section>
        <section class="bg-secondary">
            <div class="container">
                <div class="heading">
                    <i class="fa fa-twitch" style="color:#6441a4"></i>
                    <h2>
                        Top Clips
                    </h2>
                    <p>
                        The Top clips of this month.
                    </p>
                </div>
                <div class="row row-5"> 
                    <?php if(isset($this->clip1URL)){?>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->clip1URL; ?>" data-lightbox="" role="button" target="_blank">
                                    <img src="<?php echo $this->clip1Img; ?>" class="card-img-top">
                                </a>
                                <div class="card-meta">
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <strong>
                                        Title:
                                    </strong> 
                                    <a href="<?php echo $this->clip1URL; ?>" data-lightbox="" role="button" target="_blank">
                                        <?php echo $this->clip1Name; ?>
                                    </a>
                                </h4>
                                <strong>
                                    Game:
                                </strong> 
                                <?php echo $this->clip1Game;?>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->clip1Time; ?> ago by 
                                        <a href="https://twitch.tv/<?php echo $this->clip1Author;?>" target="_blank">
                                            <em>
                                                <?php echo $this->clip1Author;?>
                                            </em>
                                        </a>
                                    </span>
                                    <span>
                                        <?php echo $this->clip1Views; ?> views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } if(isset($this->clip2URL)){?>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->clip2URL; ?>" data-lightbox="" role="button" target="_blank">
                                    <img src="<?php echo $this->clip2Img; ?>" class="card-img-top">
                                </a>
                                <div class="card-meta">
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <strong>
                                        Title:
                                    </strong> 
                                    <a href="<?php echo $this->clip2URL; ?>" data-lightbox="" role="button" target="_blank">
                                        <?php echo $this->clip2Name; ?>
                                    </a>
                                </h4>
                                <strong>
                                    Game:
                                </strong> 
                                <?php echo $this->clip2Game;?>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->clip2Time; ?> ago by 
                                        <a href="https://twitch.tv/<?php echo $this->clip2Author;?>" target="_blank">
                                            <em>
                                                <?php echo $this->clip2Author;?>
                                            </em>
                                        </a>
                                    </span>
                                    <span>
                                        <?php echo $this->clip2Views; ?> views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } if(isset($this->clip3URL)){?>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->clip3URL; ?>" data-lightbox="" role="button" target="_blank">
                                    <img src="<?php echo $this->clip3Img; ?>" class="card-img-top">
                                </a>
                                <div class="card-meta">
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <strong>
                                        Title:
                                    </strong> 
                                    <a href="<?php echo $this->clip3URL; ?>" data-lightbox="" role="button" target="_blank">
                                        <?php echo $this->clip3Name; ?>
                                    </a>
                                </h4>
                                <strong>
                                    Game:
                                </strong> 
                                <?php echo $this->clip3Game;?>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->clip3Time; ?> ago by 
                                        <a href="https://twitch.tv/<?php echo $this->clip3Author;?>" target="_blank">
                                            <em>
                                                <?php echo $this->clip3Author;?>
                                            </em>
                                        </a>
                                    </span>
                                    <span>
                                        <?php echo $this->clip3Views; ?> views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } if(isset($this->clip4URL)){?>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->clip4URL; ?>" data-lightbox="" role="button" target="_blank">
                                    <img src="<?php echo $this->clip4Img; ?>" class="card-img-top">
                                </a>
                                <div class="card-meta">
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <strong>
                                        Title:
                                    </strong> 
                                    <a href="<?php echo $this->clip4URL; ?>" data-lightbox="" role="button" target="_blank">
                                        <?php echo $this->clip4Name; ?>
                                    </a>
                                </h4>
                                <strong>
                                    Game:
                                </strong> 
                                <?php echo $this->clip4Game;?>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->clip4Time; ?> ago by 
                                        <a href="https://twitch.tv/<?php echo $this->clip4Author;?>" target="_blank">
                                            <em>
                                                <?php echo $this->clip4Author;?>
                                            </em>
                                        </a>
                                    </span>
                                    <span>
                                        <?php echo $this->clip4Views; ?> views
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <?php } ?>                 
                </div>
                <!-- <div class="text-center"><a href="https://www.twitch.tv/itslittany/videos/archive" class="btn btn-primary btn-shadow btn-rounded btn-effect btn-lg m-t-10">Show More</a></div> -->
            </div>
        </section>
        <section>
            <div class="container">
                <div class="heading">
                    <i class="fa fa-twitch" style="color:#6441a4"></i>
                    <h2>
                        Recent Streams
                    </h2>
                    <p>
                        ItsLittany's 8 most recent streams.
                    </p>
                </div>
                <div class="row row-5">
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->vod1url; ?>" target="_blank">
                                    <img src="<?php echo $this->vod1img; ?>" class="card-img-top" />
                                </a>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i> 
                                        <?php echo $this->vod1length; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="<?php echo $this->vod1url; ?>" target="_blank">
                                        <?php echo $this->vod1title; ?> 
                                    </a>
                                </h4>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->vod1age; ?> ago
                                    </span>
                                    <span>
                                    <?php echo $this->vod1views; ?> views
                                    </span>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->vod2url; ?>" target="_blank">
                                    <img src="<?php echo $this->vod2img; ?>" class="card-img-top" />
                                </a>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i> 
                                        <?php echo $this->vod2length; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="<?php echo $this->vod2url; ?>" target="_blank">
                                        <?php echo $this->vod2title; ?> 
                                    </a>
                                </h4>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->vod2age; ?> ago
                                    </span>
                                    <span>
                                    <?php echo $this->vod2views; ?> views
                                    </span>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->vod3url; ?>" target="_blank">
                                    <img src="<?php echo $this->vod3img; ?>" class="card-img-top" />
                                </a>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i> 
                                        <?php echo $this->vod3length; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="<?php echo $this->vod3url; ?>" target="_blank">
                                        <?php echo $this->vod3title; ?> 
                                    </a>
                                </h4>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->vod3age; ?> ago
                                    </span>
                                    <span>
                                    <?php echo $this->vod3views; ?> views
                                    </span>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->vod4url; ?>" target="_blank">
                                    <img src="<?php echo $this->vod4img; ?>" class="card-img-top" />
                                </a>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i> 
                                        <?php echo $this->vod4length; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="<?php echo $this->vod4url; ?>" target="_blank">
                                        <?php echo $this->vod4title; ?> 
                                    </a>
                                </h4>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->vod4age; ?> ago
                                    </span>
                                    <span>
                                    <?php echo $this->vod4views; ?> views
                                    </span>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->vod5url; ?>" target="_blank">
                                    <img src="<?php echo $this->vod5img; ?>" class="card-img-top" />
                                </a>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i> 
                                        <?php echo $this->vod5length; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="<?php echo $this->vod5url; ?>" target="_blank">
                                        <?php echo $this->vod5title; ?> 
                                    </a>
                                </h4>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->vod5age; ?> ago
                                    </span>
                                    <span>
                                    <?php echo $this->vod5views; ?> views
                                    </span>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->vod6url; ?>" target="_blank">
                                    <img src="<?php echo $this->vod6img; ?>" class="card-img-top" />
                                </a>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i> 
                                        <?php echo $this->vod6length; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="<?php echo $this->vod6url; ?>" target="_blank">
                                        <?php echo $this->vod6title; ?> 
                                    </a>
                                </h4>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->vod6age; ?> ago
                                    </span>
                                    <span>
                                    <?php echo $this->vod6views; ?> views
                                    </span>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->vod7url; ?>" target="_blank">
                                    <img src="<?php echo $this->vod7img; ?>" class="card-img-top" />
                                </a>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i> 
                                        <?php echo $this->vod7length; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="<?php echo $this->vod7url; ?>" target="_blank">
                                        <?php echo $this->vod7title; ?> 
                                    </a>
                                </h4>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->vod7age; ?> ago
                                    </span>
                                    <span>
                                    <?php echo $this->vod7views; ?> views
                                    </span>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-3">
                        <div class="card card-video">
                            <div class="card-img">
                                <a href="<?php echo $this->vod8url; ?>" target="_blank">
                                    <img src="<?php echo $this->vod8img; ?>" class="card-img-top" />
                                </a>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i> 
                                        <?php echo $this->vod8length; ?>
                                    </span>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4 class="card-title">
                                    <a href="<?php echo $this->vod8url; ?>" target="_blank">
                                        <?php echo $this->vod8title; ?> 
                                    </a>
                                </h4>
                                <div class="card-meta">
                                    <span>
                                        <i class="fa fa-clock-o"></i>
                                        <?php echo $this->vod8age; ?> ago
                                    </span>
                                    <span>
                                    <?php echo $this->vod8views; ?> views
                                    </span>
                                </div>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="https://www.twitch.tv/itslittany/videos/archive" class="btn btn-primary btn-shadow btn-rounded btn-effect btn-lg m-t-10">
                        See More
                    </a>
                </div>
            </div>
        </section>
        <section class="bg-secondary p-y-40">
            <div class="container">
                <div class="heading">
                    <i class="fa fa-users"></i>
                    <h2>
                        Partners
                    </h2>
                    <p></p>
                </div>
                <div class="owl-carousel owl-logos" style="padding-left:20px;">
                    <a href="https://www.humblebundle.com/?partner=itslittany">
                        <img src="Application/View/img/HBStampRed.png" alt="" style="width:90%; height:90%;" />
                    </a>
                </div>
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
        <script src="Application/View/js/owl.carousel.min.js"></script>
        <script>
    (function($) {
      "use strict";
      // owl carousel
      $('.owl-logos').owlCarousel({
        margin: 100,
        nav: false,
        autoplay: true,
        dots: false,
        responsive: {
          0: {
            items: 1
          },
          500: {
            items: 2
          },
          701: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      });

      $('.owl-videos').owlCarousel({
        margin: 15,
        loop: true,
        dots: true,
        autoplay: true,
        responsive: {
          0: {
            items: 1
          },
          700: {
            items: 2
          },
          800: {
            items: 3
          },
          1000: {
            items: 4
          },
          1200: {
            items: 6
          }
        }
      });
    })(jQuery);
  </script>

        <!-- theme js -->
        <script src="Application/View/js/theme.min.js"></script>
    </body>
</html>