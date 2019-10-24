<?php 
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G-silvers V4
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">

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
 </head>

 <body>



    <!-- Top Header -->
    <body style="background-color:rgb(31, 30, 28);">
       <!-- Main Header -->
       <nav class="navbar navbar-default navbar-static-top w-100" style="min-height:50px; padding: 10px 0; background-image: none; background-color:#FFD700">
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
                            <li><a href="/genre/action/28">Action</a></li>
                            <li><a href="/genre/animation/16">Animation</a></li>
                            <li><a href="/genre/comedy/35">Comedy</a></li>
                            <li><a href="/genre/crime/80">Crime</a></li>
                            <li><a href="/genre/documentary/99">Documentary</a></li>
                            <li><a href="/genre/drama/18">Drama</a></li>
                            <li><a href="/genre/family/10751">Family</a></li>
                            <li><a href="/genre/fantasy/14">Fantasy</a></li>
                            <li><a href="/genre/foreign/10769">Foreign</a></li>
                            <li><a href="/genre/history/36">History</a></li>
                            <li><a href="/genre/horror/27">Horror</a></li>
                            <li><a href="/genre/music/10402">Music</a></li>
                            <li><a href="/genre/mystery/9648">Mystery</a></li>
                            <li><a href="/genre/romance/10749">Romance</a></li>
                            <li><a href="/genre/sci-fi/878">Sci-fi</a></li>
                            <li><a href="/genre/TV-Movie/10770">TV-Movie</a></li>
                            <li><a href="/genre/thriller/53">Thriller</a></li>
                            <li><a href="/genre/war/10752">War</a></li>
                            <li><a href="/genre/western/37">Western</a></li>
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
                        <input type="search" name="s" required style="width:auto;">
                        <button type="submit" class="btn btn-default" ><i class="fa fa-search"></i></button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Main Header End -->