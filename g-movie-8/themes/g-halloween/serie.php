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
                    <li class="active"><a href="<?php seo_serie($tv->id) ?>" title="<?php echo $tv->name ?>"><?php echo $judul;?></a></li>
                </ol>
            </div>
           
          
           <div id="mv-info">
                              
    <!-- Start Player -->
            <div id="player">
                <div class="player-container">
                
                    <div class="player-loading"></div>
                    <div style="clear:both"></div>
                    <a href="#login" style="visibility: visible;" id="playnow" class="play inline cboxElement" data-toggle="modal" data-target="#pop-login" >

                         <span class="shadow"></span><img class="impl overlay" src="<?php echo $images;?>" alt="<?php echo $judul;?>">
                      
                    </a>
                     
                </div>
                 
               <div id="caption">  <div class="caption-wraper"><span class="jtitle"><?php echo $judul;?></span></div></div>
                <div id="controls">
                
                    <div class="controls-wraper">
                   
                        <div class="cplay">
                            <a class="play inline cboxElement" data-toggle="modal" data-target="#pop-login" href="#login"></a>
                        </div>
                         
                        <div class="duration">
                            <span class="dmin">00:00:00</span> 
                        </div>
                       <div class="cvolu">
											<div class="cvol"></div>
											<div id="ivol"></div>
										</div>
                        <div class="progress">
                             <span class="buffering">
                                <div class="cprog"></div>
                                <span class="progressbar"></span>
                            </span>
                        </div>
                        
                        <div class="fullscreen"></div>
                       <div class="qualitys">
              <ul class="nav">
                            <li class="dropdown"> <span class="hds rotate">HD</span> 
                            <ul>
 
	<li class="hq" ><a href="#"><span class="hds">HD</span> 720p</a><span></li>
 
	<li class="hq"><a href="#"><span class="hds">HD</span> 480p</a></li>
 
	<li class="hq"><a href="#"><span class="hds">&#8226;</span> 360p</a></li> 
	
	<li class="hq active"><a href="#"><span class="hds">&#8226;</span> Auto</a></li> 
	
 </ul></li></ul></div>
                         <div style="float: right; position: relative; right: 15px; top: 3.9px;" class="duration">
                            <span class="dmax"><?php echo $runtime;?></span>
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
                       
  <div class="mvi-content">
    <div class="mvic-btn">
 <a href="register-free" target="_blank" class="btn btn-block btn-lg btn-success btn-01"><i class="fa fa-play mr10"></i>Stream in HD</a>
  <a href="register-free" target="_blank" class="btn btn-block btn-lg btn-success btn-02"><i class="fa fa-download mr10"></i>Download in HD</a>
  <a data-toggle="modal" data-target="#pop-login" href="#" class="btn btn-block btn-lg btn-default btn-03"><i class="fa fa-plus mr10"></i> Watchlist</a>

 <div class="clearfix"></div>
  <div class="mv-rating">
 
 
<div id="movie-mark" class="btn btn-danger"><?php echo $rating;?></div>
<label id="movie-rating">Rating (<?php echo $vote_count;?>)</label>
<a data-toggle="modal" data-target="#pop-login" href="#"  >
<input id="input-2c" name="rating"  movie-id="5322"  class="rating form-control hide" value="6.9" min="0" max="5" step="0.5" data-size="sm" data-symbol="&#xf005" data-glyphicon="false" data-rating-class="rating-fa" data-show-clear="false"> </a>
                       <div class="clearfix"></div>
        </div>
        
        <!--        <a id="turnlight" class="btn btn-block btn-lg btn-default btn-04"><i class="fa fa-lightbulb-o mr10"></i> Turn off the light</a>-->
    </div>
    <div class="thumb mvic-thumb" style="background-image: url(<?php echo $images_small;?>);"></div>
    <div class="mvic-desc">
         <h3><?php echo $judul;?></h3>

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
<?php echo $genres;?> </p> 
                                                 
 <p> <strong><a href="#" >Networks:</a></strong>
<?php echo $networks;?>  </p>
  <p <?php echo $release_date == '' ? 'hidden' : '' ?>><strong><a href="#" >Release:</a></strong> <meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo $release_date?></p>
<p>
 </div>
                            
            <div class="mvici-right">
<p <?php echo $release_date == '' ? 'hidden' : '' ?>><strong><a href="#" >Release Date:</a></strong> <meta itemprop="datePublished" content="<?php echo $release_date;?>"><?php echo $release_date?></p>
<p><strong><a href="#" >Quality:</a></strong> <span class="quality">HD</span></p>
<p><strong><a href="#" >Rating:</a></strong> <?php echo $rating;?></p>
<p <?php echo $season == '' ? 'hidden' : '' ?>><strong><a href="#" >Runtime:</a></strong> <time itemprop="duration" datetime="PT<?php echo $time;?>M"><?php echo $time;?> min</p>
               
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
                   
							
                       
						 
	 
 
   
	 <h3 class="text-center"><i class="fa fa-bars"></i> Episode List</h3>
        <table class="table table-bordered table-striped">
        	<thead>
        		<tr>
        			<th width="5">Season</th>
        			<th width="5">Episode</th>
        			<th width="250">Episode Title</th>
        			<th width="100">Release Date</th>
        		</tr>
        	</thead>
        	<tbody>
    		<?php foreach ( $episodes as $epi ): ?>
    			<tr>
    				<td><?php echo $epi->season ?></td>
    				<td><?php echo $epi->number ?></td>
    				<td><?php link_tvdb($tvid,$epi->season, $epi->number,$tvdb->episode_name($epi->name, $epi->number)) ?></td>
    				<td><?php echo $tvdb->date($epi->firstAired) ?></td>
    			</tr>
    		<?php endforeach ?>
        	</tbody>
        </table>
						 
	 
 
	  
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