<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G-silver V13
| -------------------------------------------------------------------------------
*/
$owl = true;
include('header.php');?>
<?php include('head.php'); ?>
		<link href="<?php echo site_url()?>/assets/css/video-js.css" rel="stylesheet">
	<script src="<?php echo site_url()?>/assets/css/videojs-ie8.min.js"></script>
	<script src="<?php echo site_url()?>/assets/css/video.js"></script>
	<script src="<?php echo site_url()?>/assets/css/resolution-switcher.js"></script>
	<link href="<?php echo site_url()?>/assets/css/resolution-switcher.css" rel="stylesheet">
	<link href="<?php echo site_url()?>/assets/css/videojs-overlay.css" rel="stylesheet">
	<script src="<?php echo site_url()?>/assets/css/videojs-overlay.min.js"></script>  
	<script src="<?php echo site_url()?>/assets/css/videojs.disableProgress.js"></script>

<div class="row justify-content-center border-bottom " align="center" style="background: url('https://paperlief.com/images/plain-blue-background-wallpaper-3.jpg')top left no-repeat; background-size:cover; background-opacity:0.8">
		<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-12  p10" style="">
			
			 
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
            var pausetime = 10; // stop at 10 seconds 
            myPlayer.on('timeupdate', function(e) {
                if (myPlayer.currentTime() >= pausetime) {
                    myPlayer.pause();
                    $('#player-modal').modal({show: true, backdrop: 'static'});
                    
                    myPlayer.exitFullscreen();
                }
            });
            myPlayer.disableProgress({
                autoDisable: true
            });            
            
</script>
	
			
		</div>
		
		
	</div>
			<div id="modal-offer" data-domain="#" data-campaign="" data-movie="354912" data-title="<?php echo $title;?>" class="modal fade pointer" onclick="window.location.href='request';">
			<div class="modal-dialog">
				<div id="login" class="modal-content">
					<div class="top-content" style="background-image:url(<?php echo $images;?>)">
						<p class="text-center top"><?php echo $title;?></p>
						<p class="text-center bottom">Released Date: <?php echo date('M d, Y', strtotime($release_date));?></p>
					</div>
					<div class="bottom-content">
						<img class="img-responsive" src="<?php style_theme() ?>/images/offer.jpg" width="614" height="275">
						<p class="text-center"><span class="btn btn-offer btn-danger btn-lg" data-title="<?php echo $title;?>">Register Free Account</span></p>
					</div>
				</div>
			</div>
		</div>
