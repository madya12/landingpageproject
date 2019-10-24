<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/

include('header.php');
?>
<!-- Upcoming Movie Section -->
        <div class="section section-padding bg-image upcomming-section text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-header">
                            <h2 class="section-title">Upcomming Movie</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
				<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 1) as $row ) {
                ?>
                    <div class="col-md-9">
                        <div class="upcomming-featured">
                           <img class="img-responsive" src="<?php echo $row['backdrop_path'];?>" alt="Upcomming Featured">
                            <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>"><i class="fa fa-play"></i></a>
                            <div class="upcomming-details">
                                <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a></h4>
                                <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></p>
                            </div>
                        </div>
                    </div>
					<?php 
                }
        endif; 
        ?>
                    <div class="col-md-3 col-xs-12 sm-top-30">
                        <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 3) as $row ) {
                ?>
                        <div class="upcomming-item">
                            <img class="img-responsive" src="<?php echo $row['backdrop_path'];?>" width="240" height="178" alt="upcomming">
                            <div class="upcomming-details">
                                <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a></h4>
                                <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></p>
                            </div>
                            <div class="upcomming-hover">
                                <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>"><i class="fa fa-play"></i></a>
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
        <!-- Upcoming Movie Section End -->

    <div class="main-wrap">

        <!-- Movie Section -->
        <div class="section section-padding movie-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-6">
                        <div class="section-header">
                            <h2 class="section-title">Latest Movies</h2>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <a class="all-link" href="<?php echo view_page( 'popular-movies' );?>">See All Movies</a>
                    </div>
                </div>

                <div class="row">
                    <div class="owl-carousel video-carousel owl-theme" id="video-carousel" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4688px; left: 0px; display: block;">
						
						<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_movie('home_movie_popular_',$page, 'getPopularMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
				<div class="owl-item" style="width: 293px;">
				<div class="video-item">
                            <div class="thumb-wrap">
                                <img src="<?php echo $row['poster_path'];?>" alt="Movie Thumb">
                                <span class="rating"><?php echo $row['vote_average'];?></span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a></h4>
                                <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></p>
                            </div>
                        </div>
						</div>
						<?php 
                }
        endif; 
        ?>
						
						</div></div>
                        
                        
                        
                        
                        
                        
                        
                    <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                </div>
            </div>
        </div>
        <!-- Movie Section End -->

        <!-- TV Show Section -->
        <div class="section section-padding movie-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-6">
                        <div class="section-header">
                            <h2 class="section-title">Latest Tv Show</h2>
                        </div>
                    </div>
                    <div class="col-sm-4 col-xs-6">
                        <a class="all-link" href="<?php echo view_page( 'tv-ontheair' );?>">See All Tv Show</a>
                    </div>
                </div>

                <div class="row">
                    <div class="owl-carousel video-carousel owl-theme" id="video-carousel" style="opacity: 1; display: block;">
                        <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 4688px; left: 0px; display: block;">
						
						<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
				<div class="owl-item" style="width: 293px;">
				<div class="video-item">
                            <div class="thumb-wrap">
                                <img src="<?php echo $row['poster_path'];?>" alt="Movie Thumb">
                                <span class="rating"><?php echo $row['vote_average'];?></span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="<?php echo seo_tv($row['id'],$row['title']);?>"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="<?php echo seo_tv($row['id'],$row['title']);?>"><?php echo $row['title'];?></a></h4>
                                <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></p>
                            </div>
                        </div>
						</div>
						<?php 
                }
        endif; 
        ?>
						
						</div></div>
                        
                        
                        
                        
                        
                        
                        
                    <div class="owl-controls clickable"><div class="owl-buttons"><div class="owl-prev"><i class="fa fa-angle-left"></i></div><div class="owl-next"><i class="fa fa-angle-right"></i></div></div></div></div>
                </div>
            </div>
        </div>
        <!-- TV Show Section End -->

        <!-- News -->
        
        <!-- News End -->

    </div>

<?php include('footer.php'); ?>