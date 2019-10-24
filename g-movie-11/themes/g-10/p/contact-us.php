<?php 
$hack_title = 'Contact Us';
$hack_description = "Please feel free to contact us using the form below.";
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
			Contact
        </h1>
        <hr>
        <div class="content is-medium has-text-justified">	
			

<p>If you want to contact fizradamovie.com, send your suggestions, report website bugs, or promote your apps, please contact us using our form below:</p>
			 
				<form action="" method="POST" role="form" enctype="multipart/form-data">
					<div class="field">
						<label class="label">Name</label>
						<div class="control">
							<input name="name" class="input" type="text" id="name" placeholder="Your Name" required>
						</div>
					</div>
					
					<div class="field">
						<label class="label">Email</label>
						<div class="control">
							<input name="email" class="input" type="email" id="email" placeholder="Your Email" required>
						</div>
					</div>
					
					<div class="field">
						<label class="label">Message</label>
						<div class="control">
							<textarea name="message" class="textarea" id="message" placeholder="Your Message" required></textarea>
						</div>
					</div>
					<input type="hidden" name="contact" value="submit">
					<button id="submitcontact" type="submit" class="button is-link pull-right">Submit</button>
				</form>
				 


        </div>
      </div>
    </div>
  </div>
</section>

<!--/MAIN-->
</div>
<?php get_footer(); ?>