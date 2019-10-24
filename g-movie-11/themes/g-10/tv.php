<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
include('header.php');?>
<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="single">
        <div id="player">
        <header class="entry-header">
            <h3 class="entry-title ellip"><span itemprop="name"><?php echo $title;?></span></h3>
        </header>
        <div class="player-container">
            <img class="impl img-responsive" src="<?php echo $images;?>" width="1280" height="720" alt="<?php echo $title;?>">
            <span class="mpaa">HD</span>
            <div class="inline play-button registration">
                <span class="player-loader" style="display: none;"></span>
                <i class="fa fa-youtube-play" style="visibility: visible;"></i>
            </div>
        </div>
        <div id="controls">
            <div class="controls-wraper">
                <div class="cplay"><a class="play inline cboxElement"><i class="fa fa-play"></i></a></div>
                <div class="cvolu"><div class="volume"><i class="fa fa-volume-up"></i></div>
                <div id="ivol" class="ui-slider-horizontal" aria-disabled="false"><div class="ui-widget-header"></div><a class="ui-slider-handle" href="#" style="left: 34.3434343434343%;"></a></div></div>
                <div class="duration"><span class="dmax">00:00:00</span> / <span class="dmax"><?php echo $runtime;?></span></div>
                <div class="progress"><span class=""><span class="progressbar"></span></span></div>
                <div class="fullscreen"><i class="fa fa-arrows-alt"></i></div>
                <div class="quality"><i class="fa fa-cog"></i><span class="hd">HD</span></div>
            </div>
        </div>
    </div>
    <div class="row" style="margin-top:25px;" width="50%">
        <center><div class="available-formats-img-mobile"><img src="<?php echo site_theme() ?>/images/shadow.png" class="img-4khd"> </div></center>
    </div>
    <div class="row hidden-xs" style="margin-top:25px;">
        <div class="text-center" ><div class="btn-group btn-group-lg" style="padding: 15px;"><button class="btn btn-success btn-responsive" data-toggle="modal" data-target="#modal-login" data-backdrop="static"><span class="glyphicon glyphicon-play"></span> Watch Now</button><button class="btn btn-success btn-responsive" data-toggle="modal" data-target="#modal-login" data-backdrop="static"><span class="glyphicon glyphicon-save"></span> Download</button></div></div>

    </div>
    <div class="row visible-xs" style="margin-top:25px;">
        <center>
            <tr>
                <td class="text-center"><div class="btn btn-success btn-lg btn-responsive" data-toggle="modal" data-target="#modal-login"> <i class="fa fa-cloud-download"></i> Download</div> <a class="btn btn-danger btn-lg btn-responsive" href="<?php echo site_url() ?>/?action=register"><i class="fa fa-youtube-play"></i> Watch Now </a></td>
            </tr>
        </center>
    </div>
