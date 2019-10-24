<?php

$hack_title = 'Now Playing Movies';
$hack_description = 'See a full list of Now Playing Movies at Theater on '.site_path();
get_header(); ?>
<body>
	<div class="wrapper" style="overflow: inherit;">
		
		<?php get_menu();?>

<section class="dark">
   <div class="container section remove-bottom-padding">
      <div class="row comingSoon-slides">
         <div class="col-sm-12">
            <h2>Now Playing</h2>
            <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 1) as $row ) {
                ?>
            <div class="row single-slide slide<?php echo $row['id'];?>" style="opacity: 0; height: 0px; padding-bottom: 0px;">
               <div class="bg" style="background: url(https://cdn.wonderfulengineering.com/wp-content/uploads/2014/07/background-wallpapers-2.jpg);"></div>
               <div class="col-sm-5 slide-content">
                  <span class="imdb"><strong>IMDb:</strong><imdb> <?php echo $row['vote_average'];?></imdb></span>
                  <h3 class="no-underline"><?php echo $row['title'];?></h3>
                  <div class="star-rating">
                     <i class="material-icons">star_rate</i>
                     <i class="material-icons">star_rate</i>
                     <i class="material-icons">star_rate</i>
                     <i class="material-icons">star_rate</i>
                     <i class="material-icons">star_rate</i>
                  </div>
                  <div class="date">
                     <i class="material-icons">date_range</i> <?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?>
                  </div>
                  <p><?php echo short($row['overview']);?></p>
                  <p><a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="arrow-button">More info</a></p>
               </div>
               <div class="col-sm-6 col-sm-push-1 slide-video">
                  <a href="<?php echo seo_movie($row['id'],$row['title']);?>" data-vbtype="video" class="video">
                  <i class="material-icons">play_arrow</i>
                  <img src="<?php echo $row['backdrop_path'];?>" alt="<?php echo $row['title'];?>">
                  </a>
               </div>
            </div>
            <?php 
                }
        endif; 
        ?>
               </div>
            </div>
         </div>
</section>
<div class="container section">
<div class="row">
   <div class="col-sm-12">
      <h2>Box Office Movies</h2>
      <div class="slick-carousel slick-initialized slick-slider" id="newIn">
         <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 18) as $row ) {
                ?>
                  <div class="col-md-15 col-xs-6 margin-bottom-20 movie-slide slick-slide" style="width: 300px;">
                  <div class="movie-poster">
                     <aside>
                        <div>
                           <a href="<?php echo seo_movie($row['id'],$row['title']);?>" data-vbtype="video" class="play">
                           <i class="material-icons">play_arrow</i>
                           </a>
                           <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="read-more">Watch Now</a>
                        </div>
                     </aside>
                     <a href="<?php echo seo_movie($row['id'],$row['title']);?>" tabindex="0">
                     <img src="<?php echo $row['backdrop_path'];?>" alt="<?php echo $row['title'];?>">
                     </a>
                  </div>
				  <a>
                  <div class="fa fa-star">
                     <h5><?php echo $row['title'];?></h5>
                  </div>
                  </a>
               </div>
                  <?php 
                }
        endif; 
        ?>
		 </div>
      </div>
      <div id="pagination" style="text-align: left;"><?php
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');

                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = "/?do=movie-playing";
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?></div>
   </div>
</div>
<?php get_footer(); ?>