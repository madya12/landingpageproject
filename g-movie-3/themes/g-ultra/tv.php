<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G12
| -------------------------------------------------------------------------------
*/
include('header.php');?>
    <div class="contents">
        <div class="container menu-responsive content-responsive">
            <div class="row"><div class="col-md-12 col-sm-12 col-xs-12">
    <h6 class="entry-title ellip"><span itemprop="name" class="visible-xs"><?php echo $title;?></span></h6>
    <div class="single">
<!--         <div id="player">
            <header class="entry-header">
                <h3 class="entry-title ellip"><span itemprop="name" class="hidden-xs"><?php echo $title;?></span></h3>
            </header>
            <div class="player-container">
                <img class="impl img-responsive" src="<?php echo $images;?>" onerror="imgError(this)" width="1280" height="720" alt="<?php echo $title;?>">
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
                    <div class="duration"><span class="dmax">00:00:00</span> / <span class="dmax">00:45:14</span></div>
                    <div class="progress"><span class=""><span class="progressbar"></span></span></div>
                    <div class="fullscreen"><i class="fa fa-<?php echo $title;?>s-alt"></i></div>
                    <div class="quality"><i class="fa fa-cog"></i><span class="hd">HD</span></div>
                </div>
            </div>
        </div> -->
        <div id="video" class="wrapper">
            <div id="player" onmouseover="playHover()" onmouseout="playHover()">
                <div class="player-container">
                    <div class="movie-loading">
                        <div class="movie-loader"></div>
                    </div>
                    <div class="loading111" style="background-image:url(<?php style_theme();?>/images/preloader4.gif); z-index: 9999; background-repeat: no-repeat; display: none; position: absolute; margin: auto; top: 20%; right: 0; bottom: 0; left: 45%; width: 100%; height: 160px;"></div>
                    <div class="register111" style="display: none;">
                        <div class="nregister" style="line-height: 1; font-weight:normal; text-align: center; color: #fff; font-weight: bold; z-index:9999; position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 100%; height: 160px;"><div class="nregister-wrapper"><div><i class="fa fa-warning" style="font-size: 50px; color: #eeb211; margin: 0;"></i><div class="oops" style="color: #c00;">Oops!</div></div><div class="oops-wrapper" style="padding-top: 5px; line-height: initial; font-size: initial;"><div><div style="font-weight:normal;">You must create a <a id="register" class="oops-target" href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d" style="color: #09c; cursor: pointer; font-weight:normal;">Free Account</a></div><div style="font-weight:normal;">in order to STREAM or DOWNLOAD this movie</di></div></div><a id="regplay" href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d" style="background:orange; border-radius:5px; text-align:center; padding-top:10px; padding-bottom:10px; margin-top:20px; font-size:16px; padding-left:50px; padding-right:50px; -webkit-transition: all 0.2s ease-in-out; -o-transition: all 0.2s -ms-transition: all 0.2s ease-in-out; transition: all 0.2s ease-in-out; text-decoration: none; color: #fff;"><i class="fa fa-plus" style="color: #fff; font-size: 20px; margin-right: 10px;"></i>Create FREE Account</a></div></div>            
                    </div>
                </div>
                <div class="black" style="background: black; width: 100%;  display: none;"></div>
                <a id="fregister" class="bigplay image-cover ui-link" onclick="playClick()">
                    <img class="impl" itemprop="image" onload="playerLoad()" src="<?php echo $images;?>" width="1280"  alt="<?php echo $title;?>">
                    <a id="playnow" onclick="playClick()">
                        <i id="playnow1" class="fa fa-play"></i>
                    </a>
                    <a href="" onclick="playClick()">
                        <span class="shadow"></span>
                    </a>
                </a>
            </div>

            <div id="controls">
                <div class="controls-wraper">
                    <div class="cplay">
                        <span class="play" onclick="playClick()"><i class="fa fa-play"></i></span>
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
</div>

