        <!-- footer -->
        <footer id="footer">
            <div class="container">
                <div class="footer-bottom" style="margin-top:-5px;">
                    <img style="height:100px; width:auto;" src="../Application/View/img/logo.png" />
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
                        Copyright &copy; 2021 
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
        <script type="text/javascript">
            (function($) {
            "use strict";
            $('.btn').click(function() {
                copy(this);
                return false;
            });
            })(jQuery);
        </script>
        <script>
            function copyText()
            {
                var copyText = document.getElementById("output");

                // Select the text field 
                copyText.select();

                // Copy the text inside the text field 
                document.execCommand("copy");

                document.getElementById('alert').style.display = "block";
            }

            function setValue() {
                if(document.getElementById('inputname').value !== '')
                {
                    document.getElementById('output').value = "https://itslit.uk/TES/twitch/" + document.getElementById('inputname').value;

                        copyText();
                } else {
                    document.getElementById('output').value = 'Enter your username!';
                }
            }
        </script>
        <!-- theme js -->
        <script src="Application/View/js/theme.min.js"></script>
    </body>
</html>