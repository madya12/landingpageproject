<?php
/*
| -------------------------------------------------------------------------------
| Author            : Galih Sophian
| Template Name     : G-Silvers V3
| -------------------------------------------------------------------------------
*/

include('header.php');
?>
<div id="main">
    <div id="home" class="clearfix">
        <div class="container">
            <div class="col-md-12 col-z">
                <div class="col-md-12 col-z" style="margin-bottom: 3%">
                    <span class="home-label" style="margin: 2% 2%">In Theaters</span>
                    <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 0) as $row ) {
                ?>
                    <article id="post-346364" class="col-md-6 col-z col-box">
                        <div class="backdrop-container">
                            <img class="img-responsive ease" src="<?php echo $row['backdrop_path'];?>">
                            <span class="img-cover"></span>
                        </div>
                        <div class="detail-container ease">
                            <header class="entry-header">
                                <h2 class="entry-title text-center">
                                    <a
                                        href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a>
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
                    <div class="col-md-12 col-z">
                        <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_movie_popular_',$page, 'getPopularMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 6) as $row ) {
                ?>
                        <article id="post-293660" class="col-md-4 col-sm-4 col-z col-box">
                            <div class="backdrop-container" style="padding: 5% 5%">
                                <img class="img-responsive ease" src="<?php echo $row['backdrop_path'];?>"
                                    alt="<?php echo $row['title'];?>">
                                <span class="img-cover"></span>
                            </div>
                            <div class="detail-container ease">
                                <header class="entry-header" style="bottom: 10%">
                                    <h2 class="entry-title text-center">
                                        <a
                                            href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a>
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

                <div class="col-md-12 col-z">
                    <span class="home-label" style="margin: 2% 2%">On TV</span>
                    <div class="col-md-12 col-z">
                        <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_tv('home_tv_ontheair_',$page, 'getOnTheAirTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 6) as $row ) {
                ?>
                        <article id="post-1399" class="col-md-4 col-sm-4 col-z col-box">
                            <div class="backdrop-container" style="padding: 5% 5%">
                                <img class="img-responsive ease" src="<?php echo $row['backdrop_path'];?>"
                                    alt="<?php echo $row['title'];?>">
                                <span class="img-cover"></span>
                            </div>
                            <div class="detail-container ease">
                                <header class="entry-header" style="bottom: 10%">
                                    <h2 class="entry-title text-center">
                                        <a
                                            href="<?php echo seo_tv($row['id'],$row['title']);?>"><?php echo $row['title'];?></a>
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
                    <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_tv('home_tv_airing_',$page, 'getAiringTodayTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 1) as $row ) {
                ?>
                    <article id="post-346364" class="col-md-12 col-z col-box">
                        <div class="backdrop-container">
                            <img class="img-responsive ease" src="<?php echo $row['backdrop_path'];?>">
                            <span class="img-cover"></span>
                        </div>
                        <div class="detail-container ease">
                            <header class="entry-header">
                                <h2 class="entry-title text-center">
                                    <a
                                        href="<?php echo seo_tv($row['id'],$row['title']);?>"><?php echo $row['title'];?></a>
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
            </div>
        </div>
    </div>
    <?php include('footer.php'); ?>