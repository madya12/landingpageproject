<?php 
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G12
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head itemscope itemtype="https://schema.org/WebSite">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title itemprop="name"><?php oc_title();?></title>
    <meta name="description" content="<?php oc_description();?>">
    <meta name="keywords" content="<?php echo config('sitekeywords');?>" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="author" content="admin">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="<?php oc_title() ?>" />
    <meta property="og:description" content="<?php oc_description();?>">
    <meta property="og:type" content="website" />
    <meta property="og:author" content="Admin">
    <meta property="og:site_name" content="<?php echo config('sitename') ?>">
    <meta property="og:url" content="<?php echo site_uri() ?>" />
    <meta property="og:image" content="https://g-silvers.website/images/d12.png" />
    <?php if (isset($images)): ?>
        <meta property="og:image" content="<?php echo $images ?>" />
        <?php else: ?>
        <?php endif ?>
        <link href="https://fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php style_theme();?>/css/style.min.css">
        <link href="<?php style_theme();?>/css/fbfeed.css" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js" type="text/javascript"></script>
        <link rel="shortcut icon" href="<?php echo site_url() . '/assets/images/'.config('favicon')?>">
        <link href="<?php style_theme() ?>/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php style_theme() ?>/css/owl.theme.css" rel="stylesheet">
        <link href="//cdn.bootcss.com/animate.css/3.5.2/animate.min.css" rel="stylesheet">
        <!--[if lt IE 9]> <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script> <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script> <![endif]-->

        

        <?php
  $bg = array('bg-01.jpg', 'bg-02.jpg', 'bg-03.jpg', 'bg-04.jpg', 'bg-05.jpg', 'bg-06.jpg', 'bg-07.jpg', 'bg-08.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
  ?>
  <?php
  $bg = array('https://github.com/galihsophian/galihsophian.github.io/blob/master/Movie%201.mp4?raw=true"', 'https://github.com/galihsophian/galihsophian.github.io/blob/master/Movie%202.mp4?raw=true"', 'https://github.com/galihsophian/galihsophian.github.io/blob/master/Movie%203.mp4?raw=true"', 'https://github.com/galihsophian/galihsophian.github.io/blob/master/Movie%204.mp4?raw=true"', 'https://github.com/galihsophian/galihsophian.github.io/blob/master/Movie%205.mp4?raw=true"' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedVd = "$bg[$i]"; // set variable equal to which random filename was chosen
  ?>
  <style type="text/css">
    .body-home {
        background-image: url(<?php style_theme();?>/images/<?php echo $selectedBg; ?>);
        background-repeat: no-repeat;
        background-size: cover;
        background-color: black;
    }
    .logo {
        font-size: 20px;
        margin-top: 15px;
        color: #FFF;
    }
    .nav-tabs {
        border-bottom: 1px solid #0003;
        background: #040404e3;
    }
    .nav-tabs h2 {
        padding-top: 15px;
        padding-right: 20px;
        margin-top: 0px;
        color: white;
        font-weight: normal;
    }
    .movie-detail p, .movie-detail td, .movie-detail i {
        color: #c3c3c3!important;
        font-size: 15px!important;
        text-shadow: 0 0px 0px #313131!important;
    }
    .form-control {
        background-color: #050505ba;
        border: 1px solid #111311;
        color: #a6a6a6;
    }
    .movie-detail a {
        color: #6d96b7!important;
        font-size: 15px!important;
        text-shadow: 0 0px 0px #313131!important;
    }
    .link {
        color: #6d96b7!important;
    }
    .image-cover:hover ~ .btn-playnow {
        color: white;
    }
    .btn-group, .btn-group-vertical {
        margin: auto;
        display: table!important;
        margin-top: 50px;
    }
    .modal-content h5 {
        color: #ddd!important;
    }
    .modal-content ol {
        margin-left: 30px;
    }
    .btn-primary {
        color: #fff;
        background-color: #337ab7;
        border-color: transparent!important;
        -webkit-box-shadow: 0 0px 0 0 rgba(0,0,0,.2) inset;
        box-shadow: 0 0px 0 0 rgba(0,0,0,.2) inset;
    }
    .bg-info {
        background-color: #0e0d0d;
        border-bottom: solid 1px #0e0e0e;
        border-top: solid 1px #0e0e0e;
    }
    .bg-info h4 {
        color: #ddd!important;
    }
    .modal-content {
        position: relative;
        background-color: #1e1d1d;
        border: 1px solid #999;
        border: 10px solid rgba(255, 255, 255, 0.2);
        outline: 0;
        -webkit-box-shadow: 0 3px 9px rgba(0,0,0,.5);
        box-shadow: 0 3px 9px rgba(0,0,0,.5);
        color: #ddd!important;
    }
    .btn-playnow {
        visibility: visible; 
        color: #ffffffb0; 
        font-size: 72px; 
        position: absolute; 
        margin: auto; 
        top: -20%; 
        left: 45%; 
        z-index: 9999; 
        height: 0px; 
        bottom: 0px;
    }
    .btn-playnow:hover {
        color: white;
    }

    .panel-body {
        background: black!important;
    }
    .logobar {
        background-color: #3b599800!important;
        font-family: asap!important;
        font-weight: bold;
    }
    .searchbox form {
        padding-right: 0px!important;
    }
    .btn {
        border-radius: 0px;
    }
    .table-striped>tbody>tr:nth-child(odd)>td, .table-striped>tbody>tr:nth-child(odd)>th {
        background-color: #131313;
        border: 1px solid #090909;
    }
    .table-bordered, .table-bordered>tbody>tr>td, .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>td, .table-bordered>tfoot>tr>th, .table-bordered>thead>tr>td, .table-bordered>thead>tr>th {
        border: 1px solid #090909;
        background: black;
    }
    .searchbox input[type=text] {
        background: #333;
        border: 1px solid #333;
        float: left;
        height: 40px;
        width: 100%;
        border-radius: 5px;
        padding: 0 0px 0 8px;
        color: #ccc;
        font-weight: normal;
    }
    header.style2 .searchbox input[type=submit] {
        border-left: #4C4F57 solid 1px;
        height: 32px;
    }
    .list-group-item {
        background-color: #0b0b0b;
        border: 1px solid transparent;
    }
    .list-group-item p {
        color : #818181;
    }
    .list-group-item h4 {
        color : #aaa;
        font-weight: 600!important;
    }
    .pagination {
        padding-left: 0;
        margin: 20px 0 0;
        width: 100%;
        border: 1px solid #080808;
        background: #040404;
    }
    .pagination>li>a, .pagination>li>span {
        position: relative;
        float: left;
        padding: 10px 20px;
        margin-left: -1px;
        line-height: 1.42857143;
        font-size: 14px;
        text-decoration: none;
        border-right: 1px solid #080808;
    }
    .pagination a {
        color: #929292;
    }
    .backcolor, .backcolorhover:hover, .categorieslist ul li.active, .categorieslist ul li:hover, .nav-tabs>li.active>a, .nav-tabs>li.active>a:focus, .nav-tabs>li>a:hover, .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover, .ui-datepicker-calendar .ui-state-active, .ui-datepicker-calendar .ui-state-hover, .ui-datepicker-header {
        background-color: #0096D6 !important;
    }
    .navbar-brand, .navbar-nav>li>a {
        text-shadow: 0 0px 0 rgba(255,255,255,.25);
    }
    .navbar-default .navbar-nav>li>a {
        color: #0096D6;
        font-size: 15px;
        font-weight: normal;
        text-transform: uppercase;
    }
    .navbar-default .navbar-nav>li>a:hover {
        color: #333;
        font-size: 15px;
        font-weight: normal;
        text-transform: uppercase;
    }
    .navbar-default .navbar-nav>li>a .active {
        color: #fff;
        font-size: 15px;
        font-weight: normal;
        text-transform: uppercase;
    }
    .single {
        margin-top: 10px!important;
        margin-bottom: 20px!important;
    }
    .loginsec a {
        color: #b5b5b5 !important;
    }
    .releases h1 {
        margin-bottom: 0px!important;
        background: #fff!important;
        margin-top: 20px;
        color: #0096D6!important;
    }
    .btn-hover:hover {
        opacity: 0.8;
    }
    .navigationstrip {
        background: #040404;
        margin-bottom: 0px!important;
        border-bottom: 0px!important;
        border-top: solid 5px #0a0a0a!important;
    }
    .poster_path {
        height: 260px!important;
    }
    .backdrop_path {
        height: 150px!important;
    }
    .movie-list-title {
        position: absolute;
        bottom: 0px;
        left: 0px;
        right: 0px;
        padding: 10px;
        margin: 0;
        background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, transparent), color-stop(100%, rgba(67,89,101,0.85)));
        background: -webkit-linear-gradient(top, transparent 0%, rgba(67,89,101,0.85) 100%);
        background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.85) 100%);
    }
    .nav .open>a, .nav .open>a:focus, .nav .open>a:hover {
        background-color: #000!important;
        border-color: #000000!important;
        color: white!important;
    }
    .navbar-nav>li>.dropdown-menu {
        margin-top: -1px!important;
        border: 0px!important;
        background: black!important;
    }
    .navbar-nav li ul li a {
        color: #c7c7c7!important;
    }
    .navbar-nav li ul li a:hover {
        background: #0a0a0a!important;
    }
    .movie-detail tr {
        border-bottom: 1px solid rgba(185, 185, 185, 0.07);
    }
    .iframe, .impl, #intro, .black {
        height: 650px!important;
    }
    #playnow {
        top: -20%;
    }
    .search-content {
        background-color: #000000a3; 
        width: 100%; 
        overflow: hidden; 
        padding-top: 20px!important; 
        padding: 10px;
        text-align: center;
    }


    @media only screen and (max-width: 500px) {
        .searchbox form {
            float: left;
            width: 100%;
            margin-top: 10px;
            margin-left: 0px;
            padding: 0px;
        }
        .searchbox input[type=text], .searchbox ul {
            width: 100%;
        }
        #intro, .black {
            height: 300px!important;
        }
        .impl {
            width: 100%;
            height: inherit!important;
        }
        #playnow {
            top: -45%!important;
        }
        .iframe {
            min-height: 200px!important;
            max-height: 300px!important
        }

        .logo img {
            margin: auto;
            display: table;
            margin-bottom: 20px;
        }
        .search-content {
            background-color: #000000a3!important; 
            width: 100%; 
            overflow: hidden; 
            padding: 5px; 
            text-align: center;
        }
        .custom-container {
            width: 100%;
            margin: 0%;
        }
        .contents {
            margin-top: -15px;
            padding-top: 0px;
        }

        .navigationstrip {
            width: 100%;
            margin-bottom: 20px;
            padding-left: 10px;
            overflow-x:scroll;            
        }
        .content-responsive {
            margin-top: 20px
        }
        .content-responsive ul li a {
            padding-top: 5px;
            padding-bottom: 5px;
            border-radius: 0px!important;
        }
        .yamm .navbar-collapse {
            position: relative;
            z-index: 99;
            left: 0;
            top: 20px!important;
            width: 250%;
            background: #040404;
            border: 1px solid #040404!important;
        }
        .poster_path {
            height: 230px!important;
        }
        .backdrop_path {
            height: 100px!important;
        }
        #cover-bottom, #cover-top {
            display: none;
        }
        #magelo-player {
            width: 100%;
            margin-left: 0px;
        }
        .menu-responsive {
            padding-right: 0px;
            padding-left: 0px;
        }
        .navbar-default .navbar-nav>li>a:hover {
        color: #333;
        font-size: 15px;
        font-weight: normal;
        text-transform: uppercase;
    }
    }








    .player-container{line-height:0;background-color:#000;}
    #playnow{visibility:hidden;cursor: pointer;width:100%;height:100%;outline:none;line-height:0;top:0;left:0;}
    #playnow .fa {display: initial;}
    .movie-loading{position:absolute;width:100%;height:100%;z-index:400;top:0;left:0;background: #000;}
    .movie-loader{width:100%;height:100%;background:transparent url(images/preloader15.gif) center center no-repeat;display:block;}
    .ld1 .movie-loader{background-image:url(images/preloader1.gif);}
    .ld2 .movie-loader{background-image:url(images/preloader2.gif);}
    .ld3 .movie-loader{background-image:url(images/preloader3.gif);}
    .ld4 .movie-loader{background-image:url(images/preloader4.gif);}
    .ld5 .movie-loader{background-image:url(images/preloader5.gif);}
    .ld6 .movie-loader{background-image:url(images/preloader6.gif);}
    .ld7 .movie-loader{background-image:url(images/preloader7.gif);}
    .ld8 .movie-loader{background-image:url(images/preloader8.gif);}
    .ld9 .movie-loader{background-image:url(images/preloader9.gif);}
    .ld10 .movie-loader{background-image:url(images/preloader10.gif);}
    .ld11 .movie-loader{background-image:url(images/preloader11.gif);}
    .ld12 .movie-loader{background-image:url(images/preloader12.gif);}
    .ld13 .movie-loader{background-image:url(images/preloader13.gif);}
    .ld14 .movie-loader{background-image:url(images/preloader14.gif);}
    .ld15 .movie-loader{background-image:url(images/preloader15.gif);}
    .ld16 .movie-loader{background-image:url(images/preloader16.gif);}
    .ld17 .movie-loader{background-image:url(images/preloader17.gif);}
    .shadow{position:absolute;width:100%;height:100%;display:block;z-index:100;top:0;left:0;}
    #playnow .fa:before{font-size:90px;color:#fff;opacity:0.7;position:absolute;left:50%;margin-left:-45px;top:50%;margin-top:-45px;text-shadow:0 0 100px #000;z-index:200;visibility:visible;}
    .player-container:hover > a img.impl{opacity:0.8;-webkit-transform:scale(1.2);-moz-transform:scale(1.2);-o-transform:scale(1.2);}
    .player-container:hover > a.bigplay #playnow .fa:before{color:#f00;text-shadow:0 0 8px #000;opacity:1;}
    #controls{width:100%;position:absolute;bottom:-45px;font-size:130%; background: rgba(0, 0, 0, 0.83);}
    .fixed #controls, #player:hover > #controls{bottom:0px;}
    .controls-wraper{margin: 0;padding:15px 15px 0;background-color:transparent!important;color:#999;position:relative;bottom: 0px;z-index: 300;line-height:0;height:45px;overflow:hidden;}
    .ctrlgrd .controls-wraper{background:#595757;background-image:-webkit-linear-gradient(top, #595757, #2b2b2b);background-image:-moz-linear-gradient(top, #595757, #2b2b2b);background-image:-ms-linear-gradient(top, #595757, #2b2b2b);background-image:-o-linear-gradient(top, #595757, #2b2b2b);background-image:linear-gradient(to bottom, #595757, #2b2b2b);border-radius:3px;}
    .cplay,.volume,.duration{display:inline-block;float:left;margin-right:15px;}
    a.play{color:#999;line-height:0;}
    .play:hover,.volume:hover,.quality:hover,.fullscreen:hover{cursor:pointer;color:#fff;}
    .duration{position:relative;float:left;font-size:13px;top:8px;color:#999;}
    .dmax{color:#fff;}
    .progress{display:block;margin:0 70px 0 130px;position:relative;top:3px;overflow:hidden;text-overflow:ellipsis;}
    .buffering, .marquee{position:relative;height:10px;background-color:#000;display:block;width:100%;}
    .marquee{line-height:13px;height:13px;color:#fff;font-size:13px;background-color:transparent;white-space:nowrap;-webkit-animation:rightThenLeft 10s infinite;top:-1px;}
    .ctrlgrd .buffering{background-color:#333;border-radius:5px;box-shadow:inset 0 0 6px #000, 0 1px rgba(255,255,255,.1);}
    .progressbar{position:absolute;height:10px;width:10px;background:#0099cc;display:block;top:0;left:0;}
    .ctrlgrd .progressbar{border-radius:50%;box-shadow:inset 0 0 5px #000, 1px 0 #000;}
    .buffering::after{content:'';opacity:0;position:absolute;top:0;right:0;bottom:0;left:0;background:#666;-webkit-animation:animate-shine 200s ease-in;-moz-animation:animate-shine 200s ease-in;animation:animate-shine 200s ease-in;}
    .quality,.fullscreen{position:absolute;display:inline-block;top:10px;}
    .quality{right:50px;}
    .fullscreen{right:15px;}
    .quality .hd{position:absolute;background:#c00;color:#fff;border-radius:2px;-webkit-border-radius:2px;-moz-border-radius:2px;font-family:Arial, Helvetica, sans-serif;font-size:7px;font-weight:bold;padding:1px 3px;top:-5px;left:8px;line-height:100%;}
    .nregister{line-height:1;text-align:center;color:#fff;font-weight:bold;position:absolute;margin:auto;top:0;right:0;bottom:0;left:0;width:100%;height:160px}
    .nregister .fa{font-size:50px;color:#eeb211;margin:0}
    .oops-wrapper{padding-top:5px;line-height:initial;font-size:initial;}
    .oops{color:#c00}
    .oops-target{color:#09c;cursor:pointer}
    .oops-target:hover{text-decoration:underline}
    #regplay{display:inline-block;margin-top:10px;}
    #regplay{background:#3498db;background-image:-webkit-linear-gradient(top,#3498db,#2980b9);background-image:-moz-linear-gradient(top,#3498db,#2980b9);background-image:-ms-linear-gradient(top,#3498db,#2980b9);background-image:-o-linear-gradient(top,#3498db,#2980b9);background-image:linear-gradient(to bottom,#3498db,#2980b9);-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px;text-shadow:1px 1px 3px #000;color:#fff;font-size:20px;padding:7px 15px 7px 15px;text-decoration:none}
    #regplay .fa{color:#fff;font-size:20px;margin-right:10px;}
    #regplay:hover{cursor:pointer;background:#3cb0fd;background-image:-webkit-linear-gradient(top,#3cb0fd,#3498db);background-image:-moz-linear-gradient(top,#3cb0fd,#3498db);background-image:-ms-linear-gradient(top,#3cb0fd,#3498db);background-image:-o-linear-gradient(top,#3cb0fd,#3498db);background-image:linear-gradient(to bottom,#3cb0fd,#3498db);text-decoration:none}

</style>
<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops.php"});
//]]>
</script>
<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.HORIZONTAL}, 'google_translate_element');
  }
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>

<body class="body-home">
    <div class="wrapper">
        <div class="container">
            <div class="">
                <header class="style2">
                    <div class="topstrip" style="height: 2px; background-color: #480204;">

                    </div>
                    <div class="logobar" style="margin-top: 20px; background: transparent;">
                        <div style="padding-left: 5px;">
                            <div class="row">
                                <div class="col-md-7 col-xs-12">
                                    <div class="logo"> 
                                        <a href="<?php echo site_url() ?>">
                                            <img src="<?php style_theme();?>/images/logo.png" style="height: 37px;">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-5 col-xs-12">
                                    <div class="searchbox">
                                        <form action="/" method="get">
                                            <ul>
                                                <li>
                                                    <input type="text" name="s" placeholder="Search Here...">
                                                </li>
                                                <li class="pull-right">
                                                    <input type="submit"  value="GO">
                                                </li>
                                            </ul>
                                        </form>
                                    </div>

                                </div>
                                <div class="col-lg-3 col-xs-12">
                                    <div id="google_translate_element" style="margin-top: 18px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
        </div>
        <div class="container menu-responsive">
            <div class="navigationstrip bordercolor-top" style="margin-top: 20px; background-color: #fff;">
                <div style="padding-left: 5px;">
                    <div class="row">
                        <div class="col-lg-10 col-md-9 col-sm-6 col-xs-4">
                            <div class="navigation">
                                <div class="navbar yamm navbar-default">
                                    <div class="row">
                                        <div class="navbar-header">
                                            <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle" aria-expanded="false"> <i class="fa fa-bars"></i> Menu </button>
                                        </div>
                                        <div id="navbar-collapse-1" class="navbar-collapse collapse ddsmoothmenu">
                                            <ul class="nav navbar-nav">
                                                <li><a href="<?php echo site_url() ?>"><i class="fa fa-home"></i> Home</a></li>
                                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-video-camera"></i> Movies <span class="caret"></span></a>
                                                    <ul class="dropdown-menu animated fadeIn" role="menu">
                                                        <li><a href="<?php echo view_page( 'movies-nowplay' );?>"><i class="fa fa-play-circle-o"></i> Now Playing</a></li>
                                                        <li><a href="<?php echo view_page( 'upcoming-movies' );?>"><i class="fa fa-random"></i> Upcoming</a></li>
                                                        <li><a href="<?php echo view_page( 'toprated-movies' );?>"><i class="fa fa-line-chart"></i> Top Rated</a></li>
                                                        <li><a href="<?php echo view_page( 'popular-movies' );?>"><i class="fa fa-trophy"></i> Popular</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-television"></i></i> TV Series <span class="caret"></span></a>
                                                    <ul class="dropdown-menu  animated fadeIn" role="menu">
                                                        <li><a href="<?php echo view_page( 'tv-airing' );?>"><i class="fa fa-random"></i> Airing TV Shows</a></li>
                                                        <li><a href="<?php echo view_page( 'tv-ontheair' );?>"><i class="fa fa-line-chart"></i> On the Air TV Shows</a></li>
                                                        <li><a href="<?php echo view_page( 'tv-popular' );?>"><i class="fa fa-star"></i> Popular TV Series</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-folder-open-o"></i></i> Genres <span class="caret"></span></a>
                                                    <ul class="dropdown-menu animated fadeIn" role="menu">
                                                        <?php if(isset($_cate)) foreach ($_cate as $cateid => $catename): ?>
                                                            <li><a href="<?php echo seocat( $catename,$cateid );?>"><?php echo ucwords($catename) ?></a></li>
                                                        <?php endforeach ?>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-3 col-sm-6 col-xs-8">
                          <div class="loginsec pull-right" style="a{color: black;}">
                            <a href="/?action=register&s2=59e4cf925fc61a59174d81ea&s3=59c4aa325fc61a765ec8715d"><i class="fa fa-sign-in"></i>Login / Register</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 item">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="google_translate_element"></div>
    </div>