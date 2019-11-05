<?php 
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
				<meta name="theme-color" content="#111111">
					<title itemprop="name"><?php oc_title();?></title>
        <meta name="description" content="<?php oc_description();?>">
        <meta name="keywords" content="<?php echo config('sitekeywords');?>" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="author" content="admin">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta property="og:locale" content="en_US">
        <meta property="og:title" content="<?php oc_title() ?>" />
        <meta property="og:description" content="<?php oc_description();?>">
        <meta property="og:type" content="website" />
        <meta property="og:author" content="Admin">
        <meta property="og:site_name" content="<?php echo config('sitename') ?>">
        <meta property="og:url" content="<?php echo site_uri() ?>" />
        <?php if (isset($images)): ?>
        <meta property="og:image" content="<?php echo $images ?>" />
        <?php else: ?>
        <?php endif ?>
								<meta property="og:locale" content="en_US">
									<meta property="og:type" content="website">
	<meta property="og:site_name" content="<?php echo config('sitename') ?>">
		<link rel="stylesheet" id="bootstrap-css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="jasny-css" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="awesome-css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="simple-css" href="//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" type="text/css" media="all">
		<link rel="stylesheet" id="google-font" href="//fonts.googleapis.com/css?family=Oswald|Open+Sans" type="text/css" media="all">
		<link rel="stylesheet" id="style-font" href="<?php style_theme();?>/css/style.min.css" type="text/css" media="all">
		<link rel="shortcut icon" href="<?php echo site_url() . '/assets/images/'.config('favicon')?>">
		<?php oc_head(); ?>
		<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops.php"});
//]]>
</script>
<style>
		body{
			
			background : black;
		}
		#home.clearfix{
			background : black;
		}
		.navbar{
			background : black;
			border-color:#555555	;
			box-shadow: 1px 1px 1px #2B2B2B;
		}
		.navbar-default{
			background : rgba(0, 0, 0, 0.678);
			
		}
		.input-group-addon{
			background-color : black ;
		
			color : white;
			border-color: black;
		}
		input.form-control{
			background-color: black;
			color : #C1C1C1;
			margin-left:10px;
		}

		.icon-menu{
			color: white;
		}
		.icon-magnifier{
			/* margin-left:10px; */
			
		}
		.btn-primary{
			background-color:black;
			border-color:black;
		}
	
	</style>
		</head>
		<body class=" movie single" >
								<header>
									<div class="navbar navbar-default navbar-fixed-top">
<div class="container">
	<button type="button" class="side-toggle" data-toggle="offcanvas" data-target="#side-menu" data-canvas="body" >
		<span class="icon-menu"></span>
	</button>
	<div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-navbar" aria-expanded="false">
			<span class="icon-options-vertical"></span>
		</button>
		<a class="navbar-brand" style="color:white ;" href="<?php echo site_url() ?>"><?php echo config('sitename') ?></a>
	</div>
	<nav class="collapse navbar-collapse" id="main-navbar">
		<form method="GET" action="/" class="navbar-form navbar-right">
			<div class="input-group">
				<span class="input-group-addon">
					<input type="radio" name="type" value="movie"  checked> Movie 
						<input type="radio" name="type" value="tv" class="spaceleft" > TV
							<span class="nomobile"> Shows</span>
						</span>
						<input type="text" name="s" class="form-control" placeholder="Search for..." style="border:none; border-bottom:2px solid #222222;	  ">
							<span class="input-group-btn">
								<button class="btn btn-primary" type="submit" style="margin-left:10px;border:none;">
									<span class="icon-magnifier"></span>
								</button>
							</span>
						</div>
					</form>
					<ul class="nav navbar-nav navbar-left">
						<li>
							<a href="/movie/" style="color:white;">
								<span class="icon icon-film" style="color:#FF0D0D"></span> Movies
							</a>
						</li>
						<li>
							<a href="/tv/"  style="color:white;">
								<span class="icon fa fa-television" style="color:#FF0D0D"></span> TV Shows
							</a>
						</li>
						<li>
							<a href="<?php echo site_url() ?>/?action=register"  style="color:white;">
								<span class="icon icon-cloud-download" style="color:#FF0D0D"></span> Download
							</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		<nav id="side-menu" class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
			<a class="navmenu-brand" href="<?php echo site_url() ?>"><?php echo config('sitename') ?></a>
			<ul class="nav navmenu-nav">
				<li class="active">
					<a href="<?php echo site_url() ?>">
						<span class="icon icon-home"></span> Homepage
					</a>
				</li>
				<li>
					<a href="<?php echo site_url() ?>/movie/">
						<span class="icon icon-film"></span> Movies
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo view_page( 'movies-nowplay' );?>">Now Playing</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'popular-movies' );?>">Popular</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'toprated-movies' );?>">Top Rated</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'upcoming-movies' );?>">Coming Soon</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo site_url() ?>/tv/">
						<span class="icon fa fa-television"></span> TV Shows
					</a>
					<ul class="sub-menu">
						<li>
							<a href="<?php echo view_page( 'tv-airing' );?>">Airing</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'tv-popular' );?>">Popular</a>
						</li>
						<li>
							<a href="<?php echo view_page( 'tv-ontheair' );?>">On The Air</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="<?php echo site_url() ?>/?action=register">
						<span class="icon icon-cloud-download"></span> Download
					</a>
				</li>
			</ul>
		</nav>
	</header>