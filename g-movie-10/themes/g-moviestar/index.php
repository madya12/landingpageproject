<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silver
| Template Name     : Black V1
| -------------------------------------------------------------------------------
*/
include('header.php'); ?>
    <body>
<div class="wrapper" style="overflow: inherit;">

    <div style="padding: 32px;">
        <?php include('menu.php'); ?>

        <?php include('slide.php'); ?>
    </div>
    <div class="container section" id="content" style=" margin-top: 32px; padding: 32px; border-radius: 32px;">
        <div class="row">
            <div class="col-sm-12">
                <h2>MOVIES</h2>
                <div class="row">
                    <?php
                    if (empty($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }
                    $Movies = unserialize(ocim_data_movie('home_m_', $page, 'getNowPlayingMovies'));
                    if (is_array($Movies['result'])):
                        foreach ((array)array_slice($Movies['result'], 0, 10) as $row) {
                            ?>
                            <div class="col-md-15 col-xs-6 margin-bottom-20">
                                <a href="<?php echo seo_movie($row['id'], $row['title']); ?>" class="list-movie"
                                   tabindex="-1">
                                    <div class="overlay"></div>
                                    <img src="<?php echo $row['poster_path']; ?>" class="img-movie"
                                         alt="<?php echo $row['title']; ?>">
                                    <div class="atribut-movie">
			<span class="label label-primary label-like label-black-transparant">
				<?php echo $vote_count; ?> Like
			</span>

                                        <span class="label label-primary label-rate" style="float: right!important;">
				<i class="fa fa-star"></i>
				<?php echo $row['vote_average']; ?>			</span>
                                        <h5 class="no-underline text-title"><?php echo $row['title']; ?><br>

                                            <small class="text-white">
                                                <?php echo date('d M Y', strtotime($row['release_date'])); ?></small>
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

<section class="dark" style="margin: 0px 0px 100px 0px ;">
    <div class="container section" style="padding-bottom: 0px;">
        <div class="row">
            <div class="col-sm-12">
                <h2>TV SERIES</h2>
                <div class="slick-carousel slick-initialized slick-slider" id="newIn"
                ">
                <?php
                if (empty($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                $Movies = unserialize(ocim_data_tv('home_tv_airing_', $page, 'getAiringTodayTVShows'));
                if (is_array($Movies['result'])):
                    foreach ((array)array_slice($Movies['result'], 0, 5) as $row) {
                        ?>
                        <div class="col-md-15 col-xs-6 margin-bottom-20 movie-slide slick-slide" style="width: 196px;">
                            <div class="movie-poster">
                                <aside>
                                    <div>
                                        <a href="<?php echo seo_tv($row['id'], $row['title']); ?>"
                                           class="read-more"><?php echo $row['title']; ?></a>
                                        <a href="<?php echo seo_tv($row['id'], $row['title']); ?>" data-vbtype="video"
                                           class="play">
                                            <i class="material-icons">play_arrow</i>
                                        </a>
                                        <a href="<?php echo seo_movie($row['id'], $row['title']); ?>" class="read-more">Watch
                                            Now</a>
                                        <span class="date">Released: <?php echo date('Y-m-d', strtotime($row['release_date'])); ?></span>
                                    </div>
                                </aside>
                                <a href="<?php echo seo_tv($row['id'], $row['title']); ?>">
                                    <img src="<?php echo $row['poster_path']; ?>" alt="<?php echo $row['title']; ?>">
                            </div>
                            <div class="fa fa-star">
                                <span itemprop="ratingValue"><?php echo $row['vote_average']; ?></span>/<span
                                        itemprop="bestRating">10</span> by <span
                                        itemprop="ratingCount"><?php echo $row['vote_count']; ?></span> users
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

<div style="margin: 32px;">
    <div class="table">
        <div class="row">
            <div class="col-md-4" style="background: #353688; padding: 62px 32px 32px 80px ; margin-left: 64px; border-radius: 32px 0px 0px 32px ;">
                <h2 style="color: white">You Must Watch This Film</h2>
                <div class="slick-carousel slick-initialized slick-slider" id="newIn">
                    <?php
                    if (empty($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }
                    $Movies = unserialize(ocim_data_tv('home_tv_airing_', $page, 'getAiringTodayTVShows'));
                    if (is_array($Movies['result'])):
                        foreach ((array)array_slice($Movies['result'], 5, 4) as $row) {
                            ?>
                            <div class="col-md-15 col-xs-6 margin-bottom-20 movie-slide slick-slide"
                                 style="width: 200px;">
                                <div class="movie-poster">
                                    <aside>
                                        <div>
                                            <a href="<?php echo seo_tv($row['id'], $row['title']); ?>"
                                               class="read-more"><?php echo $row['title']; ?></a>
                                            <a href="<?php echo seo_tv($row['id'], $row['title']); ?>"
                                               data-vbtype="video"
                                               class="play">
                                                <i class="material-icons">play_arrow</i>
                                            </a>
                                            <a href="<?php echo seo_movie($row['id'], $row['title']); ?>"
                                               class="read-more">Watch
                                                Now</a>
                                            <span class="date">Released: <?php echo date('Y-m-d', strtotime($row['release_date'])); ?></span>
                                        </div>
                                    </aside>
                                    <a href="<?php echo seo_tv($row['id'], $row['title']); ?>">
                                        <img src="<?php echo $row['poster_path']; ?>"
                                             alt="<?php echo $row['title']; ?>">
                                </div>
                                <div class="fa fa-star">
                                    <span itemprop="ratingValue"><?php echo $row['vote_average']; ?></span>/<span
                                            itemprop="bestRating">10</span> by <span
                                            itemprop="ratingCount"><?php echo $row['vote_count']; ?></span> users
                                </div>
                                </a>
                            </div>
                            <?php
                        }
                    endif;
                    ?>
                </div>
            </div>

            <div class="col-md-7" style="background: #DFE7F4; padding: 62px 32px 32px 56px ; border-radius: 0px 32px 0px 0px ; margin-bottom: 0px;">
                <h2 style="color: white"><a href="javascript:void(0)" data-toggle="modal" data-target="#reg_form" style="color: #F8CA4D">Register</a> & Get Account Premiere Now!</h2>
                <div class="slick-carousel slick-initialized slick-slider" id="newIn">
                    <?php
                    if (empty($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }
                    $Movies = unserialize(ocim_data_tv('home_tv_airing_', $page, 'getAiringTodayTVShows'));
                    if (is_array($Movies['result'])):
                        foreach ((array)array_slice($Movies['result'], 11, 9) as $row) {
                            ?>
                            <div class="col-md-15 col-xs-6 margin-bottom-20 movie-slide slick-slide"
                                 style="width: 160px;">
                                <div class="movie-poster">
                                    <aside>
                                        <div>
                                            <a href="<?php echo seo_tv($row['id'], $row['title']); ?>"
                                               class="read-more"><?php echo $row['title']; ?></a>
                                            <a href="<?php echo seo_tv($row['id'], $row['title']); ?>"
                                               data-vbtype="video"
                                               class="play">
                                                <i class="material-icons">play_arrow</i>
                                            </a>
                                            <a href="<?php echo seo_movie($row['id'], $row['title']); ?>"
                                               class="read-more">Watch
                                                Now</a>
                                            <span class="date">Released: <?php echo date('Y-m-d', strtotime($row['release_date'])); ?></span>
                                        </div>
                                    </aside>
                                    <a href="<?php echo seo_tv($row['id'], $row['title']); ?>">
                                        <img src="<?php echo $row['poster_path']; ?>"
                                             alt="<?php echo $row['title']; ?>">
                                </div>
                                <div class="fa fa-star">
                                    <span itemprop="ratingValue"><?php echo $row['vote_average']; ?></span>/<span
                                            itemprop="bestRating">10</span> by <span
                                            itemprop="ratingCount"><?php echo $row['vote_count']; ?></span> users
                                </div>
                                </a>
                            </div>
                            <?php
                        }
                    endif;
                    ?>
                </div>
            </div>

            <div class="col-md-7" style="background: #7768E5; padding: 62px 32px 32px 56px ; border-radius: 0px 0px 32px 0px ; margin-top: 0px;">
                <h2 style="color: white">Most View</h2>
                <div class="slick-carousel slick-initialized slick-slider" id="newIn">
                    <?php
                    if (empty($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }
                    $Movies = unserialize(ocim_data_tv('home_tv_airing_', $page, 'getAiringTodayTVShows'));
                    if (is_array($Movies['result'])):
                        foreach ((array)array_slice($Movies['result'], 9, 2) as $row) {
                            ?>
                            <div class="col-md-15 col-xs-6 margin-bottom-20 movie-slide slick-slide"
                                 style="width: 206px;">
                                <div class="movie-poster">
                                    <aside>
                                        <div>
                                            <a href="<?php echo seo_tv($row['id'], $row['title']); ?>"
                                               class="read-more"><?php echo $row['title']; ?></a>
                                            <a href="<?php echo seo_tv($row['id'], $row['title']); ?>"
                                               data-vbtype="video"
                                               class="play">
                                                <i class="material-icons">play_arrow</i>
                                            </a>
                                            <a href="<?php echo seo_movie($row['id'], $row['title']); ?>"
                                               class="read-more">Watch
                                                Now</a>
                                            <span class="date">Released: <?php echo date('Y-m-d', strtotime($row['release_date'])); ?></span>
                                        </div>
                                    </aside>
                                    <a href="<?php echo seo_tv($row['id'], $row['title']); ?>">
                                        <img src="<?php echo $row['poster_path']; ?>"
                                             alt="<?php echo $row['title']; ?>">
                                </div>
                                <div class="fa fa-star">
                                    <span itemprop="ratingValue"><?php echo $row['vote_average']; ?></span>/<span
                                            itemprop="bestRating">10</span> by <span
                                            itemprop="ratingCount"><?php echo $row['vote_count']; ?></span> users
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
</div>
<div class="section" id="content" style=" margin-top: 32px; padding: 32px; border-radius: 32px 32px 0px 0px ; background: #0D0D25">
    <div class="row">
        <div class="col-sm-12">
            <h2 style="color: white">MORE MOVIES</h2>
            <div class="row">
                <?php
                if (empty($_GET['page'])) {
                    $page = 1;
                } else {
                    $page = $_GET['page'];
                }
                $Movies = unserialize(ocim_data_movie('home_m_', $page, 'getNowPlayingMovies'));
                if (is_array($Movies['result'])):
                    foreach ((array)array_slice($Movies['result'], 10, 20) as $row) {
                        ?>
                        <div class="col-md-15 col-xs-6 margin-bottom-20">
                            <a href="<?php echo seo_movie($row['id'], $row['title']); ?>" class="list-movie"
                               tabindex="-1">
                                <div class="overlay"></div>
                                <img src="<?php echo $row['poster_path']; ?>" class="img-movie"
                                     alt="<?php echo $row['title']; ?>">
                                <div class="atribut-movie">
			<span class="label label-primary label-like label-black-transparant">
				<?php echo $vote_count; ?> Like
			</span>

                                    <span class="label label-primary label-rate" style="float: right!important;">
				<i class="fa fa-star"></i>
				<?php echo $row['vote_average']; ?>			</span>
                                    <h5 class="no-underline text-title"><?php echo $row['title']; ?><br>

                                        <small class="text-white">
                                            <?php echo date('d M Y', strtotime($row['release_date'])); ?></small>
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
<?php include('footer.php'); ?>