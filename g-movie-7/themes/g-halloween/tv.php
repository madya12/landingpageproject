<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
include('header.php');?>
<body>




    <div class="header-pad"></div>

    <div id="main" class="page-detail">
        <div class="container">
            <div class="pad"></div>
            <div class="main-content main-detail">
                <div id="bread">
                    <ol class="breadcrumb">
                        <li><a href="<?php echo site_url() ?>">Home</a></li>
                        <li><a href="<?php echo $row['id'];?>"><?php echo $row['name'];?></a></li>
                        <li><a href="<?php echo $row['id'];?>-<?php echo $row2['season_number'];?>">Season <?php echo $row2['season_number'];?></a></li>
                        <li class="active"><a href="<?php echo $row['id'];?>-<?php echo $row2['season_number'];?>-<?php echo $row3['episode_number'];?>">Episode <?php echo $row3['episode_number'];?> : <?php echo $row3['name'];?></a></li>
                    </ol>
                </div>


                <div id="mv-info">

                    <!-- Start Player -->
                    <div id="player-area">
                      <link href="<?php style_theme();?>/player/video-js.css" rel="stylesheet">
                      <script src="<?php style_theme();?>/player/videojs-ie8.min.js"></script>
                      <script src="<?php style_theme();?>/player/video.js"></script>
                      <script src="<?php style_theme();?>/player/resolution-switcher.js"></script>
                      <link href="<?php style_theme();?>/player/resolution-switcher.css" rel="stylesheet">
                      <link href="<?php style_theme();?>/player/videojs-overlay.css" rel="stylesheet">
                      <script src="<?php style_theme();?>/player/videojs-overlay.min.js"></script>  
                      <script src="<?php style_theme();?>/player/videojs.disableProgress.js"></script>
                      <div id="player">
                         <span class="player-cover"></span>

                         <div id="player">
                            <div class="embed-responsive embed-responsive-16by9">
                               <video id="my-video" class="video-js vjs-16-9 vjs-big-play-centered" controls="" preload="auto" width="600" height="315" poster="<?php echo $images;?>" data-setup="">
                                  <source src="<?php echo $selectedBg; ?>" type="video/mp4" label="SD">
                                      <source src="<?php echo $selectedBg; ?>" type="video/mp4" label="HD">
                                          <track kind="subtitles" src="" srclang="en" label="English">
                                              <track kind="subtitles" src="" srclang="en" label="French">
                                                  <track kind="subtitles" src="" srclang="en" label="Germany">
                                                      <track kind="subtitles" src="" srclang="en" label="Netherland">
                                                          <track kind="subtitles" src="" srclang="en" label="Italy">
                                                              <track kind="subtitles" src="" srclang="en" label="Arabic">
                                                              </video>
                                                              <script>
                                                                videojs('my-video').videoJsResolutionSwitcher();
                                                                limitload = 0;
                                                            </script>
                                                            <script>
                                                                var myPlayer = videojs('my-video', {"fluid": true, ControlBar: {
                                                                    DurationDisplay: true}
                                                                });
            var pausetime = 8; // stop at 15 seconds 
            myPlayer.on('timeupdate', function(e) {
                if (myPlayer.currentTime() >= pausetime) {
                    myPlayer.pause();
                    $('#pop-login').modal({show: true, backdrop: 'static'});
                    
                    myPlayer.exitFullscreen();
                }
            });
            myPlayer.disableProgress({
                autoDisable: true
            });            
            
        </script>
    </div>
</div>

</div>