</div><!-- .col-md-12 -->

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="panel panel-body" style="padding-top: 20px;">
            
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
            <!-- <div class="row" style="margin-top:25px;" width="50%">
                <center><div class="available-formats-img-mobile"><img src="<?php style_theme();?>/images/shadow.png" class="img-4khd"> </div></center>
            </div> -->
            <div class="row hidden-xs" style="margin-top:25px;">
                <div class="text-center" ><div class="btn-group btn-group-lg" style="padding: 15px;"><a href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d" class="btn btn-primary btn-responsive"><span class="glyphicon glyphicon-play"></span> Watch Now</a><a href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d" class="btn btn-primary btn-responsive"><span class="glyphicon glyphicon-save"></span> Download</a></div></div>

            </div>
            <div class="row visible-xs" style="margin-top:25px;">
              <center>
                <tr>
                  <td class="text-center"><div class="btn btn-primary btn-lg btn-responsive" data-toggle="modal" data-target="#modal-login"> <i class="fa fa-cloud-download"></i> Download</div> <a class="btn btn-danger btn-lg btn-responsive" href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d"><i class="fa fa-youtube-play"></i> Watch Now </a></td>
              </tr>
          </center>
      </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="releases"><h1 style="color: #f29e37; border: 5px solid #0500040a; background: #000000a6;"><span>Season List</span></h1></div>
    <div style="background-color: #000000a3; width: 100%; overflow: hidden; padding-top: 15px;">
                        <?php 
            if (is_array($row['seasons'])) {
            foreach((array)$row['seasons'] as $for) :
                if (empty($for['air_date'])) {
                    continue;
                }
                if ($for['poster_path']) {
                    $poster_path = 'https://image.tmdb.org/t/p/w185'.$for['poster_path'];
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
		
                    </div>
					<?php 
            if (is_array($row2['episodes'])) {
                ?>
                    <div class="releases"><h1 style="color: #f29e37; border: 5px solid #0500040a; background: #000000a6;"><span>Episode List <?php echo $row2['name'];?></span></h1></div>
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
        <!-- Comment -->
        <div class="clearfix"></div>
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
            <div class="clearfix"><br><br></div>
<!-- Comment End -->
    </div>
</div>
</div>
</div>

</div><!-- row -->
</div><!-- container -->

<?php include('footer.php'); ?>
<div class="modal animated bounceIn" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-info"> <button><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH <?php echo $title;?> Full Episode</h4> </div><div class="modal-body clearfix"> <div class="row"> <div class="col-md-6" id="login"> <img class="img-responsive" src="https://image.tmdb.org/t/p/original/w8hLUAmKSDBIYMkAQwsTIpgqUvS.jpg"> <hr> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-info" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="submov" class="btn btn-success" value="Log me in"> </div><div class="col-md-6"> <ul class="list-group"> <li class="list-group-item"> <h4 class="list-group-item-heading">High Quality Video</h4> <p class="list-group-item-text">All of the Video are available in the superior HD Quality or even higher!</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch Without Limits</h4> <p class="list-group-item-text">You will get access to all of your favourite the Video without any limits.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">100% Free Advertising</h4> <p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch anytime, anywhere</h4> <p class="list-group-item-text">It works on your TV, PC, or MAC!</p></li></ul> </div></div></div><div class="modal-footer bg-info"> <a class="btn btn-danger" href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d">Sign Up For Free</a> </div></div></div></div>
<script type="text/javascript">
    $.mobile.ajaxEnabled = false;

    function playClick() {
        $(".movie-loading, .movie-loader").show();
        $("#fregister").hide();
        $("#playnow1").hide();
        $(".black").show();
        $(".loading111").show();
        setTimeout(function() {
            $(".loading111").hide();
        }, 3500)



        $("#playnow .fa-youtube-play").css("visibility", "hidden");
        setTimeout(function() {
            $(".movie-loader").hide();
            $(".register111").show();
        }, 3500)
    }

    function playerLoad() {
        if ($("#player").length) {
            $(".movie-loading").show();
            setTimeout(function() {
                $(".movie-loader").show()
            }, 1000);
            $("span#playnow").css("visibility", "visible");
            $(".movie-loading").hide()
        }
    }

    function playHover() {
        $(".entry-title").toggleClass("active")
    }

    function regplayClick() {  
        var searchParams = new URLSearchParams(window.location.search);
        window.location.replace("/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d");
    }

    function playLoad() {
        $(".movie-loading").hide();
        $(".fa-arrows-alt").click(function() {
            screenfull.request(document.getElementById("player"));
            $(this).toggleClass("fa-arrows-alt fa-compress")
        });
        $("a#playnow,.play,i.fa.fa-compress").click(function() {
            screenfull.exit()
        });
        $(".inline").colorbox({
            inline: true,
            width: "40%"
        })
    }

    function playClear() {
        $("#player").load(function() {})
    }

    function secondsTimeSpanToHMS(c) {
        var b = Math.floor(c / 3600);
        c -= b * 3600;
        var a = Math.floor(c / 60);
        c -= a * 60;
        return b + ":" + (a < 10 ? "0" + a : a) + ":" + (c < 10 ? "0" + c : c)
    };

    $(document).ready(function() {
        $("a.login-window").click(function() {
            $(".login-popup").fadeIn(300);
            $(".blackhole").fadeIn(300);
            return false
        });
        $("a.close").click(function() {
            $(".login-popup, .blackhole").fadeOut(300);
            return false
        });
        $("#formsubmit").click(function() {
            $(".onerror").fadeOut("fast");
            $(".onload").fadeIn().delay(3e3);
            $(".onload").fadeOut("fast");
            setTimeout(function() {
                $(".onerror").fadeIn("fast");
                $("#formuser, #formpass").val("");
                $("#formuser").focus()
            }, 3500)
        })
    })
</script>