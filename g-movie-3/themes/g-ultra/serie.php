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
    <h6 class="entry-title ellip"><span itemprop="name" class="visible-xs"><?php echo $judul;?></span></h6>
    <div class="single">
        <div id="player-area">
   <link href="<?php echo site_url()?>/assets/css/video-js.css" rel="stylesheet">
   <script src="<?php echo site_url()?>/assets/css/videojs-ie8.min.js"></script>
   <script src="<?php echo site_url()?>/assets/css/video.js"></script>
   <script src="<?php echo site_url()?>/assets/css/resolution-switcher.js"></script>
   <link href="<?php echo site_url()?>/assets/css/resolution-switcher.css" rel="stylesheet">
   <link href="<?php echo site_url()?>/assets/css/videojs-overlay.css" rel="stylesheet">
   <script src="<?php echo site_url()?>/assets/css/videojs-overlay.min.js"></script>  
   <script src="<?php echo site_url()?>/assets/css/videojs.disableProgress.js"></script>
   <div id="player">
      <span class="player-cover"></span>

         <div id="player">
            <div class="embed-responsive embed-responsive-16by9">
               <video id="my-video" class="video-js vjs-16-9 vjs-big-play-centered" controls="" preload="auto" width="600" height="315" poster="<?php echo $images;?>" data-setup="">
                  <source src="https://github.com/galihsophian/galihsophian.github.io/blob/master/Series.mp4?raw=true" type="video/mp4" label="SD">
                  <source src="https://github.com/galihsophian/galihsophian.github.io/blob/master/Series.mp4?raw=true" type="video/mp4" label="HD">
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
                  var pausetime = 9; // stop at 9 seconds 
                  myPlayer.on('timeupdate', function(e) {
                      if (myPlayer.currentTime() >= pausetime) {
                          myPlayer.pause();
                          $('#modal-login').modal({show: true, backdrop: 'static'});
                          
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
</div>

</div><!-- .col-md-12 -->

<div class="col-md-12 col-sm-12 col-xs-12">
    <div class="row">
        <div class="panel panel-body" style="padding-top: 20px;">
            
        <div class="poster-wrap hidden-xs">
	        <img itemprop="image" class="img-responsive" onerror="posterError(this)" src="<?php echo $poster;?>" style="width: 150px;" alt="<?php echo $judul;?>">
            <div class="rating-star" title="<?php echo $rating;?> out of 10 stars" itemprop="aggregateRating" itemscope itemtype="https://schema.org/AggregateRating"><?php for($k=1;$k<=$rating;$k++){?><i class="fa fa-star"></i><?php }?><?php for($i=$emp_rating;$i>=1;$i--){?><i class="fa fa-star-o"></i><?php $k++; } ?>
                <div class="movie-rating"><span itemprop="ratingValue"><?php echo $rating;?></span>/<span itemprop="bestRating">10</span> by <span itemprop="ratingCount"><?php echo $vote_count;?></span> users
                </div>
            </div>
        </div>

        <table class="movie-detail">
            <tbody>
                <tr><td colspan="3" class="storyline"><p itemprop="description"><?php echo $description;?></p></td></tr>
                <tr><td class="tdtitle" width="10"><i class="fa fa-film"></i>Title</td><td width="10">:</td><td><?php echo $judul;?></td></tr>
                <tr <?php echo $episode_name == '' ? 'hidden' : '' ?>><td class="tdtitle" width="10"><i class="fa fa-check"></i>Episode Title</td><td>:</td><td><?php echo $episode_name;?></td></tr>
                <tr <?php echo $release_date == '' ? 'hidden' : '' ?>><td class="tdtitle"><i class="fa fa-calendar"></i>Release Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo $release_date?></td></tr>
                <tr <?php echo $season == '' ? 'hidden' : '' ?>><td class="tdtitle"><i class="fa fa-clock-o"></i>Runtime</td><td>:</td><td><time itemprop="duration" datetime="PT<?php echo $time;?>M"><?php echo $time;?> minutes</time></td></tr>
                <tr <?php echo $season != '' ? 'hidden' : '' ?>><td class="tdtitle"><i class="fa fa-calendar"></i>First Air Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $first_aired;?>"><?php echo $first_aired?></td></tr>
                <tr <?php echo $episode != '' ? 'hidden' : '' ?>><td class="tdtitle"><i class="fa fa-calendar-o"></i>Last Air Date</td><td>:</td><td><meta itemprop="datePublished" content="<?php echo $last_aired;?>"><?php echo $last_aired?></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-folder-open"></i>Genres</td><td>:</td><td><?php echo $genres;?></td></tr>
                <tr><td class="tdtitle"><i class="fa fa-globe"></i>Networks</td><td>:</td><td><?php echo $networks;?></td></tr>
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
    <div class="releases"><h1 style="color: #f29e37; border: 5px solid #0500040a; background: #000000a6;"><span>Episode List</span></h1></div>
            <table class="table table-bordered table-striped" style="background-color: #000000a3; width: 100%; overflow: hidden; padding-top: 15px;">
        	<thead>
        		<tr>
        			<th width="5">Season</th>
        			<th width="5">Episode</th>
        			<th width="250">Episode Title</th>
        			<th width="100">Release Date</th>
        			<th width="100">Download Link</th>
        		</tr>
        	</thead>
        	<tbody>
    		<?php foreach ( $episodes as $epi ): ?>
    			<tr>
    				<td><?php echo $epi->season ?></td>
    				<td><?php echo $epi->number ?></td>
    				<td><?php link_tvdb($tvid,$epi->season, $epi->number,$tvdb->episode_name($epi->name, $epi->number)) ?></td>
    				<td><?php echo $tvdb->date($epi->firstAired) ?></td>
    				<td><a class="btn btn-danger btn-sm btn-block" data-toggle="modal" data-target="#modal-login" href="#/<?php echo $judul . '.mp4' ?>">
									<i class="fa fa-cloud-download"></i> Download Link
								</a>
					</td>
    			</tr>
    		<?php endforeach ?>
        	</tbody>
        </table>
		
                    </div>
        </div>
    </div>
</div>
</div>
</div>
</div><!-- row -->
<?php include('footer.php'); ?>
<div class="modal animated bounceIn" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-info"> <button type="button" ><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH <?php echo $judul;?> Full Episode</h4> </div><div class="modal-body clearfix"> <div class="row"> <div class="col-md-6" id="login"> <img class="img-responsive" src="<?php echo $images;?>"> <hr> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-info" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="submov" class="btn btn-success" value="Log me in"> </div><div class="col-md-6"> <ul class="list-group"> <li class="list-group-item"> <h4 class="list-group-item-heading">High Quality Video</h4> <p class="list-group-item-text">All of the Video are available in the superior HD Quality or even higher!</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch Without Limits</h4> <p class="list-group-item-text">You will get access to all of your favourite the Video without any limits.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">100% Free Advertising</h4> <p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch anytime, anywhere</h4> <p class="list-group-item-text">It works on your TV, PC, or MAC!</p></li></ul> </div></div></div><div class="modal-footer bg-info"> <a class="btn btn-danger" href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d">Sign Up For Free</a> </div></div></div></div>
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
        $(".fa-<?php echo $judul;?>s-alt").click(function() {
            screenfull.request(document.getElementById("player"));
            $(this).toggleClass("fa-<?php echo $judul;?>s-alt fa-compress")
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