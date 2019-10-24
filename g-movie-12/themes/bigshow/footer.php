    <!-- Footer Start -->
    <footer class="text-white">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 sm-bottom-40">
                        <div class="widget about-widget">
                            <div class="widget-inner">
                                <a class="footer-logo" href="index-2.html">
                                    <img src="<?php style_theme() ?>/assets/images/template/logo.gif" alt="Footer logo" weight="93" height="70">
                                </a>
                                <p class="about-text">Watch Full HD Movies and Tv Series Online ,and Download the latest Movie and Tv-series at our website with great streaming</p>
                                <div class="footer-social">
                                    <h5 class="footer-social-title">Connect with</h5>
                                    <div class="socials">
                                        <a href="//facebook.com"><i class="fa fa-facebook"></i></a>
                                        <a href="//twitter.com"><i class="fa fa-twitter"></i></a>
                                        <a href="//plus.google.com"><i class="fa fa-google-plus"></i></a>
                                        <a href="//instagram.com"><i class="fa fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget category-widget">
                            <h3 class="widget-title">Main Categories</h3>
                            <div class="widget-inner">
                                <ul class="widget-cat">
                                <li><a href="<?php echo view_page( 'movies-nowplay' );?>"><i class="fa fa-play-circle-o"></i> Now Playing</a></li>
                                                            <li><a href="<?php echo view_page( 'upcoming-movies' );?>"><i class="fa fa-random"></i> Upcoming</a></li>
                                                            <li><a href="<?php echo view_page( 'toprated-movies' );?>"><i class="fa fa fa-plane"></i> Top Rated</a></li>
                                                            <li><a href="<?php echo view_page( 'popular-movies' );?>"><i class="fa fa-trophy"></i> Popular</a></li>
															<li><a href="<?php echo view_page( 'tv-airing' );?>"><i class="fa fa-random"></i> Airing TV Shows</a></li>
                                                            <li><a href="<?php echo view_page( 'tv-ontheair' );?>"><i class="fa fa fa-plane"></i> On the Air TV Shows</a></li>
                                                            <li><a href="<?php echo view_page( 'tv-popular' );?>"><i class="fa fa-star"></i> Popular TV Series</a></li>
                             
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget newsletter-widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <div class="widget-inner">
                                <p>Sign up for our mailling list to get latest updates videos and upcomming Movie</p>
                                <form id="subscriptionForm" class="subscription" action="#" method="post">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                    <button type="submit" name="emailsubmit"><i class="fa fa-arrow-circle-right"></i></button>
                                    <p class="newsletter-info"></p>
                                    <p class="newsletter-error"></p>
                                </form>
                            </div>
                        </div>
                        <div class="widget app-widget">
                            <h3 class="widget-title"><?php echo config('sitename') ?> Apps</h3>
                            <div class="widget-inner">
                                <a class="google-play-download" href="#"><img src="<?php style_theme() ?>/assets/images/icons/google-play.png" alt="Google Play Download"></a>
                                <a class="apple-store-download" href="#"><img src="<?php style_theme() ?>/assets/images/icons/app-store.png" alt="Apple Store Download"></a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
        <div class="copyright-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7 col-xs-12 xs-text-center">
                        <ul class="footer-nav">
                            
                            <li><a href="<?php echo view_page( 'privacy-policy' );?>">Privacy Policy</a></li>
                            <li><a href="<?php echo view_page( 'dmca-notice' );?>">DMCA</a></li>
                            <li><a href="<?php echo view_page( 'disclaimer' );?>">Disclaimer</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12 xs-text-center">
                        <p class="copyright-text">Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo site_url() ?>"><?php echo config('sitename') ?></a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
