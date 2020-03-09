<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G-silvers V2
| -------------------------------------------------------------------------------
*/

include('header.php');
?>


<!-- Banner Slider -->
    
    <div class="banner-slider-area text-white">
        <div id="banner-slider" class="owl-carousel banner-slider">
         <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 6) as $row ) {
                ?>
            <div class="banner-item" style="background:url(<?php echo $row['backdrop_path'];?>); background-size:cover;">
            
                <div class="overlay-70">
                    <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
                    <div class="banner-content">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-4 col-md-6">
                                    <span class="rating"><?php echo $row['vote_average'];?></span>
                                    <h1 class="banner-title"><a a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h1>
                                    <p class="banner-date-meta"><?php echo $row['release_date'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php 
                }
        endif; 
        ?>
											
											
            
        </div>
    </div>
    <!-- Banne Slider End -->

    <div class="main-wrap">

        <!-- Movie Section -->
        <div class="section section-padding movie-section" style="margin-top: 250px">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-6">
                        <div class="section-header">
                            <h2 class="section-title">In Theaters</h2>
                            <small><a class="all-link" href="<?php echo view_page( 'movies-nowplay' );?>">See All Movies</a></small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="owl-carousel video-carousel" id="video-carousel">
                    <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="<?php echo $row['poster_path'];?>" alt="Movie Thumb">
                                <span class="rating"><?php echo $row['vote_average'];?></span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                            <div class="video-details">
                                <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h4>
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
        <!-- Movie Section End -->

        <!-- Upcoming Movie Section -->
        <div class="section section-padding bg-image upcomming-section text-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="section-header">
                            <h2 class="section-title">Upcoming Movie</h2>
                            <small><a class="all-link" href="<?php echo view_page( 'upcoming-movies' );?>">See All Upcoming Movies</a></small>
                        </div>
                    </div>
                     
                </div>
                <div class="row">
                    <div class="col-md-9">
                     <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 1) as $row ) {
                ?>
                        <div class="upcomming-featured">
                            <img class="img-responsive" src="<?php echo $row['backdrop_path'];?>" alt="<?php echo $row['title'];?>">
                            <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>"  title="<?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
                            <div class="upcomming-details">
                                <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>"  title="<?php echo $row['title'];?>"><?php echo $row['title'];?> (<?php echo date('Y', strtotime($release_date));?>)</a></h4>
                                <p class="video-release-on"><?php echo $row['release_date'];?></p>
                            </div>
							
                        </div>
					<?php 
                }
        endif; 
        ?>
                    </div>
                    <div class="col-md-3 col-xs-12 sm-top-30">
                    <?php 
        if ( empty( $_GET['page'] ) ) { $page = 2; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_movie_upcoming_',$page, 'getUpcomingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 3) as $row ) {
                ?>
                        <div class="upcomming-item">
                            <img class="img-responsive" src="<?php echo $row['backdrop_path'];?>" alt="<?php echo $row['title'];?>">
                            <div class="upcomming-details">
                                <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>"  title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h4>
                                <p class="video-release-on"><?php echo $row['release_date'];?></p>
                            </div>
                            <div class="upcomming-hover">
                                <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>"  title="<?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
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

        <!-- TV Show Section -->
        <div class="section section-padding tvshow-section">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 col-xs-6">
                        <div class="section-header">
                            <h2 class="section-title">On The Air TV Shows</h2>
                            <small><a class="all-link" href="<?php echo view_page( 'tv-ontheair' );?>">See All Shows</a></small>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="owl-carousel video-carousel tvshow-carousel" id="tvshow-carousel">
                    <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                        <div class="video-item">
                            <div class="thumb-wrap">
                                <img src="<?php echo $row['poster_path'];?>" alt="Movie Thumb">
                                <span class="rating"><?php echo $row['vote_average'];?></span>
                                <div class="thumb-hover">
                                    <a class="play-video" href="<?php echo seo_tv($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
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
        <!-- TV Show Section End -->

    </div>

<?php include('footer.php'); ?>