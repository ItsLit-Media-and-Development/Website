
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