<div style="min-height:500px !important">
   <script>
      function showreport(){
      	$('#modal_report').modal('show'); 
      }
      function cancel_report(){ $('#modal_report').modal('hide'); }
   </script>
   <div class="modal fade" id="modal_report" role="dialog">
      <div class="modal-dialog" style="margin-top: 30px;">
         <div class="modal-content">
            <div class="modal-header header_background" style="border-color:#041c2c">
               <span class="modal-title">Report This Movies If Not Found</span>
               <button type="button" class="close" data-dismiss="modal">x</button>
            </div>
            <div class="modal-body" id="isi_report" style="background: #041c2c; border-color:#041c2c;">
               <form method="post" enctype="multipart/form-data"> 
                  <input type="hidden" class="" name="id_movies" value="515" placeholder=""/>
                  <span> Title Movies </span> 
                  <input type="text" required readonly  style="background: rgba(0,0,0,0.3); color:white !Important; color:white !important; border:1px solid black;" class="form-control" value="<?php echo $title;?>" placeholder=""    />
                  <br />
                  <span> Report </span> 
                  <textarea type="text" required style="background: rgba(0,0,0,0.3); color:white !Important; color:white !important; border:1px solid black;" class="form-control" name="text" value="" ></textarea>
                  <br />
                  <br />
                  <button type="submit" class="btn btn-danger" name="report" >Report This Movies</button>  
                  <br />
               </form>
            </div>
         </div>
      </div>
   </div>
   <div class="row justify-content-center border-bottom "  >
      <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 col-12   p20 ">
         <div class="header_background p5 fs16" align="center" style="border-radius:3px 3px 0px 0px !important ">
            <?php echo $genre;?>			
         </div>
         <img src="<?php echo $images_small;?>" class="responsive" />
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-12 p20">
         <div class="" style="padding-top:20px;">
            <form method="post" enctype="multipart/form-data">
               <h4> <?php echo $title;?></h4>
               <div class="fs16">
                  <?php echo $genre;?>	| <?php echo date('Y', strtotime($release_date));?> 
                  <a class="badge badge-secondary" style="margin-left: 10px;padding:3px; padding-left:10px; padding-right:10px;  color:black !important; border-radius:10px; background: gainsboro; " > <time itemprop="duration" datetime="PT<?php echo $runtime;?>M"><?php echo $runtime;?> Min</time> </a> 
                  <a class="badge badge-secondary" style="margin-left: 10px;padding:3px; padding-left:10px; padding-right:10px;  color:black !important; border-radius:10px; background: gainsboro;text-transform:uppercase " > en es</a> 
                  <br />
                  <i class="fa fa-star" style="color:gold; font-size : 12px;">  </i>  
                  <i class="fa fa-star" style="color:gold; font-size : 12px;">  </i>  
                  <i class="fa fa-star" style="color:gold; font-size : 12px;">  </i>  
                  <i class="fa fa-star" style="color:gold; font-size : 12px;">  </i>  
                  <i class="fa fa-star" style="color:gold; font-size : 12px;">  </i>  
                  <span style="font-size : 12px;"> (<?php echo $row['vote_count'];?>) </span> 
                  <span style="font-size : 12px;"> Rating (<?php echo $row['vote_average'];?>) </span> 
                  <br />
                  <div class="pt-10">
                     <a class="btn btn-outline-primary btn-sm radius-lg color-white" data-toggle="modal" data-target="#trailer" style="margin-top: 10px; width : 40%;	"  > Season List </a> 
                     <a onclick="wish('515')" class="btn btn-outline-primary btn-sm radius-lg color-white" style="margin-top: 10px; width : 40%;	"  > + Wishlist </a> 
                  </div>
                  <div class="a2a_kit a2a_kit_size_32 a2a_default_style" style="padding: 5px;">
                     <a class="a2a_dd" href="https://www.addtoany.com/share"></a>
                     <a class="a2a_button_facebook"></a>
                     <a class="a2a_button_twitter"></a>
                     <a class="a2a_button_google_plus"></a>
                  </div>
                  <script async src="https://static.addtoany.com/menu/page.js"></script>
                  <div class="pt-10">
                     <span class="more"> 
                     <?php echo short($description);?>... <a onclick="less()" style="color:lightblue !important;" > More </a> 					
                     </span> 
                     <span class="less"> 
                     <?php echo $description;?> <a class="" onclick="more()" style="color:lightblue !important;"> Less </a> 					
                     </span> 
                     <script>  
                        $('.less').hide();
                        function less(){
                        	$('.more').hide();
                        	$('.less').show();
                        }
                        function more(){
                        	$('.less').hide();
                        	$('.more').show();
                        }
                     </script> 
                  </div>
                  <br />
                  <div class="pt-10">
                     <a data-toggle="modal" data-target="#reg_form" href="#reg_form" class="btn btn-primary radius-lg color-white" style="min-width : 100px; width : 40%;" >Watch Later</a>
                     <a href="/download" class="btn btn-primary radius-lg color-white" style="min-width : 100px; width : 40%;" >Download Now</a>
                  </div>
               </div>
            </form>
         </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 col-12 p0" >
         <img src="<?php echo $images;?>" class="responsive" />
         <div class="absolute he-all wi-all "  style="background:linear-gradient(90deg,#051c2b 2%,transparent 750px); top:0px !Important; left:0px !Important;">
         </div>
      </div>
   </div>
   <div class="border-bottom p10">
      <div class="container ">
         <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 col-12   p10 ">
               <div class="p10 bold-600" style="padding-left:0px !Important;">
                  Detail
               </div>
               <style>
                  table *{border-color:rgba(0,0,0,0.9) !Important}
                  table th{background: rgba(0,0,0,0.6) !important; width : 150px;}
                  table td,table th{padding:5px !important; font-size : 14px; padding-left:10px !important;}
               </style>
               <table class="table table-bordered" style="margin:0px !important; ">
                  <tbody>
                     <tr>
                        <th> Title </th>
                        <td> <?php echo $title;?> </td>
                     </tr>
                     <tr>
                        <th> Release Date </th>
                        <td> <meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo date('M d, Y', strtotime($release_date));?> </td>
                     </tr>
                     <tr>
                        <th> Last Air Date </th>
                        <td> <meta itemprop="datePublished" content="<?php echo $last_air_date;?>"><?php echo date('M d, Y', strtotime($last_air_date));?> </td>
                     </tr>
                     <tr>
                        <th> Genres </th>
                        <td> <?php echo $genre;?> </td>
                     </tr>
                     <tr>
                        <th> Number of Season </th>
                        <td> <?php echo $number_of_seasons;?> </td>
                     </tr>
                     <tr>
                        <th> Number of Episode </th>
                        <td> <?php echo $number_of_episodes;?> </td>
                     </tr>
                     <tr>
                        <th> Network </th>
                        <td> <?php echo $networks;?> </td>
                     </tr>
                     <tr>
                        <th> Casts </th>
                        <td> <?php echo $cast;?> </td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
   <div class="" style="border-bottom:1px solid #00314e; padding-top:20px; padding-bottom:20px;">
      <div class="container p10">
         <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p10">
               <div class="p10 bold-600" style="padding-left:0px !Important;">
                  Cast & Crew
               </div>
               <div class="crew owl-carousel owl-theme">
			   <?php 
                                if (is_array($row['credits']['cast'])) {
                                foreach($row['credits']['cast'] as $castrow) :
     	     	                        if ($castrow['profile_path']!=null)
     	     	                        {
             	     	                        $profile_path = 'https://image.tmdb.org/t/p/original' . $castrow['profile_path'];
     	     	                        } else {
             	     	                        $profile_path = site_theme().'/images/no-cover.png';
     	     	                        }
                                        ?>
                  <div class="item item-page" style="z-index:999999;" align="center">
                     <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p0 ">
                           <img src="<?php echo $profile_path;?>" class="responsive" /> 
                           <div style="" class="p10 fs14" align="left">
                              <?php echo $castrow['character'];?> <br />
                              <small> <?php echo $castrow['name'];?></small>  
                           </div>
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
      </div>
   </div>
   <script>  
      $('.crew').owlCarousel({ 
          items:2,
          nav:true, 
      	margin:10,
          responsive:{
              600:{
                  items:8
              }
          }
      });
   </script> 
   <div class="border-bottom">
      <div class="container" style="padding-bottom:20px;padding-top:20px;">
         <div class="row ">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p10 ">
               <a class="fs20"> Review </a>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 review owl-carousel owl-theme">
               <div class="p10 item " style="background: rgba(0,0,0,0.2)">
                  <a class="" > <?php echo $title;?> </a> <br />
                  <div class="fs-12">
                     <?php echo $row['overview'];?>
                  </div>
               </div>
               <div class="p10 item " style="background: rgba(0,0,0,0.2)">
                  <a class="" > cabji </a> <br />
                  <div class="fs-12">
                      
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <script>  
      $('.review').owlCarousel({ 
          items:1,
          nav:true, 
      	margin:10,
          responsive:{
              600:{
                  items:1
              }
          }
      });
   </script> 	 
   <div class="" style="border-bottom:1px solid #00314e; padding-top:20px; padding-bottom:20px;">
      <div class="container p10">
         <div class="p10 bold-600" style="padding-left:0px !Important;">
            Season List
         </div>
         <div class="products owl-carousel owl-theme">
		 <?php 
            if (is_array($row['seasons'])) {
            foreach((array)$row['seasons'] as $for) :
                if (empty($for['air_date'])) {
                    continue;
                }
                if ($for['poster_path']) {
                    $poster_path = 'https://image.tmdb.org/t/p/original'.$for['poster_path'];
                }else{
                    $poster_path = site_theme().'/images/no-cover.png';
                }
                ?>
            <div class="item item-page" style="z-index:999999;" align="center">
               <div  align="center" class="header_background p5 fs-12"style="border-radius:3px 3px 0px 0px !important ">
                  Season <?php echo $for['season_number'];?>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p0 ">
                     <img src="<?php echo $poster_path;?>" class="responsive" /> 
                     <div class="page-detail p10 fs12" align="left">
                        <a class="fs12" > Title :  <?php echo $row['name'];?></a> <br>
                        Episode : <?php echo $for['episode_count'];?> Episodes <br>
                        Release : <?php echo date('d-m-Y', strtotime( $for['air_date'] ) );?>
                        <a href="<?php echo seo_tv($id.'-'.$for['season_number'].'',$row['name']);?>" class="btn btn-danger absolute bottom form-control left"  > See Detail </a>
                     </div>
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
      <div class="" style="border-bottom:1px solid #00314e; padding-top:20px; padding-bottom:20px;">
      <div class="container p10">
	  <?php 
            if (is_array($row2['episodes'])) {
                ?>
         <div class="p10 bold-600" style="padding-left:0px !Important;">
            Episode List
         </div>
         <div class="products owl-carousel owl-theme">
		 <?php
                        foreach((array)$row2['episodes'] as $eps) :
                            if ($eps[still_path]) {
                                $still_path = 'https://image.tmdb.org/t/p/original'.$eps[still_path];
                            }else{
                                $still_path = site_theme().'/images/no-backdrop.png';
                            }
                            ?>
            <div class="item item-page" style="z-index:999999;" align="center">
               <div  align="center" class="header_background p5 fs-12"style="border-radius:3px 3px 0px 0px !important ">
                  Episode <?php echo $eps['episode_number'];?>
               </div>
               <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 col-12 p0 ">
                     <img src="<?php echo $poster_path;?>" class="responsive" /> 
                     <div class="page-detail p10 fs12" align="left">
                        <a class="fs12" > Title :  <?php echo $row['name'];?></a> <br>
                        Episode Name : <?php echo $eps['name'];?> <br>
                        Release : <?php echo date('d-m-Y', strtotime( $eps['air_date'] ) );?>
                        <a href="<?php echo seo_tv($id.'-'.$eps['season_number'].'-'.$eps['episode_number'],$row['name']);?>" class="btn btn-danger absolute bottom form-control left"  > See Detail </a>
                     </div>
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
</div>
<style>
   @media(max-width:500px){
   .centermobile{text-align:center !important;}
   }
</style>
<!-- Trailer -->
<div id="trailer" class="modal fade" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
	           <div class="modal-header">
            <h4 class="modal-title" style="color:black;font-style: normal;font:center;"><?php echo $title;?> Season List</h4>
         </div>
         <div class="modal-body">
			<?php 
            if (is_array($row['seasons'])) {
            foreach((array)$row['seasons'] as $for) :
                if (empty($for['air_date'])) {
                    continue;
                }
                if ($for['poster_path']) {
                    $poster_path = 'https://image.tmdb.org/t/p/original'.$for['poster_path'];
                }else{
                    $poster_path = site_theme().'/images/no-cover.png';
                }
                ?>
				<a href="<?php echo seo_tv($id.'-'.$for['season_number'].'',$row['name']);?>" class="btn btn-primary" style="padding: 5px;
    margin: 5px;"> Season <?php echo $for['season_number'];?> </a>
				<?php 
                endforeach;
            }
            ?>
         </div>
      </div>
   </div>
</div>
<div class="modal animated bounceIn" id="modal-login" tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-attention"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">PLEASE SIGN UP TO WATCH <?php echo $title ?></h4> </div><div class="modal-body clearfix"><style>
.modal-body {
    position: relative;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1rem;
    background-color: #aed5ff;
}</style> <div class="row"> <div class="col-md-6" id="login"> <img class="img-responsive" src="<?php echo $w780; ?>"> <hr> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-attention" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="submov" class="btn btn-danger" value="Log me in"> </div><div class="col-md-6"> <ul class="list-group"> <li class="list-group-item"> <h4 class="list-group-item-heading">High Quality Movies</h4> <p class="list-group-item-text">All of the Movies are available in the superior HD Quality or even higher!</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch Without Limits</h4> <p class="list-group-item-text">You will get access to all of your favourite the Movies without any limits.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">100% Free Advertising</h4> <p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p></li><li class="list-group-item"> <h4 class="list-group-item-heading">Watch anytime, anywhere</h4> <p class="list-group-item-text">It works on your TV, PC, or MAC!</p></li></ul> </div></div></div><div class="modal-footer bg-attention"> <a class="btn btn-danger" href="/?action=register">Sign Up For Free</a> </div></div></div></div>
<style>.bg-warning {
    background-color: #007bc4!important;
    background-color: rgba(0,123,255,.25);
}</style><div class="modal animated bounceIn" id="reg_form" tabindex="-1" role="dialog" aria-labelledby="reg_form" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix" style="color: black;"> <div class="modal-header bg-warning"> <h4 class="modal-title" id="myModalLabel">Register Free Account!</h4> </div><div class="modal-body clearfix"> <div class="col-md-6" id="login"> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-success" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="subreg" class="btn btn-success" value="Log me in"> </div><div class="col-md-6"> <h5>Member Benefits</h5> <ol> <li>Watch as many movies you want!</li><li>Secure and no restrictions!</li><li>Stream movies in HD quality!</li><li>It works on your TV, PC or MAC!</li></ol> <button class="btn btn-primary backcolor" onclick="window.location.href='/?action=register'">Register Here!</button> </div></div><div class="modal-footer bg-warning"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div></div></div></div>


<style>.bg-warning {
   background-color: #007bc4!important;
   background-color: rgba(0,123,255,.25);
   }
</style>
<div id="player-modal" class="modal fade nocontext" aria-hidden="true">
   <div class="modal-dialog">
      <div class="modal-content clearfix" style="color: black;">
         <div class="modal-header bg-warning">
            <h4 class="modal-title" id="myModalLabel">Register Free Account!</h4>
         </div>
         <div class="modal-body clearfix">
            <div class="col-md-6" id="login">
               <h5>Member Login</h5>
               <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div>
               <div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div>
               <div class="form-group"> <span class="onload label label-success" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div>
               <input type="submit" id="subreg" class="btn btn-success" value="Log me in"> 
            </div>
            <div class="col-md-6">
               <h5>Member Benefits</h5>
               <ol>
                  <li>Watch as many movies you want!</li>
                  <li>Secure and no restrictions!</li>
                  <li>Stream movies in HD quality!</li>
                  <li>It works on your TV, PC or MAC!</li>
               </ol>
               <button class="btn btn-primary backcolor" onclick="window.location.href='/?action=register'">Register Here!</button> 
            </div>
         </div>
         <div class="modal-footer bg-warning"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div>
      </div>
   </div>
</div>
<?php include('footer.php'); ?>