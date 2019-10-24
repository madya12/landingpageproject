<?php
$hack_title = 'Tv Series Featured';
$hack_description = "Check out the latest new series coming soon to theaters";
get_header(); ?>
<div class="main-wrap">
        <!-- In Theaters Movie Section -->
        <div class="section section-padding bg-image text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <div class="section-header">
                            <h2 class="section-title">Airing Today</h2>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 d-none d-sm-block">
                        <a class="all-link" href="<?php echo view_page( 'tv-airing' );?>">See All Movies</a>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel video-carousel video-carousel2 mw-100" id="video-carousel2">
                    
                        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_airing_',$page, 'getAiringTodayTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="<?php echo $row['poster_path'];?>" alt="Play <?php echo $row['title'];?>">
                                    <span class="rating"><?php echo $row['vote_average'];?></span>
                                    <div class="thumb-hover">
                                        <a class="play-video" href="<?php echo seo_tv($row['id'],$row['title']);?>" title="Play <?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-details">
                                    <h4 class="video-title"><a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h4>
                                    <p class="video-release-on"><?php echo $row['release_date'];?></p>
                                </div>
                            </div>
                        <?php 
                }
        endif; 
        ?>
                       
                                           </div>
                </div>
            </div>
        </div>
        <!-- In Theaters Movie Section End -->
		<!-- Popular Movie Section -->
        <div class="section section-padding bg-image text-white upcomming-section">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <div class="section-header">
                            <h2 class="section-title">Popular</h2>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 d-none d-sm-block">
                         <a class="all-link" href="<?php echo view_page( 'tv-popular' );?>">See All Popular Movies</a>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel video-carousel video-carousel2 mw-100" id="video-carousel2">
                    
                        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_popular_',$page, 'getPopularTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                        <div class="owl-item" style="width: 195px;">
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="<?php echo $row['poster_path'];?>" alt="Play <?php echo $row['title'];?>">
                                    <span class="rating"><?php echo $row['vote_average'];?></span>
                                    <div class="thumb-hover">
                                        <a class="play-video" href="<?php echo seo_tv($row['id'],$row['title']);?>" title="Play <?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-details">
                                    <h4 class="video-title"><a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h4>
                                    <p class="video-release-on"><?php echo $row['release_date'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                }
        endif; 
        ?>
                       
                                           </div>
                </div>
            </div>
        </div>
        <!-- Popular Movie Section End -->
		<!-- Top Rated Section -->
        <div class="section section-padding bg-image text-white">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center text-sm-left">
                        <div class="section-header">
                            <h2 class="section-title">On the Air</h2>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 d-none d-sm-block">
                        <a class="all-link" href="<?php echo view_page( 'tv-ontheair' );?>">See All Top Rated Movies</a>
                    </div>
                </div>
                <div class="row">
                    <div class="owl-carousel video-carousel video-carousel2 mw-100" id="video-carousel2">
                    
                        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                        <div class="owl-item" style="width: 195px;">
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="<?php echo $row['poster_path'];?>" alt="Play <?php echo $row['title'];?>">
                                    <span class="rating"><?php echo $row['vote_average'];?></span>
                                    <div class="thumb-hover">
                                        <a class="play-video" href="<?php echo seo_tv($row['id'],$row['title']);?>" title="Play <?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-details">
                                    <h4 class="video-title"><a href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h4>
                                    <p class="video-release-on"><?php echo $row['release_date'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                }
        endif; 
        ?>
                       
                                           </div>
                </div>
            </div>
        </div>
        <!-- Top Rated Section End -->
   <div class="section section-padding bg-image text-white upcomming-section">
      <div class="container">
         <div class="section-header text-center text-sm-left">
            <h2 class="section-title">Genres</h2>
         </div>
         <div class="row">
            <?php foreach ($_cate as $cateid => $catename): ?>
			<div class="col-4 col-sm-3 col-md-2"><a href="<?php echo seocat( $catename,$cateid );?>"><?php echo ucwords($catename) ?></a></div>
			<?php endforeach ?>
         </div>
      </div>
   </div>
</div>
<?php get_footer(); ?>