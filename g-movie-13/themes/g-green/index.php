<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G-silvers V2
| -------------------------------------------------------------------------------
*/

include('header.php');
?>
<div id="main">
	<div id="home" class="clearfix">
		<div class="container">
<div class="col-md-12 col-z">
    					<h3 class="widget-title">
						<span>Now Playing Movies</span>
					</h3>
				<div class="col-md-6 col-z">
				    <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 8) as $row ) {
                ?>
				<article id="post-400710" class="post col-md-3 col-sm-3 col-xs-6 col-box">
			<div class="poster-container">
				<div class="img-container">
					<img class="ease" src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?>">
					</div>
					<span class="img-cover"></span>
				</div>
				<div class="detail-container ease">
					<span class="star">
						<span class="glyphicon glyphicon-bookmark"></span>
						<span class="rate">HD</span>
					</span>
					<header class="entry-header">
						<h2 class="entry-title text-center">
							<a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a>
						</h2>
					</header>
					<div class="play-btn">
						<a href="<?php echo seo_movie($row['id'],$row['title']);?>">
							<span class="play-btn-border ease">
								<i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</article>
									<?php 
                }
        endif; 
        ?>

			
				</div>
<div class="col-md-6 col-z">
				<div class="col-md-12 col-z">
				    <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 8) as $row ) {
                ?>
				<article id="post-400710" class="post col-md-3 col-sm-3 col-xs-6 col-box">
			<div class="poster-container">
				<div class="img-container">
					<img class="ease" src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?>">
					</div>
					<span class="img-cover"></span>
				</div>
				<div class="detail-container ease">
					<span class="star">
						<span class="glyphicon glyphicon-bookmark"></span>
						<span class="rate">HD</span>
					</span>
					<header class="entry-header">
						<h2 class="entry-title text-center">
							<a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a>
						</h2>
					</header>
					<div class="play-btn">
						<a href="<?php echo seo_movie($row['id'],$row['title']);?>">
							<span class="play-btn-border ease">
								<i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
							</span>
						</a>
					</div>
				</div>
			</article>
									<?php 
                }
        endif; 
        ?>
						</div>
			
				</div>

			
<section class="col-md-12">
					<h3 class="widget-title">
						<span>TV ON THE AIR</span>
					</h3>
	<div class="col-container clearfix">

			<?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 9) as $row ) {
                ?>
<article id="post-293660" class="col-md-4 col-sm-6 col-xs-6 col-box">
								<div class="backdrop-container">
<img class="img-responsive ease" src="<?php echo $row['backdrop_path'];?>" alt="<?php echo $row['title'];?>">
<span class="img-cover"></span>
</div>
<div class="detail-container ease">
    	<span class="star">
		<span class="glyphicon glyphicon-bookmark"></span>
		<span class="rate">HD</span>
	</span>
<header class="entry-header">
	<h2 class="entry-title text-center">
		<a href="<?php echo seo_tv($row['id'],$row['title']);?>"><?php echo $row['title'];?></a>
	</h2>
</header>
<div class="play-btn">
	<a href="<?php echo seo_tv($row['id'],$row['title']);?>">
		<span class="play-btn-border ease">
			<i class="fa fa-play-circle headline-round ease" aria-hidden="true"></i>
		</span>
	</a>
</div>
</div>
	</article>
<?php 
                }
        endif; 
        ?>
						
				</div>
			</section>
		</div>
	</div>
	</div>
<?php include('footer.php'); ?>