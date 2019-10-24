<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silver
| Template Name     : Black V1
| -------------------------------------------------------------------------------
*/
include('header.php');?>
<body>
	<div class="wrapper" style="overflow: inherit;">
		
		<?php include('menu.php');?>

		<?php include('slide.php');?>

		<div class="container section" id="content">
			<div class="row">
				<div class="col-sm-12">
					<h2>MOVIES</h2>
					<div class="row">
	<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
	<div class="col-md-15 col-xs-6 margin-bottom-20">
	<a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="list-movie" tabindex="-1">
		<div class="overlay"></div>
		<img src="<?php echo $row['poster_path'];?>" class="img-movie" alt="<?php echo $row['title'];?>">
		<div class="atribut-movie">
			<span class="label label-primary label-like label-black-transparant">
				<?php echo $vote_count;?> Like
			</span>

			<span class="label label-primary label-rate" style="float: right!important;">
				<i class="fa fa-star"></i>
				<?php echo $row['vote_average'];?>			</span>
			<h5 class="no-underline text-title"><?php echo $row['title'];?><br>

				<small class="text-white">
				<?php echo date('d M Y', strtotime( $row['release_date'] ) );?></small>
				</h5>

			</div>
			<div class="play-icon"><i class="fa fa-youtube-play"></i></div>
		</a>
	</div>
	<?php 
                }
        endif; 
        ?>
	</div>
				</div>
			</div>
		</div>
	</div>
	
<section class="dark">
<div class="container section">
<div class="row">
   <div class="col-sm-12">
      <h2>TV SERIES</h2>
      <div class="slick-carousel slick-initialized slick-slider" id="newIn">
         <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_airing_',$page, 'getAiringTodayTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                  <div class="col-md-15 col-xs-6 margin-bottom-20 movie-slide slick-slide" style="width: 250px;">
                     <div class="movie-poster">
                        <aside>
                           <div>
						   <a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="read-more"><?php echo $row['title'];?></a>
                              <a href="<?php echo seo_tv($row['id'],$row['title']);?>" data-vbtype="video" class="play">
                              <i class="material-icons">play_arrow</i>
                              </a>
                              <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="read-more">Watch Now</a>
                              <span class="date">Released: <?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></span>
                           </div>
                        </aside>
                        <a href="<?php echo seo_tv($row['id'],$row['title']);?>">
                        <img src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?>">
                     </div>
                     <div class="fa fa-star">
                        <span itemprop="ratingValue"><?php echo $row['vote_average'];?></span>/<span itemprop="bestRating">10</span> by <span itemprop="ratingCount"><?php echo $row['vote_count'];?></span> users
                     </div>
                     </a>
                  </div>
                  <?php 
                }
        endif; 
        ?>
		 </div>
      </div>
   </div>
</div>
</section>
<?php include('footer.php');?>