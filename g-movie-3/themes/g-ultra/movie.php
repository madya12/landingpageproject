<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G12
| -------------------------------------------------------------------------------
*/
$owl = true;
include('header.php');?>
    <div class="contents">
        <div class="container menu-responsive content-responsive">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
    <div class="single">
        <!-- <div id="video-player">
            <div class="">
                <div id="magelo-player">
                    <div class="embed-responsive embed-responsive-16by9">

                        <iframe id="intro" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?hd=1&amp;autoplay=0&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;modestbranding=0" data-duration="23000" frameborder="0">
                        </iframe>

                        <div id="cover-top">
                        </div>
                        <div id="cover-bottom">
                        </div>
                        <video id="videoPlayer"  class="embed-responsive-item" preload="none" poster="<?php style_theme();?>/images/no-backdrop.png">
                            <p>Your browser doesn't support HTML5 video.</p>
                        </video>

                        <span class="play-wrapper ease">
                            <span id="play" class="fa fa-youtube-play ease">
                            </span>
                        </span>
                        <div class="media-controls">
                            <div id="leftControls">
                                <button type="button" name="Play" class="btn glyphicon glyphicon-play" id="play_btn">
                                </button>
                                <button id="volumeInc_btn" name="Volume" class="btn glyphicon glyphicon-volume-up">
                                </button>
                                <button id="timeContainer" class="btn">0:00:<span class="timer">00</span>
                                </button>
                            </div>

                            <div id="progressContainer">
                                <span id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-count="0.387931034483%">
                                </span>
                            </div>
                            <div id="rightControls">
                                <div id="sliderContainer">
                                    <div id="slider" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
                                        <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 50%;">
                                        </div>
                                        <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="bottom: 50%;">
                                        </span>
                                    </div>
                                </div>
                                <div id="setting_btn" class="btn-group dropup">
                                    <button name="Setting" class="btn glyphicon glyphicon-cog dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="glyphicon glyphicon-hd-video">
                                        </span>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li class="hq active">HD 1080p</li>
                                        <li class="hq">HD 720p</li>
                                    </ul>
                                </div>
                                <button id="fullscreen_btn" name="Fullscreen" class="btn glyphicon glyphicon-resize-full">
                                </button>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div> -->
        <div id="video" class="wrapper">
            <div id="player" onmouseover="playHover()" onmouseout="playHover()">
                <div class="player-container">
                    <div class="movie-loading" style="z-index: 999; background: transparent; position: absolute; width: 100%; margin: auto; top:0px; bottom: 0px; left: 0px; right: 0px;">
                        <div class="movie-loader" ></div>
                    </div>
                    <div class="iframe" style="position: relative; width: 100%;">
                        <iframe style="width: 100%;" id="intro" class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?hd=1&amp;rel=0&amp;controls=0&amp;showinfo=0&amp;modestbranding=0" allow="accelerometer; autoplay; data-duration="23000" frameborder="0">
                        </iframe>
                        <div class="loading111" style="background-image:url(<?php style_theme();?>/images/preloader4.gif); background-repeat: no-repeat; display: none; position: absolute; margin: auto; top: 20%; right: 0; bottom: 0; left: 45%; width: 100%; height: 160px;"></div>
                        <div class="register111" style="display: none;">
                            <div class="nregister" style="line-height: 1; font-weight:normal; text-align: center; color: #fff; font-weight: bold; z-index:9999; position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 100%; height: 160px;"><div class="nregister-wrapper"><div><i class="fa fa-warning" style="font-size: 50px; color: #eeb211; margin: 0;"></i><div class="oops" style="color: #c00;">Oops!</div></div><div class="oops-wrapper" style="padding-top: 5px; line-height: initial; font-size: initial;"><div><div style="font-weight:normal;">You must create a <a id="register" class="oops-target" href="/?action=register&s2=<?php echo $title;?>" style="color: #09c; cursor: pointer; font-weight:normal;">Free Account</a></div><div style="font-weight:normal;">in order to STREAM or DOWNLOAD this movie</di></div></div><a id="regplay" href="/?action=register&s2=<?php echo $title;?>" style="background:orange; border-radius:5px; text-align:center; padding-top:10px; padding-bottom:10px; margin-top:20px; font-size:16px; padding-left:50px; padding-right:50px; -webkit-transition: all 0.2s ease-in-out; -o-transition: all 0.2s -ms-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out; text-decoration: none; color: #fff;"><i class="fa fa-plus" style="color: #fff; font-size: 20px; margin-right: 10px;"></i>Create FREE Account</a></div></div>            
                        </div>
                    </div>
                    <div class="black" style="background: rgba(0, 0, 0, 0.94); width: 100%; height: 650px; z-index: 1; top: 0px; position: absolute; display: none;"></div>
                    <a id="play" class="bigplay image-cover ui-link" onclick="playClick()" style="width: 100%; overflow: hidden; display: block; position: absolute; z-index: 9;">
                       <img class="impl" itemprop="image" src="<?php echo $images;?>" width="1280" alt="<?php echo $title;?>">
                   </a>
                   <a id="playnow" onclick="playClick()">
                    <i id="playnow1" class="fa fa-play"></i>
                </a>
                <a href="" onclick="playClick()">
                    <span class="shadow"></span>
                </a>
            </div>

        </div>
                <div id="controls" style="z-index: 9999;">
         <div class="controls-wraper">
            <div class="cplay">
               <span id="play-icon" class="play" onclick="playClick()"><i class="fa fa-play"></i></span>
               <span id="pause-icon" class="play" style="display: none;" onclick="pauseClick()"><i id="pause-icon" class="fa fa-pause" ></i></span>
           </div>
           <div class="volume"><i class="fa fa-volume-up"></i></div>
           <div class="duration"><span class="dmax"><span class="dmax"><?php echo convertToHoursMins($runtime);?></span></div>
           <div class="progress"><span class="marquee"><marquee><?php echo $title;?>.hd.1080p</marquee></span></div>
           <div class="fullscreen"><i class="fa fa-arrows-alt"></i></div>
           <div class="quality"><i class="fa fa-cog"></i><span class="hd">HD</span></div>
           <div class="clear"></div>
       </div>
   </div>
