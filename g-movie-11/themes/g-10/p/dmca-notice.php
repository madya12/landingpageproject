<?php 
/**
 * The template for displaying page dmca
 *
 * @package g-silvers.cf
 * @subpackage tmdbtwo
 * @since TMDB 10
 */
$hack_title = 'DMCA Notice';
$hack_description = "If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site.";
get_header(); ?>
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
			DMCA
        </h1>
        </article>
        <hr>
        <div class="content is-medium has-text-justified">	
			

<p>Fizrada Movies respects the intellectual property of others. Fizrada Movies takes matters of Intellectual Property very seriously and is committed to meeting the needs of content owners while helping them manage publication of their content online.</p>

<p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site, you may notify our copyright agent, as set forth in the Digital Millennium Copyright Act of 1998 (DMCA). For your complaint to be valid under the DMCA, you must provide the following information when providing notice of the claimed copyright infringement:</p>
<ul>
    <li>A physical or electronic signature of a person authorized to act on behalf of the copyright owner Identification of the copyrighted work claimed to have been infringed</li>
    <li>Identification of the material that is claimed to be infringing or to be the subject of the infringing activity and that is to be removed</li>
    <li>Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address</li>
    <li>A statement that the complaining party "in good faith believes that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law"</li>
    <li>A statement that the "information in the notification is accurate", and "under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed"</li>
</ul>
<p>The above information must be submitted as a written, faxed or emailed notification to the following Designated Agent:</p>

<p>Attn: DMCA Office</p>

<p>Contact Us : <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1775766d6d677f78726d7e72797c57707a767e7b3974787a">bazzphoezienk@gmail.com</a></p>

<p>WE CAUTION YOU THAT UNDER FEDERAL LAW, IF YOU KNOWINGLY MISREPRESENT THAT ONLINE MATERIAL IS INFRINGING, YOU MAY BE SUBJECT TO HEAVY CIVIL PENALTIES. THESE INCLUDE MONETARY DAMAGES, COURT COSTS, AND ATTORNEYS FEES INCURRED BY US, BY ANY COPYRIGHT OWNER, OR BY ANY COPYRIGHT OWNER'S LICENSEE THAT IS INJURED AS A RESULT OF OUR RELYING UPON YOUR MISREPRESENTATION. YOU MAY ALSO BE SUBJECT TO CRIMINAL PROSECUTION FOR PERJURY.</p>

<p>This information should not be construed as legal advice, for further details on the information required for valid DMCA notifications, see 17 U.S.C. 512(c)(3).</p>


        </div>
      </div>
    </div>
  </div>
</section>

<!--/MAIN-->
</div>
<?php get_footer(); ?>