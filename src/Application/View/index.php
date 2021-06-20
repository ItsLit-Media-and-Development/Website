
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
