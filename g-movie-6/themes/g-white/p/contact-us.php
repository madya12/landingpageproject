<?php 
$hack_title = 'Contact Us';
$hack_description = "Please feel free to contact us using the form below.";
get_header(); ?>
<div id="main">
																						<div class="container">
<div class="row">
	<section id="primary" class="col-md-12">
		<article>
			<header class="page-header">
				<h1 class="page-title">Contact Us</h1>
			</header>
			<div class="page-content">
				<div class="row">
					<div class="col-md-4">
						<p>Someone finds it difficult to understand your creative idea? There is a better visualisation, share your views with us. It is quick and easy, just drop us a line and ask for anything with which you think we could be helpful. We’re looking forward to hearing from you. Remember, it’s good to talk!</p>
					</div>
					<div class="col-md-8">
						<form id="contact-form" method="POST" class="clearfix">
							<div class="input-group">
								<span class="input-group-addon" id="sizing-addon1">
									<span class="icon-user"></span>
								</span>
								<input type="text" class="form-control required" name="contact-name" placeholder="Your Real Name" aria-describedby="sizing-addon1" required>
								</div>
								<div class="input-group">
									<span class="input-group-addon" id="sizing-addon2">
										<span class="icon-envelope"></span>
									</span>
									<input type="text" class="form-control required" name="contact-email" placeholder="Your Valid Email Address" aria-describedby="sizing-addon2" required>
									</div>
									<div class="input-group">
										<span class="input-group-addon" id="sizing-addon3">
											<span class="icon-pin"></span>
										</span>
										<input type="text" class="form-control required" name="contact-title" placeholder="Give your message a title" aria-describedby="sizing-addon3" required>
										</div>
										<div class="input-group">
											<textarea class="form-control required" name="contact-message" rows="5" placeholder="Your Message..." required></textarea>
										</div>
										<div class="input-group">
											<div class="text-right">
												<button class="btn btn-primary" type="submit">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</article>
				</section>
			</div>
		</div>
	</div>
	<div id="featured">
		<div class="container">
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-film"></span>
				</div>
				<div class="ft-title ease">Unlimited Access</div>
				<div class="ft-text">Unlimited access to over 20 million titles. Free. You'll never be bored again.</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-magnifier"></span>
				</div>
				<div class="ft-title ease">Search for anything</div>
				<div class="ft-text">Search easily. Whether it's a new release or a golden oldie, we've got you covered.</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-ban"></span>
				</div>
				<div class="ft-title ease">No Ads</div>
				<div class="ft-text">No one likes ads. Enjoy your films the way they were meant to be experienced: ad-free.</div>
			</div>
			<div class="col-md-3 col-sm-6 col-xs-6 ft-col text-center">
				<div class="ft-icon ease">
					<span class="icon-screen-desktop"></span>
				</div>
				<div class="ft-title ease">All platforms</div>
				<div class="ft-text">Be entertained anywhere, anytime. Optimized for PC, Mac, mobile, PS4, Xbox One, and Smart TVs.</div>
			</div>
		</div>
	</div>
</div>
<footer id="site-footer">
	<div class="container">
		<div class="row">
			<div class="site-links col-md-12 text-center">
				<ul>
					<li>
						<a href="<?php echo view_page( 'privacy-policy' );?>">Privacy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'dmca-notice' );?>">DMCA Policy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'contact-us' );?>">Contact</a>
					</li>
					<li>
						<a href="<?php echo site_url() ?>/sitemap.xml">Sitemap</a>
					</li>
				</ul>
			</div>
			<div class="site-credit col-md-12 text-center"> &copy;2017 
				<a href="<?php echo site_url() ?>""><?php echo config('sitename') ?></a> - All rights reserved. 
			</div>
			<div class="site-note col-md-12 text-center">Disclaimer: All of the free movies found on this website are hosted on third-party servers that are freely available to watch online on <?php echo config('sitename') ?> for all internet users. Any legal issues regarding the free online movies on this website should be taken up with the actual file hosts themselves. <?php echo config('sitename') ?> is not responsible for the accuracy, compliance, copyright, legality, decency, or any other aspect of the content of other linked sites. In case of any copyright claims, Please contact the source websites directly file owners or host sites.
By accessing this site you agree to be bound by our Privacy Policy.</div>
			<div id="counter" data-min="12234" data-max="12733">
				<span class="globe">
					<span class="fa fa-globe"></span>
				</span>
				<span class="counter-value">12,617</span> Users Online
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-2.2.0.min.js" defer></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js" defer></script>
<script type="text/javascript" src="/assets/js/scripts.min.js" defer></script>
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-591b0a77843f2b33" defer></script>
<?php echo histats_write() ?>
</body>
								</html>