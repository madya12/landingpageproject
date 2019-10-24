<?php 
/**
 * The template for displaying page Privacy Policy
 *
 * @package www.g-silvers.website
 * @subpackage tmdbtwo
 * @since TMDB Two 1.0
 */
$hack_title = 'Privacy Policy';
$hack_description = "If you require any more information or have any questions about our privacy policy, please feel free to contact us by email at info@$hostname";
get_header();?>
  <body>
<nav id="navbar" class="navbar is-fixed-top is-dark has-shadow" role="navigation" aria-label="main navigation" >
  <div class="container">
	<div class="navbar-brand">
		<a class="navbar-item" href="<?php echo site_url() ?>">
			<?php echo config('sitename') ?>		</a>

		<button id="navbarBurger" class="button navbar-burger is-dark" data-target="navMenu">
		  <span></span>
		  <span></span>
		  <span></span>
		</button>
	</div>
	<div class="navbar-menu" id="navMenu">
		<div class="navbar-start">
			<a class="navbar-item" href="<?php echo site_url() ?>">
				Home
			</a>
			<div class="navbar-item has-dropdown is-hoverable">
				<a class="navbar-link">
				Movies
				</a>
				<div class="navbar-dropdown">
					<a class="navbar-item" href="<?php echo view_page( 'movies-nowplay' );?>">
						Now Playing
					</a>
					<a class="navbar-item" href="<?php echo view_page( 'toprated-movies' );?>">
						Top Rated
					</a>
					<a class="navbar-item" href="<?php echo view_page( 'upcoming-movies' );?>">
						Upcoming
					</a>
				</div>
			</div>
		</div>
		<div class="navbar-end">
			<div class="navbar-item">
				<form class="field has-addons" action="/" method="get" >
					<div class="control">
						<input class="input" type="text" placeholder="Search here" name="s">
					</div>
					<div class="control">
						<button class="button is-info" type="submit">
						  <i class="fa fa-search"></i>
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</nav><head>
<title><?php echo config('sitename') ?></title>
<meta name="description" content="<?php oc_description();?>">
<meta name="keywords" content="watch online,watch movie online, movie online streaming, watch full movie, watch movie free">
<style>
a.box:hover, a.box:focus {
  -webkit-box-shadow: 0 10px 10px rgba(10, 10, 10, 0.5);
          box-shadow: 0 10px 10px rgba(10, 10, 10, 0.5);
}
.movie-title {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: auto;
    padding: 10px;
	color: rgba(255, 255, 255, 0.9);
    background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
    z-index: 5;
}
.movie-quality {
    background: yellow;
    border-radius: 3px;
    color: #222;
    font-size: 11px;
    font-weight: 900;
    height: auto;
	width: auto;
    line-height: normal;
    padding: 4px 6px;
    position: absolute;
    left: 8px;
    top: 8px;
    z-index: 4;
    text-transform: uppercase;
}
</style>
</head>
<section class="section">
  <div class="container">
    <div class="columns">
      <div class="column is-offset-2 is-8">
        <h1 class="title is-2">
			Privacy Policy
        </h1>
        </article>
        <hr>
        <div class="content is-medium has-text-justified">	
			<p>We recognize that your privacy is important. This document outlines the types of personal information we receive and collect when you use Fizrada Movies, as well as some of the steps we take to safeguard information. We hope this will help you make an informed decision about sharing personal information with us. Fizrada Movies strives to maintain the highest standards of decency, fairness and integrity in all our operations. Likewise, we are dedicated to protecting our customers', consumers' and online visitors' privacy on our website.</p>

			<p><strong>Personal Information</strong></p>

			<p>Fizrada Movies collects personally identifiable information from the visitors to our website only on a voluntary basis. Personal information collected on a voluntary basis may include name, postal address, email address, company name and telephone number.</p>

			<p>This information is collected if you request information from us, participate in a contest or sweepstakes, and sign up to join our email list or request some other service or information from us. The information collected is internally reviewed, used to improve the content of our website, notify our visitors of updates, and respond to visitor inquiries.</p>

			<p>Once information is reviewed, it is discarded or stored in our files. If we make material changes in the collection of personally identifiable information we will inform you by placing a notice on our site. Personal information received from any visitor will be used only for internal purposes and will not be sold or provided to third parties.</p>

			<p><strong>Use of Cookies and Web Beacons</strong></p>

			<p>We may use cookies to help you personalize your online experience. Cookies are identifiers that are transferred to your computer's hard drive through your Web browser to enable our systems to recognize your browser. The purpose of a cookie is to tell the Web server that you have returned to a specific page. For example, if you personalize the sites pages, or register with any of our site's services, a cookie enables Fizrada Movies to recall your specific information on subsequent visits.</p>

			<p>You have the ability to accept or decline cookies by modifying your Web browser; however, if you choose to decline cookies, you may not be able to fully experience the interactive features of the site.</p>

			<p>A web beacon is a transparent image file used to monitor your journey around a single website or collection of sites. They are also referred to as web bugs and are commonly used by sites that hire third-party services to monitor traffic. They may be used in association with cookies to understand how visitors interact with the pages and content on the pages of a web site.</p>

			<p>We may serve third-party advertisements that use cookies and web beacons in the course of ads being served on our web site to ascertain how many times you've seen an advertisement. No personally identifiable information you give us is provided to them for cookie or web beacon use, so they cannot personally identify you with that information on our web site.</p>

			<p>Some third-party advertisements may be provided by Google, which uses cookies to serve ads on this site. Google uses the DART cookie, which enables it to serve ads to our users based on their visits to this site and other sites on the Web. You may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy.</p>

			<p>Browsers can be set to accept or reject cookies or notify you when a cookie is being sent. Privacy software can be used to override web beacons. Taking either of these actions shouldn't cause a problem with our site, should you so choose.</p>

			<p><strong>Children's Online Privacy Protection Act</strong></p>

			<p>This website is directed to adults; it is not directed to children under the age of 13. We operate our site in compliance with the Children's Online Privacy Protection Act, and will not knowingly collect or use personal information from anyone under 13 years of age.</p>

			<p><strong>Non-Personal Information</strong></p>

			<p>In some cases, we may collect information about you that is not personally identifiable. We use this information, which does not identify individual users, to analyze trends, to administer the site, to track users' movements around the site and to gather demographic information about our user base as a whole. The information collected is used solely for internal review and not shared with other organizations for commercial purposes.</p>

			<p><strong>Release of Information</strong></p>

			<p>If Fizrada Movies is sold, the information we have obtained from you through your voluntary participation in our site may transfer to the new owner as a part of the sale in order that the service being provided to you may continue. In that event, you will receive notice through our website of that change in control and practices, and we will make reasonable efforts to ensure that the purchaser honors any opt-out requests you might make of us.

			<p><strong>Updates and Effective Date</strong></p>

			<p>Fizrada Movies reserves the right to make changes in this policy. If there is a material change in our privacy practices, we will indicate on our site that our privacy practices have changed and provide a link to the new privacy policy. We encourage you to periodically review this policy so that you will know what information we collect and how we use it.</p>

			<p><strong>Agreeing to Terms</strong></p>

			<p>If you do not agree to Fizrada Movies Privacy Policy as posted here on this website, please do not use this site or any services offered by this site.</p>

			<p><strong>Your use of this site indicates acceptance of this privacy policy.</strong></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/MAIN-->
</div>
<?php get_footer(); ?>