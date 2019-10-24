<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V10
| -------------------------------------------------------------------------------
*/
include('header.php');
$newquery = bad_words( get_search_query() );
?>
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
<main class="hero is-light">
<div class="hero-body">
    <div class="container">
		<form class="field has-addons" action="/" method="get" >
		
		  <div class="control is-expanded has-icons-left">
			<input class="input" type="text" placeholder="Search here" name="s">
			<span class="icon is-small is-left">
				<i class="fa fa-search"></i>
			</span>
		  </div>
		  <div class="control">
			<a class="button is-info">
			  Search
			</a>
		  </div>
		
		</form>
		<hr>
		<h2 class="subtitle is-uppercase has-text-weight-semibold">
			Search result for "<?php echo $newquery;?>"
		</h2>
		<div class="columns is-mobile is-multiline ">
			
		<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 12) as $row ) {
                ?>
			<div class="column is-6-mobile is-3-tablet is-one-fifth-desktop ">
				
				<a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="box">
				<figure class="image is-1by2 ">
				<span class="movie-quality"><i class="fa fa-star"></i> 	<?php echo $row['vote_average'];?></span>
					<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?> 2">
				<div class="has-text-centered has-text-weight-semibold movie-title"><?php echo $row['title'];?> 2</div>
				</figure>
				
				</a>
			</div>
			<?php 
                }
        else:
            $unserialize = unserialize( ocim_search(limit_word($newquery, 3), limit_word($newquery, 3).'_search') );
            if( is_array($unserialize['result']) ):
                foreach ( (array) $unserialize['result'] as $sect) {
                ?>
		<div class="column is-6-mobile is-3-tablet is-one-fifth-desktop ">
				
				<a href="<?php echo seo_video($sect['id'],$sect['title']);?>" class="box">
				<figure class="image is-1by2 ">
				<span class="movie-quality"><i class="fa fa-star"></i> 	<?php echo $sect['vote_average'];?></span>
					<img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs=" data-src="<?php echo $sect['poster_path'];?>" alt="<?php echo $sect['title'];?> 2">
				<div class="has-text-centered has-text-weight-semibold movie-title"><?php echo $sect['title'];?> 2</div>
				</figure>
				
				</a>
			</div>
			<?php
                }
            else: ?>
            <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2><i class="fa fa-exclamation"></i> No Movie Found for this search</h2>
                        </div>
                    </div>
                </div>
                <br>
            <?php 
            endif; 
        endif;
        ?>
		
		
		</div>
		<div class="clearfix"></div>
        <nav class="text-center">
                <?php 
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');
                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = '/?s='.get_search_query();
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>
    </div>
</div>
</main>
<!--/MAIN-->
</div>
<?php include('footer.php'); ?>