</div>
<!-- End of Player -->  
<style>
    /* General menu styling */
    .nav {
        position: relative;
        margin: 0;
        padding: 0;
        line-height: 22px;
    }
    /* The main navigation link containers */
    .nav>li {
        display: block;
        float: left; /* Displaying them on the same line */
        margin: 0;
        padding: 0;
    }


    /* The main navigation links */
    .nav>li>a {
        /* Layout */
        display: block;
        position: relative;
        padding: 10px 20px;
        /* Text */
        font-family: "Open Sans Condensed", Arial, Helvetica, sans-serif;
        color: #fff;
        font-size: 22px;
        text-decoration: none;
        /* Background */
        background: black; /* For older browsers */
        background: rgba(0, 0, 0, .6); /* Transparent background for modern browsers */
        /* Making the color to change on hover with a transition */
        -webkit-transition: color .3s ease-in;
        -moz-transition: color .3s ease-in;
        -o-transition: color .3s ease-in;
        -ms-transition: color .3s ease-in;
    }
    /* Changing the color on hover */
    .nav>li>a:hover, .nav>li:hover>a {
        color: #5DB550;
    }
    /* The links which contain dropdowns menu are wider, because they have a little arrow */
    .nav>.dropdown>a {
        padding: 10px 30px 10px 20px;
    }
    /* The arrow indicating the dropdown */
    .dropdown>a::after {
        content:'\2022';
        position: absolute;
        top: 17px;
        right: 100px;
        width: 7px;
        height: 7px;
        -webkit-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        border-bottom: 1px solid #fff;
        border-right: 1px solid #fff;
    }
    /* Changing the color of the arrow on hover */	
    .dropdown>a:hover::after, .dropdown:hover>a::after {
        border-color: #5DB550;
    }
    /* The submenus */
    .nav ul {
        position: absolute;
        margin: 0;
        padding: 0;
        list-style: none;
        display: block;


    }
    /* General layout settings for the link containers of the submenus */
    .nav ul li {
        position: absolute;
        top: -9999px; /* Hiding them */
        height: 0px;
        display: block;
        margin: 0;
        padding: 0;
        /* Making them to expand their height with a transition, for a slide effect */
        -webkit-transition: height .2s ease-in;
        -moz-transition: height .2s ease-in;
        -o-transition: height .2s ease-in;
        -ms-transition: height .2s ease-in;
        z-index: 1;

        opacity: 0;
        visibility: hidden;
    }
    /* Displays the submenu links, by expading their containers (with a transition, previously defined) and by repositioning them */
    .dropdown>ul>li {
        height: 30px;
        position: relative;
        top: -128px;
        right: 70px;
        opacity: 1;
        visibility: visible;
    }
    .dropdown>ul>li.active{background-color:green;}
    /* The submenu links */
    .nav ul li a {
        /* Layout */
        padding: 4px 20px;
        width: 120px;
        display: block;
        position: relative;
        /* Text */
        font-family: "Open Sans Condensed", Arial, Helvetica, sans-serif;
        color: #bbb;
        text-decoration: none;
        font-size: 16px;
        /* Background & effects */
        background: black;

        background: rgba(0, 0, 0, .6);
        -webkit-transition: color .3s ease-in, background .3s ease-in;
        -moz-transition: color .3s ease-in, background .3s ease-in;
        -o-transition: color .3s ease-in, background .3s ease-in;
        -ms-transition: color .3s ease-in, background .3s ease-in;
    }
    /* Changing the link's color and background on hover */
    .nav ul li:hover>a, .nav ul li a:hover {  
      left: -10px;
      top: -0px;
      color: #fff;
      background-color:#D6D900;} 

      /* Making the level 2 (or higher) submenus to appear at the right of their parent */
      .nav ul .dropdown:hover ul {
        left: 160px;
        top: 0px;
    }
    /* The submenu links have a different arrow which indicates another dropdown submenu */
    .nav ul .dropdown a::after {
        width: 6px;
        height: 6px;
        border-bottom: 0;
        border-right: 1px solid #fff;
        border-top: 1px solid #fff;
        top: 12px;
    }
    /* Changing the color of the arrow on hover */
    .nav ul .dropdown:hover>a::after, .nav ul .dropdown>a:hover::after {
        border-right: 1px solid #0fd0f9;
        border-top: 1px solid #0fd0f9;
    } 

    .rotate{
        -moz-transition: all 0.4s linear;
        -webkit-transition: all 0.4s linear;
        transition: all 0.4s linear;
    }

    .rotate.down{
        -moz-transform:rotate(90deg);
        -webkit-transform:rotate(90deg);
        -moz-animation-duration:"0.2s",
        transform:rotate(90deg);
    }
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<div id="bar-player"> 
    <a href="#main"   class="btn bp-btn-light"><i class="fa fa-lightbulb-o"></i> <span></span></a> 
    <a class="btn bp-btn-like" onclick="#" data-target="#pop-login" data-toggle="modal"><i class="fa fa-heart"></i> Favorite</a>
    <a href="#commentfb" class="btn bp-btn-review"data-target="#pop-login" data-toggle="modal"><i class="fa fa-comments"></i>
        <span>Comment</span></a>
        <span class="bp-view"><i class="fa fa-eye mr10"></i><script type="text/javascript"> document.write(Math.floor(Math.random()*3000)); </script></span>

        <div class="clearfix"></div>
    </div>


    <div id="bar-player"> 
        <a class="btn bp-btn-like" onclick="#"  ><i class="fa fa-youtube-play"  ></i>PlayLists</a>
        <div class="clearfix"></div>  </div>
        <div id="list-eps">
          <div id="server-1" class="le-server server-active">
            <div class="les-title"><i class="fa fa-server mr5"></i><strong>Server 1</strong></div>
            <div class="les-content">
              <?php 
              if (is_array($row2['episodes'])) {
                ?>
                <?php
                foreach((array)$row2['episodes'] as $eps) :
                    if ($eps['still_path']) {
                        $still_path = 'https://image.tmdb.org/t/p/w300'.$eps['still_path'];
                    }else{
                        $still_path = site_theme().'/images/no-backdrop.png';
                    }
                    ?>
                    <a class="btn-eps" href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$row['name']);?>"> Episode <?php echo $eps['episode_number'];?> <?php echo $eps['name'];?></a>
                    <?php 
                endforeach;
            }
            ?>   

        </div>

        <div class="clearfix"></div>
    </div>