</div><!-- .col-md-12 -->

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="panel panel-body">
        <?php if( options('468x60') ):?>
            <div class="iklan" align="center" style="margin-bottom: 15px;"><?php echo options('468x60');?></div>
        <?php endif;?>

        <div class="poster-wrap hidden-xs">
            <img itemprop="image" class="impo img-responsive" src="<?php echo $images_small;?>" width="150" height="225" alt="<?php echo $title;?>">
            <div class="rating-star" title="<?php echo $get_rating;?> out of 10 stars" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"><?php for($k=1;$k<=$get_rating;$k++){?><i class="fa fa-star"></i><?php }?><?php for($i=$emp_rating;$i>=1;$i--){?><i class="fa fa-star-o"></i><?php $k++; } ?>
                <div class="movie-rating"><span itemprop="ratingValue"><?php echo $get_rating;?></span>/<span itemprop="bestRating">10</span> by <span itemprop="ratingCount"><?php echo $vote_count;?></span> users
                </div>
            </div>
        </div>

        <table class="movie-detail">
            <tbody>
                <tr><td colspan="3" class="storyline"><p itemprop="description"><?php echo $description;?></p></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-suitcase"></i>Title</td><td>:</td><td><?php echo $row['name'];?></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-calendar"></i>First Air Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $first_air_date;?>"><?php echo date('M d, Y', strtotime($first_air_date));?></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-calendar-o"></i>Last Air Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $last_air_date;?>"><?php echo date('M d, Y', strtotime($last_air_date));?></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-certificate"></i>Number of Episodes</td><td>:</td><td><?php echo $number_of_episodes;?></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-certificate"></i>Number of Seasons</td><td>:</td><td><?php echo $number_of_seasons;?></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-folder-open"></i>Genres</td><td>:</td><td><?php echo $genre;?></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-globe"></i>Networks</td><td>:</td><td><?php echo $networks;?></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-users"></i>Casts</td><td>:</td><td><?php echo $cast;?></td></tr>
                <tr <?php echo $alternative_titles == '' ? 'hidden' : '' ?>><td class="tdtitle"><i class="fa fa-tags"></i>Alternative Titles</td><td>:</td><td><?php echo $alternative_titles;?></td></tr>
                <tr <?php echo $keywords == '' ? 'hidden' : '' ?>><td class="tdtitle"><i class="fa fa-tags"></i>Plot Keywords</td><td>:</td><td><?php echo $keywords;?></td></tr>
            </tbody>
        </table>
        
        <div class="clearfix"></div>
            <div class="row">
            <h3 class="heading text-center"><i class="fa fa-bars"></i> Season List</h3>
            <?php 
            if (is_array($row['seasons'])) {
            foreach((array)$row['seasons'] as $for) :
                if (empty($for['air_date'])) {
                    continue;
                }
                if ($for[poster_path]) {
                    $poster_path = 'https://image.tmdb.org/t/p/w185'.$for[poster_path];
                }else{
                    $poster_path = site_theme().'/images/no-cover.png';
                }
                ?>
                <div class="col-lg-2 col-md-3 col-sm-3 col-xs-6" itemscope itemtype="https://schema.org/TVSeries">
                    <div class="row">
                        <figure class="gallery-list">
                            <a href="<?php echo seo_tv($id.'-'.$for['season_number'],$row['name']);?>" title="<?php echo $title;?>" rel="bookmark" itemprop="url">
                                <img class="img-responsive poster_path" itemprop="image" src="<?php echo $poster_path;?>" alt="<?php echo $title;?> Season <?php echo $for['season_number'];?>" title="<?php echo $title;?>">
                                <div class="movie-list-title">
                                    <div class="vote_count"><?php echo $for['episode_count'];?> episode</div>
                                    <h4 itemprop="name">Season <?php echo $for['season_number'];?></h4>
                                </div>
                            </a>
                        </figure>
                        <div class="movie-list-success">
                            <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime( $for['air_date'] ) );?></div>
                            <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $for['air_date'] ) );?>" />
                        </div>
                    </div>

                </div>
                <?php 
                endforeach;
            }
            ?>
            </div>
            <div class="clearfix"></div>
            <?php 
            if (is_array($row2['episodes'])) {
                ?>
                    <h3 class="text-center clearfix heading"><i class="fa fa-bars"></i> Episode List <?php echo $row2['name'];?></h3>
                    <div class="clearfix"></div>
                        <?php
                        foreach((array)$row2['episodes'] as $eps) :
                            if ($eps[still_path]) {
                                $still_path = 'https://image.tmdb.org/t/p/w300'.$eps[still_path];
                            }else{
                                $still_path = site_theme().'/images/no-backdrop.png';
                            }
                            ?>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" itemscope itemtype="https://schema.org/TVSeries">
                                <div class="row">
                                    <figure class="gallery-list">
                                        <a href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$row['name']);?>" title="<?php echo $title;?>" rel="bookmark" itemprop="url">
                                            <img class="img-responsive backdrop_path" itemprop="image" src="<?php echo $still_path;?>" alt="<?php echo $row['name'];?> Season <?php echo $eps['season_number'];?> : <?php echo $eps['name'];?>" title="<?php echo $row['name'];?> Season <?php echo $eps['season_number'];?> : <?php echo $eps['name'];?>">
                                            <div class="movie-list-title">
                                                <div class="vote_count">Episode <?php echo $eps['episode_number'];?></div>
                                                <h4 itemprop="name" style="font-size: 14px;"><?php echo $eps['name'];?></h4>
                                            </div>
                                        </a>
                                    </figure>
                                    <div class="movie-list-success">
                                        <div class="movie-list-date" itemprop="name"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', strtotime( $eps['air_date'] ) );?></div>
                                        <meta itemprop="datePublished" content="<?php echo date('Y-m-d', strtotime( $eps['air_date'] ) );?>" />
                                    </div>
                                </div>
                            </div>
                            <?php 
                            endforeach;
                        }
                        ?>
                    </div>
                </div>
        </div>
        <?php include('footer.php'); ?>

 <div class="modal animated bounceIn" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-success"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH <?php echo $title ?> Full Episode</h4> </div><div class="modal-body clearfix"> <div class="row"> <div class="col-md-6" id="login"> <img class="img-responsive" src="<?php echo $w600; ?>"> <hr> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-success" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="submov" class="btn btn-success" value="Log me in"> </div><div class="col-md-6"> <ul class="list-group"> <li class="list-group-item"> <h4 class="list-group-item-heading">High Quality Video</h4> <p class="list-group-item-text">All of the Video are available in the superior HD Quality or even higher!</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch Without Limits</h4> <p class="list-group-item-text">You will get access to all of your favourite the Video without any limits.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">100% Free Advertising</h4> <p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch anytime, anywhere</h4> <p class="list-group-item-text">It works on your TV, PC, or MAC!</p></li></ul> </div></div></div><div class="modal-footer bg-success"> <a class="btn btn-danger" href="/?action=register">Sign Up For Free</a> </div></div></div></div>