</div>
</div>


</div><!-- .col-md-12 -->
</div><!-- .single -->

<div class="col-md-12 col-sm-12 col-xs-12">
        <div class="panel panel-body">

                <?php if( options('468x60') ):?>
                        <div class="iklan" align="center" style="margin-bottom: 15px;"><?php echo options('468x60');?></div>
                <?php endif;?>
                    <div class="poster-wrap hidden-xs hidden-sm">
                            <img itemprop="image" class="impo poster_path img-responsive" src="<?php echo $images_small;?>" width="150" height="225" alt="<?php echo $title;?>">
                            <div class="rating-star" title="<?php echo $get_rating;?> out of 10 stars" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"><?php for($k=1;$k<=$get_rating;$k++){?><i class="fa fa-star"></i><?php }?><?php for($i=$emp_rating;$i>=1;$i--){?><i class="fa fa-star-o"></i><?php $k++; } ?><div class="movie-rating"><span itemprop="ratingValue"><?php echo $get_rating;?></span>/<span itemprop="bestRating">10</span> by <span itemprop="ratingCount"><?php echo $vote_count;?></span> users</div>
                            </div>

                    </div>
                <table class="movie-detail"><tbody>
                        <tr><td colspan="3" class="storyline"><p itemprop="description"><?php echo $description;?></p></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-calendar"></i>Release Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo date('M d, Y', strtotime($release_date));?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-clock-o"></i>Runtime</td><td>:</td><td><time itemprop="duration" datetime="PT<?php echo $runtime;?>M"><?php echo $runtime;?> minutes</time></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-folder-open"></i>Genres</td><td>:</td><td><?php echo $genre;?></td></tr>
                        <tr class="hidden-xs"><td class="tdtitle"><i class="fa fa-suitcase"></i>Production Company</td><td>:</td><td><?php echo $companies;?></td></tr>
                        <tr class="hidden-xs"><td class="tdtitle"><i class="fa fa-globe"></i>Production Countries</td><td>:</td><td><?php echo $country;?></td></tr>
                        <tr><td class="tdtitle"><i class="fa fa-users"></i>Casts</td><td>:</td><td><?php echo $cast;?></td></tr>
                         <tr <?php echo $keywords == '' ? 'hidden' : '' ?>><td class="tdtitle"><i class="fa fa-tags"></i>Plot Keywords</td><td>:</td><td><?php echo $keywords;?></td></tr>
                </tbody></table>
                 <div class="text-center"><div class="btn-group btn-group-lg" style="padding: 15px;"><a href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d" class="btn btn-primary btn-responsive"><span class="glyphicon glyphicon-play"></span> Watch Now</a><a href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d" class="btn btn-primary btn-responsive"><span class="glyphicon glyphicon-save"></span> Download</a></div></div>
                <div class="clearfix"></div>
                
                <!-- Comment -->

