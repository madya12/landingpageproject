<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
include('header.php');
$newquery = bad_words( get_search_query() );
?>
    <!-- Page Header -->
    <div class="page-header" style="  background-image: url(<?php style_theme() ?>/assets/images/bg/page-header.png);
  background-position: center center;
  background-size: cover; ">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">Search Result for "<?php echo $newquery;?>"</h2>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="main-wrap">
        <div class="section section-padding video-list-section">
            <div class="container">
                <div class="row">
                    <div class="show-listing">
                     <div class="releases" style="margin-top: -10px;"><h1><i class="fa fa-film"></i> Movies</h1></div>
					 <?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 12) as $row ) {
                ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="<?php echo $row['poster_path'];?>" alt="Play <?php echo $row['title'];?>">
                                    <span class="rating"><?php echo $row['vote_average'];?></span>
                                    <div class="thumb-hover">
                                        <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>" title="Play <?php echo $row['title'];?>"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-details">
                                    <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h4>
                                    <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></p>
                                </div>
                            </div>
                        </div>
                        <?php 
                }
        else:
            $unserialize = unserialize( ocim_search(limit_word($newquery, 3), limit_word($newquery, 3).'_search') );
            if( is_array($unserialize['result']) ):
                foreach ( (array) $unserialize['result'] as $sect) {
                ?>
				<div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="<?php echo $sect['poster_path'];?>" alt="Play <?php echo $sect['title'];?>">
                                    <span class="rating"><?php echo $sect['vote_average'];?></span>
                                    <div class="thumb-hover">
                                        <a class="play-video" href="<?php echo seo_movie($sect['id'],$sect['title']);?>" title="Play <?php echo $sect['title'];?>"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-details">
                                    <h4 class="video-title"><a href="<?php echo seo_movie($sect['id'],$sect['title']);?>" title="<?php echo $sect['title'];?>"><?php echo $sect['title'];?></a></h4>
                                    <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $sect['release_date'] ) );?></p>
                                </div>
                            </div>
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
                    </div>
                </div>
            </div>
        </div>
		<?php if (config('tvdb_search') == "true"): ?>
<div class="main-wrap">
        <div class="section section-padding video-list-section">
            <div class="container">
                <div class="row">
                    <div class="show-listing">
                     		<div class="releases" style="margin-top: -10px;"><h1><i class="fa fa-film"></i> TV Shows</h1></div>
					 <?php
                $tvdb  = new Tvdb(options('tvdb_api'));
                $serie = $tvdb->search($newquery);
                $count = 0;
                ?>
                <?php if (!empty($serie)): ?>
                <?php foreach ($serie as $tv): ?>
                <?php $_seri = $tvdb->seriesEpisode($tv->id)['serie'] ?>
                        <div class="col-md-3 col-sm-4 col-xs-6">
                            <div class="video-item">
                                <div class="thumb-wrap">
                                    <img src="<?php echo $tvdb->poster($_seri->poster) ?>" alt="Play <?php echo $tv->name ?>">
                                    <span class="rating"><?php echo $_seri->rating;?></span>
                                    <div class="thumb-hover">
                                        <a class="play-video" href="<?php seo_serie($tv->id) ?>" title="Play <?php echo $tv->name ?>"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="video-details">
                                    <h4 class="video-title"><a href="<?php seo_serie($tv->id) ?>" title="<?php echo $tv->name ?>"><?php echo $tv->name ?></a></h4>
                                    <p class="video-release-on"><?php echo format_tanggal( $_seri->firstAired );?></p>
                                </div>
                            </div>
                        </div>
						<?php endforeach ?>
                <?php else: ?>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2><i class="fa fa-exclamation"></i> No TV Show Found for this search</h2>
                        </div>
                    </div>
                </div>
                <?php endif ?>
				<?php else: ?>
				<?php 
                            $TV = unserialize( ocim_data_search_tv(limit_word($newquery, 3),$page) );
                            if( is_array($TV['result']) ):
                                foreach ( (array) array_slice($TV['result'], 0, 12) as $row ) {
                                    ?>
				<div class="col-md-3 col-sm-4 col-xs-6">
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
                                    <p class="video-release-on"><?php echo date('Y-m-d', strtotime( $row['release_date'] ) );?></p>
                                </div>
                            </div>
                        </div>
						<?php 
                                } 
                                else:
                                    ?>
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h2><i class="fa fa-exclamation"></i> No TV Show Found for this search</h2>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <?php
                                endif;
                                ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
							<?php endif ?>

<?php include('footer.php'); ?>