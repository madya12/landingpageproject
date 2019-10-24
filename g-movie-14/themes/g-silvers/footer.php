  <!-- Footer Start -->
    <footer class="text-white">
        <div class="footer-widget-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-xs-12 sm-bottom-40">
                        <div class="widget about-widget">
                            <div class="widget-inner">                                
                                    <img src="<?php style_theme();?>/images/template/logo-footer.png" alt="Footer logo">                                
                                <p class="about-text"><?php echo config('sitedescription') ?></p>
                                <div class="footer-social">
                                    <h5 class="footer-social-title">Connect with</h5>
                                    <div class="socials">
                                        <a href="<?php echo config('facebook_link') ?>"><i class="fa fa-facebook"></i></a>
                                        <a href="<?php echo config('twitter_link') ?>"><i class="fa fa-twitter"></i></a>
                                        <a href="<?php echo config('google_link') ?>"><i class="fa fa-google-plus"></i></a>
                                        <a href="<?php echo config('instagram_link') ?>"><i class="fa fa-instagram"></i></a>
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
									<li class="cat"><a href="<?php echo view_page( 'popular-movies' );?>">Popular Movie</a></li>
									<li class="cat"><a href="<?php echo view_page( 'toprated-movies' );?>">Top Rated Movie</a></li>
									<li class="cat"><a href="<?php echo view_page( 'movies-nowplay' );?>">Movie In Theaters</a></li>                          
									<li class="cat"><a href="<?php echo view_page( 'upcoming-movies' );?>">Upcoming Movie</a></li>
									<li class="cat"><a href="<?php echo view_page( 'tv-popular' );?>">Popular TV Series</a></li>
									<li class="cat"><a href="<?php echo view_page( 'tv-airing' );?>">Airing TV Series</a></li>
									<li class="cat"><a href="<?php echo view_page( 'tv-ontheair' );?>">On Air TV Series</a></li>
                             
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="widget newsletter-widget">
                            <h3 class="widget-title">Newsletter</h3>
                            <div class="widget-inner">
                                <p>Sign up for our mailling list to get latest updates videos and upcoming Movie</p>
                                <form id="subscriptionForm" class="subscription" action="#" method="post">
                                    <input type="email" name="email" placeholder="Email Address" required>
                                    <button type="submit" name="emailsubmit"><i class="fa fa-arrow-circle-right"></i></button>
                                    <p class="newsletter-success"></p>
                                    <p class="newsletter-error"></p>
                                </form>
                            </div>
                        </div>
                        <div class="widget app-widget">
                            
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
                            
                        <li>
						<a href="<?php echo view_page( 'privacy-policy' );?>">Privacy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'dmca-notice' );?>">DMCA Policy</a>
					</li>
					<li><a href="https://docs.google.com/forms/d/e/1FAIpQLScc-EzYRvFWIx93fJ0E0JXchAmLzjhLXKRG5jkVhBuk4x_KqQ/viewform">Contact</a></li>
					<li>
						<a href="<?php echo site_url() ?>/sitemap.xml">Sitemap</a>
					</li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-sm-5 col-xs-12 xs-text-center">
                        <p class="copyright-text">&copy;<?php echo date("Y");?> <a href="/"><?php echo config('sitename') ?></a>. All Rights Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer End -->
	<div class="online" style="z-index: 99;">
		<span class="online-icon" style="float: left; margin-top:5px"></span>
		<div class="online-text">
			<p><script type="text/javascript"> document.write(Math.floor(Math.random()*12733)); </script> Users Online Now</p>
		</div>
	</div>
    <!-- Script -->
	<script type='text/javascript' src='//code.jquery.com/jquery-2.2.0.min.js'></script>
	<script type='text/javascript' src='//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='<?php style_theme();?>/js/scripts.min.js'></script>
    <script src="<?php style_theme();?>/js/jquery.min.js"></script>
    <script src="<?php style_theme();?>/js/bootstrap.min.js"></script>
    <script src="<?php style_theme();?>/js/owl.carousel.js"></script>
    <script src="<?php style_theme();?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php style_theme();?>/js/jquery.ajaxchimp.min.js"></script>
    <script src="<?php site_url();?>/assets/js/custom.js"></script>
    <?php echo histats_write() ?>
</body>

</html>