<div class="panel-footer">
			                 <div class="row">
                          <div id="fbFeedbackContent">
                            <p align="right">
                            <strong>72 Comments </strong> <a class="#" data-toggle="modal" data-target="#modal-watch"><i class="#"></i>Comment Here</a></p><hr> 
                            <p></p> 
                            <ul>
                              <li>
                                <a class="image">
                                <img class="img" src="<?php style_theme() ?>/include/images/Zack.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Zack Ramos-Taylor</a> <span></span>
                                <p>Amazing review for an amazing movie. Well done, thanks for all these The Maze Runner Movie Finally I get this, I can get now!</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 127</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 1 hour ago </div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="<?php style_theme() ?>/include/images/Briana.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Briana Kelm</a> <span></span>
                                <p>I was suspicious at first when I got redirected to the membership site. Now I'm really excited I found this online movie streaming....many thanks Kisses</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 96</a> Â· <a>Like</a> <a>Follow</a> 1 hour ago</div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="<?php style_theme() ?>/include/images/Cierra.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Cierra Peterson</a>
                                <p>I did not think that this would work, my best friend showed me this website, and it does! I get The Maze Runner full movie</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 85</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 1 hour ago</div>
                                </div>
                                <ul>
                                  <li>
                                    <a class="image">
                                    <img class="img" src="<?php style_theme() ?>/include/images/Katie.jpg" alt="">
                                    </a>
                                    <div class="postContainer">
                                    <a href="#">Katie Baldwin</a>
                                    <p>I found out about this website from the IMDB and I'm very happy about it: â€œAfter Become Member from this site, I have Awesome offers music, games, TV shows, movies and e-books through its service.â€ </p>
                                    <div class="bottom">
                                    <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 5</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 48  minutes ago</div>
                                    </div>
                                  </li>
                                </ul>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="<?php style_theme() ?>/include/images/Tylor.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Tylor Pelzer</a> <span></span>
                                <p>My friends are so mad that they do not know how I have all the high quality this Movie The Maze Runner which they do not!</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 63</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 3 hour ago </div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="<?php style_theme() ?>/include/images/Roger.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Roger Torres</a> <span></span>
                                <p>Enjoy it for High Quality Movie. Great service.</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 55</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 3 hour ago </div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="<?php style_theme() ?>/include/images/Callum.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Callum Webb</a> <span></span>
                                <p>hahahahaha</p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 42</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 5 hour ago </div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="<?php style_theme() ?>/include/images/Muncy.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Elizabeth Muncy</a> <span></span>
                                <p>so many fake sites. this is the first one which worked! Many thanks </p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 39</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 6 hour ago</div>
                                </div>
                              </li>
                              <li>
                                <a class="image">
                                <img class="img" src="<?php style_theme() ?>/include/images/Wagner.jpg" alt="">
                                </a>
                                <div class="postContainer">
                                <a href="#">Frankie Wagner</a> <span></span>
                                <p>wtffff i do not understand this! </p>
                                <div class="bottom">
                                <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 6</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 8 hour ago </div>
                                </div>
                                <ul>
                                  <li>
                                    <a class="image">
                                    <img class="img" src="<?php style_theme() ?>/include/images/Jay.jpg" alt="">
                                    </a>
                                    <div class="postContainer">
                                    <a href="#">Jay Rodriguez</a>
                                    <p>Just click on the download, watch now or start a free trial buttons and create an account. It only takes 5 minutes to start your one month trial, and after you can download not just this Movie but many others ;)</p>
                                    <div class="bottom">
                                    <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 17</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 8 hour ago</div>
                                    </div>                                    
                                  </li><li>
                                    <a class="image">
                                    <img class="img" src="<?php style_theme() ?>/include/images/Allen.jpg" alt="">
                                    </a>
                                    <div class="postContainer">
                                    <a href="#">Raven Allen</a>
                                    <p>lol it did not even take me 5 minutes at all! XD</p>
                                    <div class="bottom">
                                    <a onclick="JavaScript:alert('You must create an account before commenting.')">Reply</a> Â· <a class="like"><i></i> 13</a> Â· <a>Like</a> Â· <a>Follow</a> Â· 8 hour ago</div>
                                    </div>
                                  </li>                                    
                                  
                                </ul>
                              </li>
                            </ul>
                          </div>
                      </div>
                      
                          <div class="row">
                          <center>                        
                          <br> 
                          <center><h5><font color="green"><strong>Click the button below to register a free account and download the file</strong></font></h5></center>
                      <br>