<div class="modal animated bounceIn" id="reg_form" tabindex="-1" role="dialog" aria-labelledby="reg_form" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-info"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Register Free Account!</h4> </div><div class="modal-body clearfix"> <div class="col-md-6" id="login"> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-info" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="subreg" class="btn btn-info" value="Log me in"> </div><div class="col-md-6"> <h5>Member Benefits</h5> <ol> <li>Watch as many movies you want!</li><li>Secure and no restrictions!</li><li>Stream movies in HD quality!</li><li>It works on your TV, PC or MAC!</li></ol> <button class="btn btn-primary backcolor" onclick="window.location.href='/?action=request'">Register Here!</button> </div></div><div class="modal-footer bg-info"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div></div></div></div>

    <!-- Script -->
    <!-- Script -->
    <script src="<?php style_theme() ?>/assets/js/jquery.min.js"></script>
    <script src="<?php style_theme() ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php style_theme() ?>/assets/js/owl.carousel.js"></script>
    <script src="<?php style_theme() ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php style_theme() ?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="<?php style_theme() ?>/assets/js/map.js"></script>
    <script src="<?php style_theme() ?>/assets/js/custom.js"></script>

<?php echo histats_write() ?>

<?php if (is_europe() == 'true'): ?>
    <!-- Begin Cookie Consent plugin by Silktide - https://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More success","link":null,"theme":"dark-floating"};
    </script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->
<?php endif ?>
<?php if (config('protect_content') == 'true'): ?>
    <Script Language='Javascript'>
        document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%0A%66%75%6E%63%74%69%6F%6E%20%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%65%29%7B%69%66%28%74%79%70%65%6F%66%20%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%6C%73%65%20%69%66%28%74%79%70%65%6F%66%20%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%3D%22%6E%6F%6E%65%22%3B%65%6C%73%65%20%65%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%2E%73%74%79%6C%65%2E%63%75%72%73%6F%72%3D%22%64%65%66%61%75%6C%74%22%7D%77%69%6E%64%6F%77%2E%6F%6E%6C%6F%61%64%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%29%7D%0A%0A%66%75%6E%63%74%69%6F%6E%20%6D%6F%75%73%65%64%77%6E%28%65%29%7B%74%72%79%7B%69%66%28%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%32%7C%7C%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%63%61%74%63%68%28%65%29%7B%69%66%28%65%2E%77%68%69%63%68%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%64%72%61%67%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%6D%6F%75%73%65%64%77%6E%0A%0A%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%22%6B%65%79%64%6F%77%6E%22%2C%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%7D%7D%29%3B%64%6F%63%75%6D%65%6E%74%2E%6B%65%79%70%72%65%73%73%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%7D%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%0A%0A%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6B%65%79%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%65%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%69%66%28%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%32%33%7C%7C%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%38%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%0A%3C%2F%73%63%72%69%70%74%3E%0A'));
    </Script>
<?php endif ?>
</html>
<div class="modal animated bounceIn" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-info"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH <?php echo $title ?></h4> </div><div class="modal-body clearfix"> <div class="row"> <div class="col-md-6" id="login"> <img class="img-responsive" src="<?php echo $images; ?>"> <hr> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-info" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="submov" class="btn btn-info" value="Log me in"> </div><div class="col-md-6"> <ul class="list-group"> <li class="list-group-item"> <h4 class="list-group-item-heading">High Quality Movies</h4> <p class="list-group-item-text">All of the Movies are available in the superior HD Quality or even higher!</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch Without Limits</h4> <p class="list-group-item-text">You will get access to all of your favourite the Movies without any limits.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">100% Free Advertising</h4> <p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch anytime, anywhere</h4> <p class="list-group-item-text">It works on your TV, PC, or MAC!</p></li></ul> </div></div></div><div class="modal-footer bg-info"> <a class="btn btn-info" href="/?action=request">Sign Up For Free</a> </div></div></div></div>


<div class="modal animated bounceIn" id="reg_form" tabindex="-1" role="dialog" aria-labelledby="reg_form" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-success"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Register Free Account!</h4> </div><div class="modal-body clearfix"> <div class="col-md-6" id="login"> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-success" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="subreg" class="btn btn-success" value="Log me in"> </div><div class="col-md-6"> <h5>Member Benefits</h5> <ol> <li>Watch as many movies you want!</li><li>Secure and no restrictions!</li><li>Stream movies in HD quality!</li><li>It works on your TV, PC or MAC!</li></ol> <button class="btn btn-primary backcolor" onclick="window.location.href='/?action=register'">Register Here!</button> </div></div><div class="modal-footer bg-success"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div></div></div></div>