</div>
<div class="mvi-content">
    <div class="mvic-btn">
       <a href="register-free" target="_blank" class="btn btn-block btn-lg btn-success btn-01"><i class="fa fa-play mr10"></i>Stream in HD</a>
       <a href="register-free" target="_blank" class="btn btn-block btn-lg btn-success btn-02"><i class="fa fa-download mr10"></i>Download in HD</a>
       <a data-toggle="modal" data-target="#pop-login" href="#" class="btn btn-block btn-lg btn-default btn-03"><i class="fa fa-plus mr10"></i> Watchlist</a>

       <div class="clearfix"></div>
       <div class="mv-rating">


        <div id="movie-mark" class="btn btn-danger"><?php echo $row['vote_average'];?></div>
        <label id="movie-rating">Rating (<?php echo $row['vote_count'];?>)</label>
        <a data-toggle="modal" data-target="#pop-login" href="#"  >
            <input id="input-2c" name="rating"  movie-id="5322"  class="rating form-control hide" value="6.9" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005" data-glyphicon="false" data-rating-class="rating-fa" data-show-clear="false"> </a>
            <div class="clearfix"></div>
        </div>
        
        <!--        <a id="turnlight" class="btn btn-block btn-lg btn-default btn-04"><i class="fa fa-lightbulb-o mr10"></i> Turn off the light</a>-->
    </div>
    <div class="thumb mvic-thumb" style="background-image: url(<?php echo $images_small;?>);"></div>
    <div class="mvic-desc">
       <h3><?php echo $title;?></h3>

       <div class="block-trailer">

       </div>
       <div class="block-social">

           <!-- Place this social button. -->

       </div>
       <div class="desc">
        <?php echo $description;?> </div>
        <div class="mvic-info">
            <div class="mvici-left">
                <p>
                   <strong><a href="#" >Genre: </a></strong>
                   <?php echo $genre;?> </p> 

                   <p> <strong><a href="#" >Networks:</a></strong>
                    <?php echo $networks;?>  </p>
                    <p><strong><a href="#" >Release:</a></strong> <?php echo $first_air_date;?></p>
                    <p>
                       <strong><a href="#" >Status: </strong>

                        <a href="#" ><?php echo $status;?></a> </p>
                    </div>

                    <div class="mvici-right">
                        <p><strong><a href="#" >Episode:</a></strong> <?php echo $row3['episode_number'];?></p>
                        <p><strong><a href="#" >Quality:</a></strong> <span class="quality">HD</span></p>
                        <p><strong><a href="#" >Rating:</a></strong> <?php echo $get_rating;?></p>
                        <p><strong><a href="#" >Alternative Titles:</a></strong> <?php echo $alternative_titles;?></p>

                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div> 

    <div id="commentfb">
      <div class="les-content">







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
                <div class="jm-item second">
                   <div class="jm-item-wrapper">
                      <div class="jm-item-image">
                         <img src="<?php echo $poster_path;?>" width="115" height="175"/>
                         <div class="jm-item-description">

                             <div class="jm-item-button"> <a href="<?php echo seo_tv($id.'-'.$for['season_number'],$row['name']);?>"> View</a></div>
                         </div>
                     </div>
                     <div class="jm-item-title">Season : <?php echo $for['season_number'];?></div>
                 </div>
             </div>
             <?php 
         endforeach;
     }
     ?>




 </div>
</div> 


</div>
</div>
</div>

<div class="modal fade modal-cuz modal-trailer" id="pop-trailer" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

        </div>
    </div>
</div>

</div> 

<?php include('footer.php'); ?>