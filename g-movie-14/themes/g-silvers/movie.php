<?php 
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G-silvers V4
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<head>

   <!-- Site information -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title itemprop="name"><?php oc_title();?></title>
    <meta name="description" content="<?php oc_description();?>">
    <meta name="keywords" content="<?php echo config('sitekeywords');?>" />

    <meta name="robots" content="noindex,nofollow">
    <link rel="canonical" href="<?php echo site_uri() ?>" />
	 <?php if (isset($images)): ?>
    <meta property="og:image" content="<?php echo $images ?>" />
    <?php else: ?>
    <?php endif ?>
<!-- External CSS -->
    <link rel="stylesheet" href="<?php style_theme();?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php style_theme();?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php style_theme();?>/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php style_theme();?>/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php style_theme();?>/css/magnific-popup.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.5.0/video-js.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php style_theme();?>/css/style.css">
    <link rel="stylesheet" href="<?php style_theme();?>/css/responsive.css">
    <link rel='stylesheet' id='magelo-css' href='<?php style_theme();?>/css/style.min.css' type='text/css' media='screen,projection' />
    <link rel="stylesheet" href="<?php style_theme();?>/css/custom.css">
	<link rel="stylesheet" href="<?php style_theme();?>/css/share.css">
    <!-- Google Fonts -->


    <!-- Favicon -->
    <link rel="icon" href="<?php style_theme();?>/images/template/favicon.png">
    <link rel="apple-touch-icon" href="<?php style_theme();?>/images/template/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php style_theme();?>/images/template/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php style_theme();?>/images/template/icon-114x114.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php style_theme();?>/js/html5shiv.min.js"></script>
      <script src="<?php style_theme();?>/js/respond.min.js"></script>
    <![endif]-->

    <script type='text/javascript'>
         //<![CDATA[
         shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops.php"});
         //]]>
      </script>
      <?php
  $bg = array('https://www.youtube.com/watch?v=8FuoHDmTms4','https://www.youtube.com/watch?v=kLl4b_doNtk','https://www.youtube.com/watch?v=VOjqnb3aICM','https://www.youtube.com/watch?v=2FB-gEghOT8','https://www.youtube.com/watch?v=OT9HsNszYCI','https://www.youtube.com/watch?v=_nq2BTuSOq4','https://www.youtube.com/watch?v=YXWFYPk11GM"' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
</head>
   <body style="background-color:rgb(31, 30, 28);">
      <!-- Main Header -->
   <nav class="navbar navbar-default navbar-static-top position-absolute w-100" style="min-height:50px; padding: 10px 0; background-image: none; background-color:transparent;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav-collapse" aria-expanded="false" style="margin-top:8px; margin-bottom:8px;">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/" style="height:auto; margin-top: 0; margin-bottom: 0;">
                    <img src="<?php style_theme();?>/images/template/logo.png" alt="Site Logo">
                </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav-collapse">
                <ul class="nav navbar-nav navbar-left m-0">
                    <li class="text-shadow"><a href="/p/movies/">Movies</a></li>
                    <li class="text-shadow"><a href="/p/show/">TV</a></li>
                    <li class="dropdown">
                        <a href="#">Categories</a>
                        <ul class="dropdown-menu">
                             <?php foreach ($_cate as $cateid => $catename): ?>
											<li><a href="<?php echo seocat( $catename,$cateid );?>"><?php echo ucwords($catename) ?></a></li>
							 <?php endforeach ?>
                         
                            
                        </ul>
                    </li>
                </ul>
				<ul class="nav navbar-nav navbar-right m-0" style="position:relative">
                    <li class="text-shadow"><a href="/login.php">Log In</a></li>
                    <li class="d-none d-lg-block text-shadow">
                        <a id="search-icon" href="javascript:void(0)"><i class="fa fa-search" aria-hidden="true"></i></a>
                    </li>
					<li class="d-block d-lg-none text-shadow" id="search-form">
						<form method="get" class="navbar-form ml-0 mr-0 mt-2 mb-2" action="/" >
							<select name="type">
								<option value="movie" selected>Movies</option>
								<option value="tv">TV</option>
							</select>
							<input type="search" name="Search" required style="width:auto;">
							<button type="submit" class="btn btn-default" ><i class="fa fa-search"></i></button>
						</form>
					</li>
                </ul>
            </div>
        </div>
    </nav>
      <!-- Main Header End -->
      <div id="backdrop-background" class="d-none d-sm-block mb-5" style="position:relative; overflow: visible;">
         <div class="backdrop-gradient" style="position:absolute; left:0; top:0; width:100%;right: 0;bottom: 0; background-image: linear-gradient(90deg, #1f1e1c 0%, rgba(15, 22, 26, 0) 80%); overflow-x: hidden;"></div>
         <div class="backdrop-gradient" style="position:absolute; left:0; top:0; width:100%;right: 0;bottom: 0; background-image: linear-gradient(0deg, #1f1e1c 0%, rgba(15, 22, 26, 0) 80%); overflow-x: hidden;"></div>
         <div id="backdrop-img" style="position:relative; left:0; top:0; width:100%; z-index:-1;">
            <img class="img-responsive" src="<?php echo $images;?>" alt="<?php echo $title;?>" style="width:100%;">
         </div>
         <div id="backdrop-table" class="d-none d-sm-block" style="position:absolute; left:0; top:25%; width:100%;">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="row">
                        <div class="col-12 col-md-8">
                           <div class="row">
                              <div class="col-4 col-sm-4 text-center d-none d-sm-block">
                                 <img class="img-responsive" src="<?php echo $images_small;?>" style="width:100%">
                              </div>
                              <div class="col-8 col-sm-8">
                                 <h2><?php echo $title;?></h2>
                                 <div style="font-weight: bold;">
                                    <span title="7/10" class="mrating" style="float:left; margin-top:3px; margin-right:5px;"><span class="rating-star" style="width:70%"></span></span>
                                 <span style="margin-right:5px">(<?php echo $vote_count;?>)</span>
                                 <span style="margin-right:5px"><?php echo $runtime;?> Min</span>
                                 <span style="margin-right:5px"><?php echo $year;?></span>
                                    <!--<span style="margin-right:5px; border:1px solid #c0c1c4; border-radius:2px; padding:0 10px;">HD</span>-->
                                    <span style="margin-right:5px;"><i aria-hidden="true" class="fa fa-commenting-o"></i></span>
                                    <span class="small" style="margin-right:5px; border:1px solid #c0c1c4; border-radius:2px; padding:0 10px; font-weight:normal">X-Ray</span>
                                 </div>
                                 <div class="d-none d-sm-block" style="margin:10px 0;">
                                    <div class="row">
                                       <div class="col-12">
                                          <div class="container-fluid">
                                             <div class="row" style="text-shadow: 1px 1px 0 #464646, 1px -1px 0 #464646, -1px 1px 0 #464646, -1px -1px 0 #464646, 1px 0px 0 #464646, 0px 1px 0 #464646, -1px 0px 0 #464646, 0px -1px 0 #464646;">
                                                <div class="col-3 pl-0 pr-2">
                                                   <div style="border-radius:4px; background: #2193b0; background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); background: linear-gradient(to right, #6dd5ed, #2193b0);" class="btn btn-info btn-xs w-100" onclick="scrollTos('magelo-player')"><i aria-hidden="true" class="fa fa-play fa-2x d-none d-lg-block " style="position: absolute; left: 10%; top: 15%;"></i>Watch<br>Movie</div>
                                                </div>
                                                <div class="col-6 pl-0 pr-2">
                                                   <div style="border-radius:4px; background: #F2994A; background: -webkit-linear-gradient(to top, #F2C94C, #F2994A); background: linear-gradient(to top, #F2C94C, #F2994A);" class="btn btn-warning btn-xs w-100" data-toggle="modal" data-target="#modal-offer"><i aria-hidden="true" class="fa fa-download fa-2x d-none d-lg-block " style="position: absolute; left: 10%; top: 20%;"></i>Download Full Movie<br>HD - Full HD - 4K</div>
                                                </div>
                                                <div class="col-3 pl-0 pr-2">
                                                   <div style="border-radius:4px;background: #2193b0; background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); background: linear-gradient(to right, #6dd5ed, #2193b0);" class="btn btn-info btn-xs w-100" data-toggle="modal" data-target="#modal-offer"><i aria-hidden="true" class="fa fa-heart fa-2x d-none d-lg-block " style="position: absolute; left: 5%; top: 18%;"></i>Add to<br>Watchlist</div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <table class="d-none d-sm-block table table-no-bordered mb-3" style="color: #fff;">
                                    <tbody>
                                       <!--												<tr><th class="pl-0">Genre</th><td>:</td><td> <?php echo $genre;?> </td></tr>
                                          <tr><th class="pl-0">Production County</th><td>:</td><td> <?php echo $country;?></td></tr>
                                          <tr><th class="pl-0">Companies</th><td>:</td><td> <td> <?php echo $companies;?></td></td></tr>
                                          <tr><th class="pl-0">Starring</th><td>:</td><td> <?php echo $cast;?></td></tr>
                                          -->
                                       <tr>
                                          <th class="pl-0">Genre</th>
                                          <td>:</td>
                                          <td> <?php echo $genre;?> </td>
                                       </tr>
                                       <tr>
                                          <th class="pl-0">Production County</th>
                                          <td>:</td>
                                          <td> <?php echo $country;?></td>
                                       </tr>
                                       <tr>
                                          <th class="pl-0">Companies</th>
                                          <td>:</td>
                                          <td> <?php echo $companies;?></td>
                                       </tr>
                                       <tr>
                                          <th class="pl-0">Starring</th>
                                          <td>:</td>
                                          <td> <?php echo $cast;?></td>
                                       </tr>
                                       <tr>
                                          <th class="pl-0">Language</th>
                                          <td>:</td>
                                          <td>
                                             <span style="margin-right:5px" class="btn-primary badge">EN</span>
                                             <span style="margin-right:5px" class="btn-primary badge">FR</span>
                                             <span style="margin-right:5px" class="btn-primary badge">DE</span>
                                             <span style="margin-right:5px" class="btn-primary badge">ES</span>
                                             <span style="margin-right:5px" class="btn-primary badge">IT</span>
                                          </td>
                                       </tr>
                                       <div id="google_translate_element"></div>
					<script type="text/javascript">
                    function googleTranslateElementInit() {
                    new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
                    }
					</script>
					<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
                                    </tbody>
                                 </table>
                                 <div class="d-none d-sm-block d-md-none">
                                    <h2>Overview</h2>
                                    <div class="mt-2">
                                       <?php echo $description;?>										
                                    </div>
                                    <div class="text-center mt-2">
                                       <a target="_blank" href="https://www.facebook.com/share.php?u=<?php echo site_uri() ?>" title="Share this page on facebook" class="share-icon share-icon-facebook"></a>
                                    <a target="_blank" href="https://twitter.com/share?url=<?php echo site_uri() ?>&amp;text=<?php echo $title;?>+Full+Movie+-+Filme+Online+Schauen+-+Official" title="Share this page on twitter" class="share-icon share-icon-twitter"></a>
                                    <a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo site_uri() ?>&amp;media=<?php echo $images;?>&amp;description=<?php echo $title;?>+Full+Movie+-+Filme+Online+Schauen+-+Official" title="Share this page on pinterest" class="share-icon share-icon-pinterest"></a>
                                    <a target="_blank" href="mailto:?subject=<?php echo $title;?>+Full+Movie+-+Filme+Online+Schauen+-+Official" title="Share this page on email" class="share-icon share-icon-email"></a>
                                 </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-4 d-none d-md-block">
                           <h2>Overview</h2>
                           <div class="mt-2">
                              <?php echo $description;?>							
                           </div>
                           <div class="mt-2">
                              <a target="_blank" href="https://www.facebook.com/share.php?u=<?php echo site_uri() ?>" title="Share this page on facebook" class="share-icon share-icon-facebook"></a>
                           <a target="_blank" href="https://twitter.com/share?url=<?php echo site_uri() ?>&amp;text=<?php echo $title;?>+Full+Movie+-+Filme+Online+Schauen+-+Official" title="Share this page on twitter" class="share-icon share-icon-twitter"></a>
                           <a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo site_uri() ?>&amp;media=<?php echo $images;?>&amp;description=<?php echo $title;?>+Full+Movie+-+Filme+Online+Schauen+-+Official" title="Share this page on pinterest" class="share-icon share-icon-pinterest"></a>
                           <a target="_blank" href="mailto:?subject=<?php echo $title;?>+Full+Movie+-+Filme+Online+Schauen+-+Official" title="Share this page on email" class="share-icon share-icon-email"></a>
                        </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="backdrop-bottom"></div>
      </div>
      <div class="clearfix"></div>
      <div id="poster-background" class="d-block d-sm-none mb-5" style="position:relative; overflow: visible;">
         <div class="poster-gradient" style="position:absolute; left:0; top:0; width:100%;right: 0;bottom: 0; background-image: linear-gradient(90deg, #1f1e1c 0%, rgba(15, 22, 26, 0) 80%); overflow-x: hidden;"></div>
         <div class="poster-gradient" style="position:absolute; left:0; top:0; width:100%;right: 0;bottom: 0; background-image: linear-gradient(0deg, #1f1e1c 0%, rgba(15, 22, 26, 0) 80%); overflow-x: hidden;"></div>
         <div id="poster-img" style="position:relative; left:0; top:0; width:100%; z-index:-1;">
            <img class="img-responsive" src="<?php echo $images_small;?>" style="width:100%">
         </div>
         <div id="poster-table" style="position:absolute; left:0; top:40%; width:100%;">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <h2><?php echo $title;?></h2>
                     <div style="font-weight: bold;">
                        <span title="7/10" class="mrating" style="float:left; margin-top:3px; margin-right:5px;"><span class="rating-star" style="width:70%"></span></span>
                        <span style="margin-right:5px">(<?php echo $vote_count;?>)</span>
                     <span style="margin-right:5px"><?php echo $runtime;?> Min</span>
                     <span style="margin-right:5px"><?php echo $year;?></span>
                        <span style="margin-right:5px;"><i aria-hidden="true" class="fa fa-commenting-o"></i></span>
                        <span class="small" style="margin-right:5px; border:1px solid #c0c1c4; border-radius:2px; padding:0 10px; font-weight:normal">X-Ray</span>
                     </div>
                     <div style="margin:10px 0;">
                        <div class="row">
                           <div class="col-12">
                              <div class="container-fluid">
                                 <div class="row" style="text-shadow: 1px 1px 0 #464646, 1px -1px 0 #464646, -1px 1px 0 #464646, -1px -1px 0 #464646, 1px 0px 0 #464646, 0px 1px 0 #464646, -1px 0px 0 #464646, 0px -1px 0 #464646;">
                                    <div class="col-3 pl-0 pr-2">
                                       <div style="border-radius:4px; background: #2193b0; background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); background: linear-gradient(to right, #6dd5ed, #2193b0);" class="btn btn-info btn-xs w-100" onclick="scrollTos('magelo-player')">Watch<br>Movie</div>
                                    </div>
                                    <div class="col-6 pl-0 pr-2">
                                       <div style="border-radius:4px; background: #F2994A; background: -webkit-linear-gradient(to top, #F2C94C, #F2994A); background: linear-gradient(to top, #F2C94C, #F2994A);" class="btn btn-warning btn-xs w-100" data-toggle="modal" data-target="#modal-offer">Download Full Movie<br>HD - Full HD - 4K</div>
                                    </div>
                                    <div class="col-3 pl-0 pr-2">
                                       <div style="border-radius:4px;background: #2193b0; background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); background: linear-gradient(to right, #6dd5ed, #2193b0);" class="btn btn-info btn-xs w-100" data-toggle="modal" data-target="#modal-offer">Add to<br>Watchlist</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <table class="table table-no-bordered mb-3" style="color: #fff;">
                        <tbody>
                           <tr>
                              <th class="pl-0">Genre</th>
                              <td>:</td>
                              <td> <?php echo $genre;?> </td>
                           </tr>
                           <tr>
                              <th class="pl-0">Production County</th>
                              <td>:</td>
                              <td> <?php echo $country;?></td>
                           </tr>
                           <tr>
                              <th class="pl-0">Companies</th>
                              <td>:</td>
                              <td> <?php echo $companies;?></td>
                           </tr>
                           <tr>
                              <th class="pl-0">Starring</th>
                              <td>:</td>
                              <td> <?php echo $cast;?></td>
                           </tr>
                           <tr>
                              <th class="pl-0">Language</th>
                              <td>:</td>
                              <td>
                                 <span style="margin-right:5px" class="btn-primary badge">EN</span>
                                 <span style="margin-right:5px" class="btn-primary badge">FR</span>
                                 <span style="margin-right:5px" class="btn-primary badge">DE</span>
                                 <span style="margin-right:5px" class="btn-primary badge">ES</span>
                                 <span style="margin-right:5px" class="btn-primary badge">IT</span>
                              </td>
                           </tr>
                        </tbody>
                     </table>
                     <div>
                        <h2>Overview</h2>
                        <div class="mt-2">
                           <?php echo $description;?>						
                        </div>
                        <div class="text-center mt-2">
                           <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_uri() ?>" title="Share this page on facebook" class="share-icon share-icon-facebook"></a>
                        <a target="_blank" href="https://twitter.com/share?url=<?php echo site_uri() ?>&amp;text=<?php echo $title;?>+Full+Movie+-+Filme+Online+Schauen+-+Official" title="Share this page on twitter" class="share-icon share-icon-twitter"></a>
                        <a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo site_uri() ?>&amp;media=<?php echo $images;?>&amp;description=<?php echo $title;?>+Full+Movie+-+Filme+Online+Schauen+-+Official" title="Share this page on pinterest" class="share-icon share-icon-pinterest"></a>
                        <a target="_blank" href="mailto:?subject=<?php echo $title;?>+Full+Movie+-+Filme+Online+Schauen+-+Official" title="Share this page on email" class="share-icon share-icon-email"></a>
                     </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="poster-bottom"></div>
      </div>
      <div id="div-video-player" class="main-wrap mb-5">
         <div id="video-player">
            <div class="container">
               <div id="magelo-player">
                  <div class="embed-responsive embed-responsive-16by9">
                     <div id="loader" style="background-color:#000;">
                        <p class="loader"></p>
                     </div>
                     <div id="cover-top"></div>
                     <div id="cover-bottom"></div>
                     <div class="media-controls-top">
                        <div class="row">
                           <div class="col-7 font-weight-bold text-truncate">
                              <ul class="nav navbar-nav float-left m-0">
                                 <li>
                                    <h5 class="m-0"><?php echo $title;?></h5>
                                 </li>
                              </ul>
                           </div>
                           <div class="col-5">
                              <ul class="nav navbar-nav float-right m-0" style="overflow: visible;">
                                 <li class="font-weight-bold float-left d-none d-md-inline-block">Subtitle :</li>
                                 <li class="float-left ml-3"><label class="font-weight-normal m-0" style="cursor:pointer;"><input class="d-none" type="file" id="upsubtitle" name="upsubtitle" accept=".srt,.txt" style=""><i class="fa fa-upload mr-2" aria-hidden="true" title="Upload subtitle .srt"></i><span class="d-none d-lg-inline-block">Upload Subtitle</span></label></li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     <div id="videoPlayers" class="embed-responsive-item">
                        <img class="impl img-responsive" src="<?php echo $images;?>" alt="<?php echo $title;?>">
                     </div>
                     <div class="play-wrapper ease d-flex justify-content-center">
                        <span id="play" class="fa fa-youtube-play ease align-self-center"></span>
                     </div>
                     <div class="media-controls" style="z-index:99">
                        <div id="leftControls">
                           <button type="button" name="Play" class="btn glyphicon glyphicon-play" id="play_btn"></button>
                           <div id="sliderContainer" style="position: relative;">
                              <div id="slider" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all">
                                 <div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="height: 50%;width: 100%;"></div>
                              </div>
                           </div>
                           <button id="volumeInc_btn" name="Volume" class="btn glyphicon glyphicon-volume-up"></button>
                           <button id="timeContainer" class="btn"><span class="dmax">00:00:00</span> / <span class="dmax"><?php echo convertToHoursMins($runtime);?></span></button>
                        </div>
                        <div id="progressContainer">
                           <span id="progress-bar" class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" data-count="0.387931034483%"></span>
                        </div>
                        <div id="rightControls">
                           <button id="fullscreen_btn" name="Fullscreen" class="btn glyphicon glyphicon-resize-full"></button>
                           <div id="setting_btn" class="btn-group dropup" style="float: right;">
                              <button name="Setting" class="btn glyphicon glyphicon-cog dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-hd-video"></span></button>
                              <ul class="dropdown-menu dropdown-menu-right">
                                 <li class="hq active">HD 1080p</li>
                                 <li class="hq">HD 720p</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="main-wrap mb-5">
         <div class="container">
            <div class="alert alert-attention" role="alert" style="color: #fff; background-color: #2d2d2d;">
               <a href="javascript:void(0)" class="close" data-dismiss="alert" aria-label="close">x</a>
               <i class="fa fa-exclamation-circle"></i> Scroll down and click to choose episode/server you want to watch.<br>If you don't hear the sounds, please try another server or use Desktop browsers to watch.<br>If you got load forver or error message, please press Ctrl + F5 or clear your browser cache and try again.<br>
            </div>
            <div class="row">
               <div class="col-12 col-sm-8">
                  <p class="font-weight-bold text-center">Available Server</p>
                  <table class="table text-white" style="background-color: #2d2d2d;">
                     <tbody>
                        <tr>
                           <th style="border-top: 1px solid #1b1b1b;">Google</th>
                           <td style="border-top: 1px solid #1b1b1b;">:</td>
                           <td  style="border-top: 1px solid #1b1b1b; padding: 12px;">
                              <div class="btn btn-default btn-sm d-none d-sm-inline-block" data-toggle="modal" data-target="#modal-offer" style="min-width: 75px;font-size: 1.3rem;border: 1px solid rgba(0, 0, 0, 0.76);padding: 5px;">SD 480p</div>
                              &nbsp;
                              <div class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-offer" style="min-width: 75px;font-size: 1.3rem;border: 1px solid rgba(0, 0, 0, 0.76);padding: 5px;">HD 720p</div>
                              &nbsp;
                              <div class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal-offer" style="font-size: 1.3rem;min-width: 75px;border: 1px solid rgba(0, 0, 0, 0.76);padding: 5px;background: #2193b0;background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0);background: linear-gradient(to right, #6dd5ed, #2193b0);">HD 1080p</div>
                           </td>
                        </tr>
                        <tr>
                           <th style="border-top: 1px solid #1b1b1b;">OpenLoad</th>
                           <td style="border-top: 1px solid #1b1b1b;">:</td>
                           <td style="border-top: 1px solid #1b1b1b; padding: 12px;">
                              <div class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-offer" style="min-width: 75px;font-size: 1.3rem;border: 1px solid rgba(0, 0, 0, 0.76);padding: 5px;"">HD 720p</div>
                              &nbsp;
                              <div class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-offer" style="min-width: 75px;font-size: 1.3rem;border: 1px solid rgba(0, 0, 0, 0.76);padding: 5px;">HD 1080p</div>
                           </td>
                        </tr>
                        <tr>
                           <th style="border-top: 1px solid #1b1b1b;">I-Frame</th>
                           <td style="border-top: 1px solid #1b1b1b;">:</td>
                           <td style="border-top: 1px solid #1b1b1b; padding: 12px;">
                              <div class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-offer" style="min-width: 75px;font-size: 1.3rem;border: 1px solid rgba(0, 0, 0, 0.76);padding: 5px;"">HD 1080p</div>
                              &nbsp;
                              <div class="btn btn-default btn-sm" data-toggle="modal" data-target="#modal-offer" style="min-width: 75px;font-size: 1.3rem;border: 1px solid rgba(0, 0, 0, 0.76);padding: 5px;">4K 2160p</div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
               <div class="col-12 col-sm-4 text-center">
                  <p class="font-weight-bold text-center">Download Options</p>
                  <div style="min-width: 100%;border: 1px solid rgba(0, 0, 0, 0.76);padding: 8px;background: #2193b0; background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); background: linear-gradient(to right, #6dd5ed, #2193b0);" class="btn btn-primary" data-toggle="modal" data-target="#modal-offer" href="#modal-login"> <i class="fa fa-cloud-download"></i> <span class="d-sm-none d-md-inline-block">Download</span> 480p (7,993 Kb/s)&nbsp;&nbsp;</div>
                  <div style="min-width: 100%;margin-top: 5px;border: 1px solid rgba(0, 0, 0, 0.76);padding: 8px;background: #2193b0; background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); background: linear-gradient(to right, #6dd5ed, #2193b0);" class="btn btn-primary" data-toggle="modal" data-target="#modal-offer" href="#modal-login"> <i class="fa fa-cloud-download"></i> <span class="d-sm-none d-md-inline-block">Download</span> 720p (6,647 Kb/s)&nbsp;&nbsp;</div>
                  <div style="margin-top: 5px;min-width: 100%;border: 1px solid rgba(0, 0, 0, 0.76);padding: 8px;background: #2193b0; background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); background: linear-gradient(to right, #6dd5ed, #2193b0);" class="btn btn-primary" data-toggle="modal" data-target="#modal-offer" href="#modal-login"> <i class="fa fa-cloud-download"></i> <span class="d-sm-none d-md-inline-block">Download</span> 1080p (4,184 Kb/s)</div>
                  <div style="min-width: 100%;margin-top: 5px;border: 1px solid rgba(0, 0, 0, 0.76);padding: 8px;background: #2193b0; background: -webkit-linear-gradient(to right, #6dd5ed, #2193b0); background: linear-gradient(to right, #6dd5ed, #2193b0);" class="btn btn-primary" data-toggle="modal" data-target="#modal-offer" href="#modal-login"> <i class="fa fa-cloud-download"></i> <span class="d-sm-none d-md-inline-block">Download</span> 2160p (3,102 Kb/s)</div>
               </div>
            </div>
         </div>
      </div>
      <div class="main-wrap">
         <div class="section section-padding video-single-section pt-0 pb-0">
            <div class="container">
               <div class="video-single">
                  <div class="row">
                     <div class="col-12 pl-0 pr-0">
                        <div class="section section-padding top-padding-normal movie-section" style="padding-top: 0;">
                           <div class="container">
                              <div class="row text-center text-sm-left mb-3">
                                 <div class="col-12">
                                    <div class="section-header">
                                       <h3 class="section-title">Similar movie</h3>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="owl-carousel video-carousel video-carousel2 mw-100" id="video-carousel2">
<?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_movie('home_m_',$page, 'getNowPlayingMovies') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
                                    <div class="video-item2">
                                       <div class="thumb-wrap2 text-center" style="width: 100%;">
                                          <img src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?>">
                                          <div class="thumb-hover">
                                             <a class="play-video" href="<?php echo seo_movie($row['id'],$row['title']);?>"><i class="fa fa-play"></i></a>
                                          </div>
                                       </div>
                                       <div class="video-details">
                                          <h4 class="video-title"><a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a></h4>
                                          <p class="video-release-on"><?php echo $row['release_date'];?></p>
                                       </div>
                                    </div>
<?php 
                }
        endif; 
        ?>
                                 </div>
                              </div>
                              <div class="row mt-5">
                                 <div class="col-12">
                                    <div class="section-header mb-2">
                                       <h3 class="section-title">More Details</h3>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <table class="table table-no-bordered" style="color: #fff;">
                                       <tbody>
                                          <tr>
                                             <th class="pl-0">Production County</th>
                                             <td>:</td>
                                             <td> <?php echo $country;?></td>
                                          </tr>
                                          <tr>
                                             <th class="pl-0">Companies</th>
                                             <td>:</td>
                                             <td> <?php echo $companies;?></td>
                                          </tr>
                                          <tr>
                                             <th class="pl-0">Audio</th>
                                             <td>:</td>
                                             <td>
                                                <span style="margin-right:5px" class="btn-warning badge">EN</span>
                                                <span style="margin-right:5px" class="btn-warning badge">FR</span>
                                                <span style="margin-right:5px" class="btn-warning badge">DE</span>
                                                <span style="margin-right:5px" class="btn-warning badge">ES</span>
                                                <span style="margin-right:5px" class="btn-warning badge">IT</span>
                                             </td>
                                          </tr>
                                          <tr>
                                             <th class="pl-0">Format</th>
                                             <td>:</td>
                                             <td>Online Streaming, DVD, Blu-ray</td>
                                          </tr>
                                          <tr>
                                             <th class="pl-0">Device</th>
                                             <td>:</td>
                                             <td>TV, PC, MAC, Android, IOS, Game Console</td>
                                          </tr>
                                          <!--<tr><th class="pl-0">Download</th><td>:</td><td>
                                             <div class="btn p-0" data-toggle="modal" data-target="#modal-offer">
                                          	<img class="img-responsive d-inline-block mr-2" src="<?php style_theme();?>/img/720p.png">
                                          	<img class="img-responsive d-inline-block mr-2" src="<?php style_theme();?>/img/1080p.png">
                                          	<div class="clearfix d-block d-sm-none mb-2"></div>
                                          	<img class="img-responsive d-inline-block mr-2" src="<?php style_theme();?>/img/2k.png">
                                          	<img class="img-responsive d-inline-block mr-2" src="<?php style_theme();?>/img/4k.png">
                                             </div>
                                             </td></tr>-->
                                       </tbody>
                                    </table>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="modal fade" id="modal-offer" data-domain="<?=$_SERVER['HTTP_HOST']?>" data-campaign="<?=$_SERVER['HTTP_HOST']?>" data-movie="<?php echo $row['id'];?>" data-title="<?php echo $title;?>"  tabindex="-1" role="dialog" aria-labelledby="modal-watch" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content clearfix">
               <div class="modal-header bg-info">
                  <h3 class="panel-title" style="color: black;text-align:center;" >
                     PLEASE SIGN UP TO WATCH <?php echo $title;?>				
                  </h3>
               </div>
               <div class="modal-body clearfix" style="color: #000;">
                  <div class="row">
                     <div class="col-md-6" style="margin-bottom:20px">
                        <img class="img-responsive" src="<?php echo $images;?>">
                        <hr>
                        <h5>Member Login</h5>
                        <div class="form-group">
                           <input type="text" class="form-control input-sm" id="userid" placeholder="username">
                        </div>
                        <div class="form-group">
                           <input type="password" class="form-control input-sm" id="password" placeholder="password">
                        </div>
                        <div class="form-group">
                           <span class="onload" style="display: none;">Please wait...</span>
                           <span class="onerror small" style="display: none;">Wrong Username or Password</span>
                        </div>
                        <input type="submit" id="submov" class="btn btn-success" value="Login">
                        <a class="btn btn-danger" href="/register.php?title=<?php echo $title;?>&amp;tmdbid=<?php echo $row['id'];?>">Sign Up For Free</a>
                     </div>
                     <div class="col-md-6">
                        <ul class="list-group">
                           <li class="list-group-item">
                              <h4 class="list-group-item-heading"><b>High Quality Movies!</b></h4>
                              <p class="list-group-item-text">All of the Movies are available in the superior HD Quality or even higher!</p>
                           </li>
                           <li class="list-group-item">
                              <h4 class="list-group-item-heading"><b>Watch Without Limits!</b></h4>
                              <p class="list-group-item-text">You will get access to all of your favourite the Movies without any limits.</p>
                              <p class="list-group-item-text">Thousands of movies to choose from Hottest new releases.</p>
                           </li>
                           <li class="list-group-item">
                              <h4 class="list-group-item-heading"><b>100% Free Advertising!</b></h4>
                              <p class="list-group-item-text">Your account will always be free from all kinds of advertising.</p>
                           </li>
                           <li class="list-group-item">
                              <h4 class="list-group-item-heading"><b>Watch anytime, anywhere!</b></h4>
                              <p class="list-group-item-text">It works on your TV, PC, MAC, Android, IOS & Game Console</p>
                           </li>
                           <br>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="modal-footer bg-info">
                  <span style="color:#000;font-size:16px;">  Don't have account? </span><a class="btn btn-danger" href="/register.php?title=<?php echo $title;?>&amp;tmdbid=<?php echo $row['id'];?>">Sign Up For Free</a> 
               </div>
            </div>
         </div>
      </div>
      <!-- Footer Start -->
      <footer class="text-white">
         <div class="footer-widget-area">
            <div class="container">
               <div class="row">
                  <div class="col-md-4 col-xs-12 sm-bottom-40">
                     <div class="widget about-widget">
                        <div class="widget-inner">
                                    <img src="<?php style_theme();?>/images/template/logo-footer.png" alt="Footer logo">                                
                                <p class="about-text"><?php echo config('sitedescription') ?></p>
                           <div class="footer-social">
                              <h5 class="footer-social-title">Connect with</h5>
                              <div class="socials">
                                        <a href="<?php echo config('facebook_link') ?>"><i class="fa fa-facebook"></i></a>
                                        <a href="<?php echo config('twitter_link') ?>"><i class="fa fa-twitter"></i></a>
                                        <a href="<?php echo config('google_link') ?>"><i class="fa fa-google-plus"></i></a>
                                        <a href="<?php echo config('instagram_link') ?>"><i class="fa fa-instagram"></i></a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="widget category-widget">
                        <h3 class="widget-title">Main Categories</h3>
                        <div class="widget-inner">
                           <ul class="widget-cat">
									<li class="cat"><a href="<?php echo view_page( 'popular-movies' );?>">Popular Movie</a></li>
									<li class="cat"><a href="<?php echo view_page( 'toprated-movies' );?>">Top Rated Movie</a></li>
									<li class="cat"><a href="<?php echo view_page( 'movies-nowplay' );?>">Movie In Theaters</a></li>                          
									<li class="cat"><a href="<?php echo view_page( 'upcoming-movies' );?>">Upcoming Movie</a></li>
									<li class="cat"><a href="<?php echo view_page( 'tv-popular' );?>">Popular TV Series</a></li>
									<li class="cat"><a href="<?php echo view_page( 'tv-airing' );?>">Airing TV Series</a></li>
									<li class="cat"><a href="<?php echo view_page( 'tv-ontheair' );?>">On Air TV Series</a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-12">
                     <div class="widget newsletter-widget">
                        <h3 class="widget-title">Newsletter</h3>
                        <div class="widget-inner">
                           <p>Sign up for our mailling list to get latest updates videos and upcoming Movie</p>
                           <form id="subscriptionForm" class="subscription" action="#" method="post">
                              <input type="email" name="email" placeholder="Email Address" required>
                              <button type="submit" name="emailsubmit"><i class="fa fa-arrow-circle-right"></i></button>
                              <p class="newsletter-success"></p>
                              <p class="newsletter-error"></p>
                           </form>
                        </div>
                     </div>
                     <div class="widget app-widget">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="copyright-footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-6 col-sm-7 col-xs-12 xs-text-center">
                     <ul class="footer-nav">
                        <li>
						<a href="<?php echo view_page( 'privacy-policy' );?>">Privacy</a>
					</li>
					<li>
						<a href="<?php echo view_page( 'dmca-notice' );?>">DMCA Policy</a>
					</li>
					<li><a href="https://docs.google.com/forms/d/e/1FAIpQLScc-EzYRvFWIx93fJ0E0JXchAmLzjhLXKRG5jkVhBuk4x_KqQ/viewform">Contact</a></li>
					<li>
						<a href="<?php echo site_url() ?>/sitemap.xml">Sitemap</a>
					</li>
                     </ul>
                  </div>
                  <div class="col-md-6 col-sm-5 col-xs-12 xs-text-center">
                     <p class="copyright-text">&copy;<?php echo date("Y");?> <a href="/"><?php echo config('sitename') ?></a>. All Rights Reserved</p>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer End -->
      <div class="online" style="z-index: 99;">
         <span class="online-icon" style="float: left; margin-top:5px"></span>
         <div class="online-text">
            <p><?php echo rand(45,1000); ?> Users Online Now</p>
         </div>
      </div>
      <!-- Script -->
   <!-- Script -->
    <script src="<?php style_theme();?>/js/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <script src="<?php style_theme();?>/js/bootstrap.min.js"></script>
    <script src="<?php style_theme();?>/js/owl.carousel.js"></script>
    <script src="<?php style_theme();?>/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php style_theme();?>/js/jquery.ajaxchimp.min.js"></script>
	<script src="<?php style_theme();?>/js/scripts.js"></script>
    <script src="/assets/js/custom.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.5.0/video.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-youtube/2.6.0/Youtube.min.js"></script>
   <script type="text/javascript">
         jQuery("#loader").delay(2000).fadeOut();
         if (Modernizr.video) {
         var myPlayer = videojs('videoPlayers', {
         	controls: false,
         	autoplay: false,
         	preload: 'none',
         	errorDisplay: false,
         	poster: '<?php echo $images;?>',
         	techOrder: ['youtube'],
         	sources: [{
         		src: '<?php echo $selectedBg;?>',
         		type: 'video/youtube'
         	}]
         });
         jQuery(".play-wrapper, #play, #play_btn").on('click',function() {
         	jQuery(".onload").fadeOut("fast");
         	jQuery(".onerror").fadeOut("fast");
         	jQuery("#play_btn").attr("class", "btn glyphicon glyphicon-pause");
         	jQuery(".media-controls").fadeOut();
         	//jQuery(".play-wrapper").fadeOut();
         	jQuery(".play-wrapper").attr('style','display:none !important');
         	myPlayer.play();
         	//var ddur = jQuery("#intro").data("duration");
         	var ddur = 7500;
         	setTimeout(function() {
         		jQuery("#play_btn").attr("class", "btn glyphicon glyphicon-play");
         		exitFullscreen();
         		jQuery("#modal-offer").modal({
         			keyboard: !1,
         			backdrop: "static"
         		});
         	},ddur);
         });
         myPlayer.on('play', function() {
         	jQuery("#cover-top, #cover-bottom").css("z-index", "99");
         });
         myPlayer.on('error', function() {
         	jQuery(".media-controls").fadeOut();
         	jQuery(".play-wrapper").attr('style','display:none !important');
         });
         myPlayer.on('ended', function() {
         	myPlayer.currentTime(0);
         	jQuery(".media-controls").fadeIn();
         	//jQuery(".play-wrapper").fadeIn();
         	jQuery(".play-wrapper").removeAttr('style');
         	jQuery("#cover-top, #cover-bottom").css("z-index", "");
         });
         myPlayer.on('pause', function() {
         	jQuery(".media-controls").fadeIn();
         	//jQuery(".play-wrapper").fadeIn();
         	jQuery(".play-wrapper").removeAttr('style');
         	jQuery("#cover-top, #cover-bottom").css("z-index", "");
         });
         jQuery(document).on('click','#volumeInc_btn.glyphicon-volume-up',function() {
         	jQuery(this).removeClass('glyphicon-volume-up').addClass('glyphicon-volume-off');
         	myPlayer.muted(true);
         });
         jQuery(document).on('click','#volumeInc_btn.glyphicon-volume-off',function() {
         	jQuery(this).removeClass('glyphicon-volume-off').addClass('glyphicon-volume-up');
         	myPlayer.muted(false);
         });
         jQuery('#modal-video').on('show.bs.modal', function (e) {
         	//jQuery('#play_btn').trigger('click');
         	
         });
         jQuery('#modal-video').on('hide.bs.modal', function (e) {
         	myPlayer.pause();
         });
         } else {
         	jQuery(".play-wrapper, #play, #play_btn").on('click',function() {
         		//console.log(this)
         		jQuery(".onload").fadeOut("fast");
         		jQuery(".onerror").fadeOut("fast");
         		jQuery("#play_btn").attr("class", "btn glyphicon glyphicon-pause");
         		//jQuery(".media-controls").fadeOut();
         		//jQuery(".play-wrapper").fadeOut();
         		jQuery(".play-wrapper").attr('style','display:none !important');
         		jQuery(".loader").fadeIn().delay(3000).fadeOut(function(){
         			jQuery("#play_btn").attr("class", "btn glyphicon glyphicon-play");
         			exitFullscreen();
         			jQuery("#modal-offer").modal({
         				keyboard: !1,
         				backdrop: "static"
         			});
         		});
         	});
         }
         jQuery("#submov").on('click',function() {
         	jQuery(".onerror").fadeOut("fast", function(){
         		jQuery(".onload").fadeIn("fast").delay(3000).fadeOut("fast", function(){
         			jQuery(".onerror").fadeIn("fast");
         			jQuery("#userid, #password").val("");
         			jQuery("#userid").focus();
         		});
         	});		
         });
         jQuery( document ).ready( function(){
         	setMaxWidth();
         	jQuery( window ).bind( "resize", setMaxWidth );
             function setMaxWidth() {
         		var wh = jQuery( window ).height();
         		var hh = jQuery( '#container-header-video' ).outerHeight();
         		var wwh = (parseInt(wh) * 16 / 9) - hh - 60;
         		var ww = jQuery( window ).width();
         		if(wwh < ww){
         			jQuery( "#container-video" ).css( "maxWidth", wwh + "px" );
         		} else {
         			//jQuery( "#container-video" ).css( "maxWidth", "" );
         		}
             }
         	setMaxHeight();
         	jQuery( window ).bind( "resize", setMaxHeight );
             function setMaxHeight() {
         		var bbh = jQuery( '#backdrop-background' ).height();
         		var bth = jQuery( '#backdrop-table' ).height() + (0.25*bbh);
         		if(bth > bbh){
         			jQuery( "#backdrop-bottom" ).css( "marginBottom", (bth - bbh) + "px" );
         			setTimeout(function() {
         				var bih = jQuery( '#backdrop-img' ).height();
         				jQuery( ".backdrop-gradient" ).css( "maxHeight", bih + "px" );
         			},100);
         			if(jQuery( '#backdrop-background' ).is(":visible"))
         				jQuery( "#div-video-player" ).css( "margin-top", "" );
         		} else {
         			jQuery( "#backdrop-bottom" ).css( "marginBottom", "" );
         			jQuery( ".backdrop-gradient" ).css( "maxHeight","" );
         			if(jQuery( '#backdrop-background' ).is(":visible"))
         				jQuery( "#div-video-player" ).css( "margin-top", -(bbh-bth-50) + "px" );
         		}
         		var pbh = jQuery( '#poster-background' ).height();
         		var pth = jQuery( '#poster-table' ).height() + (0.40*pbh);
         		if(pth > pbh) {
         			jQuery( "#poster-bottom" ).css( "marginBottom", (pth- pbh) + "px" );
         			setTimeout(function() {
         				var pih = jQuery( '#poster-img' ).height();
         				jQuery( ".poster-gradient" ).css( "maxHeight", pih + "px" );
         			},100);
         			if(jQuery( '#poster-background' ).is(":visible"))
         				jQuery( "#div-video-player" ).css( "margin-top", "" );
         		} else {
         			jQuery( "#poster-bottom" ).css( "marginBottom", "" );
         			jQuery( ".poster-gradient" ).css( "maxHeight","" );
         			if(jQuery( '#poster-background' ).is(":visible"))
         				jQuery( "#div-video-player" ).css( "margin-top", -(pth-pbh-50) + "px" );
         		}
         		
             }
         	jQuery('#modal-video').on('show.bs.modal', function (e) {
         		setMaxWidth();
         	});
         	jQuery( window ).bind( "resize", setMaxHeightSub );
             function setMaxHeightSub() {
         		var vph = jQuery( '#videoPlayers' ).height() - 100;
         		jQuery( "#subtitle" ).css( "maxHeight", vph + "px" );
         	}
         	setMaxHeightSub();
         });
         function scrollTos(hash){
         	location.hash = "#" + hash;
         }
      </script>    <?php echo histats_write() ?>		
   </body>
</html>