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
				<span class="counter-value"><script type="text/javascript"> document.write(Math.floor(Math.random()*12733)); </script></span> Users Online
			</div>
		</div>
	</div>
</footer>
<script type="text/javascript" src="//code.jquery.com/jquery-2.2.0.min.js" defer></script>
<script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" defer></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js" defer></script>
<script type="text/javascript" src="/assets/js/scripts.min.js" defer></script>
<?php echo histats_write() ?>
</body>
								</html>