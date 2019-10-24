<?php 
/**
 * The template for displaying page dmca
 *
 * @package g-silvers.cf
 * @subpackage tmdbtwo
 * @since TMDB 10
 */
$hack_title = 'Disclaimer';
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
			Disclaimer
        </h1>
        </article>
        <hr>
        <div class="content is-medium has-text-justified">	
			<p>Fizrada Movies provides this website as a service. While the information contained within the site is periodically updated, no guarantee is given that the information provided in this website is correct, complete, and/or up-to- date.</p>

			<p>The materials contained on this website are provided for general information purposes only. Fizrada Movies does not accept any responsibility for any loss which may arise from reliance on information contained on this site.</p>

			<p>Permission is given for the downloading and temporary storage of one or more of these pages for the purpose of viewing on a personal computer. The contents of this site are protected by copyright under international conventions and, apart from the permission stated, the reproduction, permanent storage, or retransmission of the contents of this site is prohibited without the prior written consent of Fizrada Movies.</p>

			<p>Some links within this website may lead to other websites, including those operated and maintained by third parties. Fizrada Movies includes these links solely as a convenience to you, and the presence of such a link does not imply a responsibility for the linked site or an endorsement of the linked site, its operator, or its contents (exceptions may apply).</p>

			<p>This website and its contents are provided "AS IS" without warranty of any kind, either express or implied, including, but not limited to, the implied warranties of merchantability, fitness for a particular purpose, or non-infringement.</p>

			<p>Reproduction, distribution, republication, and/or retransmission of material contained within this website are prohibited unless the prior written permission of Fizrada Movies has been obtained. provides this website as a service. While the information contained within the site is periodically updated, no guarantee is given that the information provided in this website is correct, complete, and/or up-to- date.</p>

        </div>
      </div>
    </div>
  </div>
</section>

<!--/MAIN-->
</div>
<?php get_footer(); ?>