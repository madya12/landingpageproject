<?php

$hack_title = 'Top Rated Movies';
$hack_description = 'Highest-rated movies based on votes by ' . site_path() . ' users';
get_header(); ?>
    <!-- Page Header -->
    <div class="page-header" style="  background-image: url(<?php style_theme() ?>/assets/images/bg/page-header.png);
            background-position: center center;
            background-size: cover; ">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">Top Rated Movies</h2>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="main-wrap">
        <div class="section section-padding video-list-section">
            <div class="container">
                <div class="row">
                    <div class="show-listing">

                        <?php
                        if (empty($_GET['page'])) {
                            $page = 1;
                        } else {
                            $page = $_GET['page'];
                        }
                        $Movies = unserialize(ocim_data_movie('home_movie_toprated_', $page, 'getTopRatedMovies'));
                        if (is_array($Movies['result'])):
                            foreach ((array)array_slice($Movies['result'], 0, 20) as $row) {
                                ?>
                                <div class="col-md-3 col-sm-4 col-xs-6">
                                    <div class="video-item">
                                        <div class="thumb-wrap">
                                            <img src="<?php echo $row['poster_path']; ?>"
                                                 alt="Play <?php echo $row['title']; ?>">
                                            <span class="rating"><?php echo $row['vote_average']; ?></span>
                                            <div class="thumb-hover">
                                                <a class="play-video"
                                                   href="<?php echo seo_movie($row['id'], $row['title']); ?>"
                                                   title="Play <?php echo $row['title']; ?>"><i class="fa fa-play"></i></a>
                                            </div>
                                        </div>
                                        <div class="video-details">
                                            <h4 class="video-title"><a
                                                        href="<?php echo seo_movie($row['id'], $row['title']); ?>"
                                                        title="<?php echo $row['title']; ?>"><?php echo $row['title']; ?></a>
                                            </h4>
                                            <p class="video-release-on"><?php echo date('Y-m-d', strtotime($row['release_date'])); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        endif;
                        ?>


                        <div class="col-xs-12">
                            <!-- Video Pagination -->
                            <nav class="navigation pagination" role="navigation">
                                <div class="nav-links">
                                    <?php
                                    if ($Movies['total_results'][0] > 19) :
                                        require_once(DOCUMENT_ROOT . '/app/class/CSSPagination.class.php');

                                        if ($Movies['total_results'][0] > 1000) :
                                            $totalResults = 1000;
                                        else:
                                            $totalResults = $Movies['total_results'][0];
                                        endif;
                                        $limit = 20;
                                        $link = "/?do=movie-toprated";
                                        $pagination = new CSSPagination($totalResults, $limit, $link); // create instance object
                                        $pagination->setPage($_GET['page']); // dont change it
                                        echo $pagination->showPage();
                                    endif;
                                    ?>
                                </div>
                            </nav>
                            <!-- Video Pagination End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); ?>