<div class="btn btn-lg">
<a class="btn btn-primary btn-lg" target="_blank" href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d"><i class="fa fa-cloud-download"></i> REGISTER NOW</a>

</div>
                          </center><br>
						  <center><p>DISCLAIMER: "We cannot guarantee the availability of this TV Series on an external site."</p></center>
                        </div>  




	
    </div>
<!-- Comment End -->
        </div>
        <?php 
        if (is_array($row['similar_movies']['results']) && count($row['similar_movies']['results'])>0) {
        ?>
            <div class="panel panel-body">
                <h3 class="heading"><i class="fa fa-film"></i> Related Movies <span class="hidden-xs">for "<?php echo $title;?> (<?php echo $year;?>)"</span></h3>
                <div class="clearfix"></div>
                    <div class="row">
                        <div id="owl-similar" class="owl-carousel">
                            <?php
                            foreach((array) array_slice($row['similar_movies']['results'], 0, 18) as $similar) :
                            if ($similar['poster_path']) {
                                $backdrop_path = 'https://image.tmdb.org/t/p/w300'.$similar['poster_path'];
                            }else{
                                $backdrop_path = site_theme().'/images/no-cover.png';
                            }
                            ?>
                            <div class="item">
                            <a href="<?php echo seo_movie($similar['id'],$similar['title']);?>" title="<?php echo $similar['title'];?>" rel="bookmark" itemprop="url">
                            <img class="lazyOwl img-responsive similar_poster" data-src="<?php echo $backdrop_path;?>" alt="<?php echo $similar['title'];?>" title="<?php echo $similar['title'];?>">
                            </a>
                            </div>
                            <?php 
                                endforeach;
                            ?>
                        </div>
                    </div>
                </div>

            <?php 
        }
        ?>
        </div>

<?php include('footer.php'); ?>

<!-- Trailer -->
<div id="trailer" class="modal fade" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 class="modal-title">Watch Trailer <?php echo $title;?></h4></div><div class="modal-body"><div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="//www.youtube.com/embed/<?php echo $row['trailers']['youtube'][0]['source'];?>?rel=0&amp;modestbranding=1&amp;autoplay=0&amp;autohide=1&amp;showsuccess=1&amp;controls=0" onload="this.scrolling='no';this.allowfullscreen='true';" style="overflow:hidden;border:0;" scrolling="no"></iframe></div></div></div></div></div>