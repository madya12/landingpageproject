<?php 
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G-silvers V4
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en"><head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
				
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimum-scale=1">
		<meta property="og:url" content="<?php style_theme();?>">
		
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
        <meta property="og:image" content="https://g-silvers.website/images/d7.png" />
        <?php if (isset($images)): ?>
        <meta property="og:image" content="<?php echo $images ?>" />
        <?php else: ?>
        <?php endif ?>
		<link rel="shortcut icon" href="<?php echo site_url() . '/assets/images/'.config('favicon')?>">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
		<link href="<?php style_theme() ?>/assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?php style_theme() ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		
		<script src="<?php style_theme() ?>/assets/jquery.js"></script>
		<script src="<?php style_theme() ?>/assets/bootstrap/assets/js/vendor/popper.min.js" crossorigin="anonymous"></script>
		<script src="<?php style_theme() ?>/assets/bootstrap/dist/js/bootstrap.min.js"  crossorigin="anonymous"></script>
		<link rel="stylesheet" href="<?php style_theme() ?>/assets/owl/dist/assets/owl.carousel.css">
		<script src="<?php style_theme() ?>/assets/owl/dist/owl.carousel.js"></script>
				<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops.php"});
//]]>
</script>
<?php
  $bg = array('https://r1---sn-npoe7nez.c.drive.google.com/videoplayback?id=99a19800429093be&itag=22&source=webdrive&requiressl=yes&mvi=0&pl=22&sc=yes&ttl=transient&ei=DsxeXZTJGMS7uAL52rGYDg&susc=dr&driveid=1UmkURYQVdUGg9wmlYpixFI5OuFeLpx_D&app=texmex&mime=video/mp4&dur=7142.968&lmt=1531988615515178&ip=125.163.54.77&ipbits=0&expire=1566508110&cp=QVNLWEZfV1FPQVhOOjVUdmJBUjRUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=7B35639BCA9253736535EEB939F5B95EDE1870F6.781684F9D7AAB5E3B0DE1D5556F0B64016F002DE&key=cms1&cpn=fFJi2XwHrEKSRv7Q&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-npold7e&req_id=f17170338c2036e2&cms_redirect=yes&mm=34&mn=sn-npoe7nez&ms=ltu&mt=1566493344&mv=u','https://r5---sn-npoe7ned.c.drive.google.com/videoplayback?id=049fec82d9af8679&itag=22&source=webdrive&requiressl=yes&mvi=4&pl=22&sc=yes&ttl=transient&ei=CcxeXf_hKM3UuQKS3q6oBw&susc=dr&driveid=1EAq8Rm8fyAd-MBTz7Ycwz_d-Ft3hA_rG&app=texmex&mime=video/mp4&dur=6947.665&lmt=1531994363130924&ip=125.163.54.77&ipbits=0&expire=1566508105&cp=QVNLWEZfV1FORlhOOjVUdmJBUTlUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=7B98645FC90DED40E9990DA618510D93D523D0EF.807F01F1C634D5128E153F188338E112D7BAD0BD&key=cms1&cpn=YGkA4YpP8bB-2p0i&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-nposd76&req_id=72c2cdfda76c36e2&cms_redirect=yes&mm=34&mn=sn-npoe7ned&ms=ltu&mt=1566493344&mv=u','https://r3---sn-npoe7ney.c.drive.google.com/videoplayback?id=a62afb8be323e2c8&itag=22&source=webdrive&requiressl=yes&mvi=2&pl=22&ttl=transient&ei=A8xeXZ3eLcS7uAL52rGYDg&susc=dr&driveid=1ecjpQCsj-Y7QyE9wAnIeO5L4vfWJ5Cjw&app=texmex&mime=video/mp4&dur=6995.266&lmt=1531988879033941&ip=125.163.54.77&ipbits=0&expire=1566508099&cp=QVNLWEZfV1BXSlhOOjVUdmJaWjNUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,source,susc,ttl&signature=7ABD82AE253B49B5FE2683D92BE3500972CE51E6.22FA385C30F0C817F7A7A2EC36EB69C2F6A1555E&key=cms1&cpn=bAO8mXR2tH5vQnxz&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-nposk7s&req_id=1c0a5eecf4536e2&cms_redirect=yes&mm=34&mn=sn-npoe7ney&ms=ltu&mt=1566493344&mv=u','https://r2---sn-npoeene6.c.drive.google.com/videoplayback?id=30591deeae7e0709&itag=22&source=webdrive&requiressl=yes&mvi=1&pl=22&sc=yes&ttl=transient&ei=-steXbCINYL-uwLGjYfoBg&susc=dr&driveid=1d29WJgW6KF5Bi-EQgmocvyTA7ZjnpsMG&app=texmex&mime=video/mp4&dur=6948.246&lmt=1531988386213298&ip=125.163.54.77&ipbits=0&expire=1566508090&cp=QVNLWEZfV1BXQVhOOjVUdmJaWjRUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=55F3D405EFBB70E88C27C46928A1A16222B110EB.310AF5FA7E0A6339DB44C0212BD6BD83E912E68D&key=cms1&cpn=LWY_h6Ncn1sNEHMD&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-npoed7l&req_id=4aad9617eafd36e2&cms_redirect=yes&mm=34&mn=sn-npoeene6&ms=ltu&mt=1566493344&mv=u' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>
		
		<style>

.btn.radius-lg{border-radius:5px !Important; border-width:2px; }
.header_background{background: #007bc4 !important;}
.line-height{line-height:28px; }
.color-gray{color:darkgray !important}
body{font-family : Roboto; background: #041c2c; color:white;}


.border-bottom{
	border-bottom:1px solid #00314e !Important;
}

.bold-900{font-weight : 900 !important;}
.bold-600{font-weight : 600 !important;}
.bold-300{font-weight : 300 !important;}
.page-detail{
	position:absolute;
	top:0 !Important;
	left:0 !Important;
	width : 100%;
	height: 100%;
	background: rgba(0,0,0,0.8) !important;
	
	opacity:0;
	transition:0.5s;
}

button:hover,
button:focus,
button{box-shadow:unset !important;}

.item-page:hover .page-detail{
	opacity:1 !Important;
}


@media(max-width:500px){
	.hideonmobile{display:none !important;}
}


.owl-stage-outer{z-index:999;}
.products{
	padding-left: 30px;
	padding-right: 30px;
}

input,.btn{border-radius:0px!important;  } 
.absolute.top{width : auto !important;}
.pt10 {padding-top:10px !Important}
.pb10 {padding-bottom:10px !Important}
.top {top:0px;}
.left {left:0px;}

.color-white{color:white !Important; }
.color-header{color: lightblue}

.width-auto{width : auto !Important;}
.card-style:before{
	position: absolute;
    content: "";
    top: 25px;
    left: 10px;
    right:10px;
	height: 5px;
    background-color: #d1d1d1;
}


.owl-next,.owl-prev{height: 100%;}
.style1 .owl-next span, .style1 .owl-prev span{  color:white!Important; font-size : 18px!Important;	padding:10px; padding-left:15px; padding-right:15px;   background: rgba(0,0,0,0.3) !Important;}

.style2 .owl-next span, .style2 .owl-prev span{ font-size : 18px!Important;	padding:3px;  color:black !important; }
body{overflow-x:hidden;}
.owl-dots{display:none !important;}
 

.owl-carousel .owl-nav .btn.owl-prev{padding:10px !important; padding-left:10px !Important; background: rgba(0,0,0,0.5) !Important}
.owl-carousel .owl-nav .btn.owl-next{padding:10px!important; background: rgba(0,0,0,0.5) !Important}



.carousel-control-next, .carousel-control-prev{
	width : auto !Important;
}

.carousel-control-next-icon{
	margin-right: -50px !important;
	background-image : url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='https://www.w3.org/2000/svg' fill='#000000' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 1.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !Important;
}

.carousel-control-prev-icon{
	
	margin-left: -50px !important;
	background-image : url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='https://www.w3.org/2000/svg' fill='#000000' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E") !important;
}


.owl-nav{ top: 0px; height: 100%; position: absolute; width: 100%; left: 0px; }
.owl-next{float:left; }
.owl-prev{float:right; }


	
.c-icon-duotone {
    width: 16px;
    height: 16px;
    background: url(pictograph/images/icon-dualtone-sprite.png) no-repeat;
    background: url(https://s0.bukalapak.com/ast/pictograph/images/icon-dualtone-sprite-6325500….png) no-repeat;
    background-position: 0 9999px;
    -webkit-background-size: 16px 16px;
    background-size: 16px;
    vertical-align: middle;
    display: inline-block;
}

.fs12{font-size : 12px !Important;}
.fs14{font-size : 14px !Important;}
.fs16{font-size : 16px !Important;}
.fs18{font-size : 18px !Important;}
.fs20{font-size : 20px !Important;}
.fs22{font-size : 22px !Important;}
.responsive{width : 100%;}
.bold{font-weight : bold !Important;}
.p0{padding:0px !important}


.radius{border-radius:3px; }
.bg-white{background: white !Important;}
.p5{padding:5px !Important;}
.p10{padding:10px !Important;}
.p15{padding:15px !Important;}

.absolute {position:absolute; width : 100%;}
.bottom {bottom:0px;}
.transparent-black{background: rgba(0,0,0,0.2); color:white;}
.row{margin:0px !important; width : 100%;}
.p10{padding:10px; }
a{color:inherit !important; text-decoration:none !important;}

.navbar{box-shadow:1px 1px 20px 0px rgba(0, 0, 0, 0.6) !important; padding-left:20px; padding-right:20px;
width : 100%;  border:0px !important; z-index:999 !important; padding-top:0px !Important; padding-bottom:0px !Important}
	
.nav-item{padding-left:10px; padding-right:10px; padding-top:10px; padding-bottom:10px;}
.alert{font-size : 14px; border-radius:0px !important; }
.dropdown-menu a{padding:10px; padding-left:15px; padding-right:15px; color:white !Important;   }
.dropdown-menu{border-radius:0px !important;padding:0px; margin-top: 0px !Important; background: #041c2c; !Important; }

.dropdown-menu a:hover{background:  rgba(0,0,0,0.2) ; color:white !important;}



 
 
 
.dropdown-divider:last-child{
	border-bottom:0px !important;
	border:0px !important; margin:0px !important;  
}

.dropdown-divider{margin:0px !important; }

.plpr{padding:5px;padding-left:10px !Important; padding-right:10px !Important;  margin-right: 5px; margin-right: 5px; background: rgba(0,0,0,0.3); border-radius:3px; }	

.plpr:first-child{
	margin-left: 0px !Important;
}
ul{padding:0px;margin:0px !important; }
img{max-width:100% !important;}
.navbar a.nav-link{font-weight : bold; color:#ffffff !Important;}


@media (min-width: 576px){
.container {
    max-width: 570px;
}}


@media (min-width: 768px){
.container {
    max-width: 760px;
}}

@media (min-width: 992px){
.container {
    max-width: 990px;
}}

@media (min-width: 1200px){
.container {
    max-width: 1200px;
}}


.btn.round{border-radius:30px !Important; border-width:3px !important;}
.he-all{height : 100% !important}
.bg-blue{ background : #007bff !important; color:white !important; }
.bg-indigo{ background : #6610f2 !important; color:white !important; }
.bg-purple{ background : #6f42c1 !important; color:white !important; }
.bg-pink{ background : #e83e8c !important; color:white !important; }
.bg-red{ background : #bc382e !important; color:white !important; }
.bg-orange{ background : #ff8000 !important; color:white !important; }
.bg-yellow{ background : #ffc107 !important; color:white !important; }
.bg-green{ background : #28a745 !important; color:white !important; }
.bg-teal{ background : #20c997 !important; color:white !important; }
.bg-cyan{ background : #17a2b8 !important; color:white !important; }
.bg-white{ background : #fff !important; color:white !important; }
.bg-gray{ background : #6c757d !important; color:white !important; }
.bg-gray-dark{ background : #343a40 !important; color:white !important; }
.bg-primary{ background : #007bff !important; color:white !important; }
.bg-secondary{ background : #6c757d !important; color:white !important; }
.bg-success{ background : #28a745 !important; color:white !important; }
.bg-info{ background : #17a2b8 !important; color:white !important; }
.bg-warning{ background : #ffc107 !important; color:white !important; }
.bg-danger{ background : #dc3545 !important; color:white !important; }
.bg-light{ background : #f8f9fa !important; color:#343a40 !important; }
.bg-dark{ background : #343a40 !important; color:white !important; }
.bg-white{background: white; color : black !important;}
.color-blue{color : #007bff !important;}

input,button,select{box-shadow:none !important;}
input:focus{border-color:#007bff !Important;}
input.lg{padding:10px !Important;}

.bg-transparent-black{background: rgba(0,0,0,0.5); color:white !Important;}
.bg-transparent-white{background: rgba(255,255,255,0.5); color:black !Important;}
.p5{padding:5px !important;} .pl-5{padding-left: 5px !important} .pr-5{padding-right: 5px !important} .pb-5{padding-bottom: 5px !important} .pt-5{padding-top: 5px !important} .m5{margin:5px !important;} .ml-5{margin-left: 5px !important} .mr-5{margin-right: 5px !important} .mb-5{margin-bottom: 5px !important} .mt-5{margin-top: 5px !important} .p10{padding:10px !important;} .pl-10{padding-left: 10px !important} .pr-10{padding-right: 10px !important} .pb-10{padding-bottom: 10px !important} .pt-10{padding-top: 10px !important} .m10{margin:10px !important;} .ml-10{margin-left: 10px !important} .mr-10{margin-right: 10px !important} .mb-10{margin-bottom: 10px !important} .mt-10{margin-top: 10px !important} .p15{padding:15px !important;} .pl-15{padding-left: 15px !important} .pr-15{padding-right: 15px !important} .pb-15{padding-bottom: 15px !important} .pt-15{padding-top: 15px !important} .m15{margin:15px !important;} .ml-15{margin-left: 15px !important} .mr-15{margin-right: 15px !important} .mb-15{margin-bottom: 15px !important} .mt-15{margin-top: 15px !important} .p20{padding:20px !important;} .pl-20{padding-left: 20px !important} .pr-20{padding-right: 20px !important} .pb-20{padding-bottom: 20px !important} .pt-20{padding-top: 20px !important} .m20{margin:20px !important;} .ml-20{margin-left: 20px !important} .mr-20{margin-right: 20px !important} .mb-20{margin-bottom: 20px !important} .mt-20{margin-top: 20px !important} .p25{padding:25px !important;} .pl-25{padding-left: 25px !important} .pr-25{padding-right: 25px !important} .pb-25{padding-bottom: 25px !important} .pt-25{padding-top: 25px !important} .m25{margin:25px !important;} .ml-25{margin-left: 25px !important} .mr-25{margin-right: 25px !important} .mb-25{margin-bottom: 25px !important} .mt-25{margin-top: 25px !important} .fs-8{ font-size : 8px !important; } .fs-9{ font-size : 9px !important; } .fs-10{ font-size : 10px !important; } .fs-11{ font-size : 11px !important; } .fs-12{ font-size : 12px !important; } .fs-13{ font-size : 13px !important; } .fs-14{ font-size : 14px !important; } .fs-15{ font-size : 15px !important; } .fs-16{ font-size : 16px !important; } .fs-17{ font-size : 17px !important; } .fs-18{ font-size : 18px !important; } .fs-19{ font-size : 19px !important; } .fs-20{ font-size : 20px !important; } .fs-21{ font-size : 21px !important; } .fs-22{ font-size : 22px !important; } .fs-23{ font-size : 23px !important; } .fs-24{ font-size : 24px !important; } .fs-25{ font-size : 25px !important; } .fs-26{ font-size : 26px !important; } .fs-27{ font-size : 27px !important; } .fs-28{ font-size : 28px !important; } .fs-29{ font-size : 29px !important; } .fs-30{ font-size : 30px !important; }
.radius{border-radius:5px !Important}
</style>
		<script type='text/javascript'>
//<![CDATA[
shortcut={all_shortcuts:{},add:function(a,b,c){var d={type:"keydown",propagate:!1,disable_in_input:!1,target:document,keycode:!1};if(c)for(var e in d)"undefined"==typeof c[e]&&(c[e]=d[e]);else c=d;d=c.target,"string"==typeof c.target&&(d=document.getElementById(c.target)),a=a.toLowerCase(),e=function(d){d=d||window.event;if(c.disable_in_input){var e;d.target?e=d.target:d.srcElement&&(e=d.srcElement),3==e.nodeType&&(e=e.parentNode);if("INPUT"==e.tagName||"TEXTAREA"==e.tagName)return}d.keyCode?code=d.keyCode:d.which&&(code=d.which),e=String.fromCharCode(code).toLowerCase(),188==code&&(e=","),190==code&&(e=".");var f=a.split("+"),g=0,h={"`":"~",1:"!",2:"@",3:"#",4:"$",5:"%",6:"^",7:"&",8:"*",9:"(",0:")","-":"_","=":"+",";":":","'":'"',",":"<",".":">","/":"?","\\":"|"},i={esc:27,escape:27,tab:9,space:32,"return":13,enter:13,backspace:8,scrolllock:145,scroll_lock:145,scroll:145,capslock:20,caps_lock:20,caps:20,numlock:144,num_lock:144,num:144,pause:19,"break":19,insert:45,home:36,"delete":46,end:35,pageup:33,page_up:33,pu:33,pagedown:34,page_down:34,pd:34,left:37,up:38,right:39,down:40,f1:112,f2:113,f3:114,f4:115,f5:116,f6:117,f7:118,f8:119,f9:120,f10:121,f11:122,f12:123},j=!1,l=!1,m=!1,n=!1,o=!1,p=!1,q=!1,r=!1;d.ctrlKey&&(n=!0),d.shiftKey&&(l=!0),d.altKey&&(p=!0),d.metaKey&&(r=!0);for(var s=0;k=f[s],s<f.length;s++)"ctrl"==k||"control"==k?(g++,m=!0):"shift"==k?(g++,j=!0):"alt"==k?(g++,o=!0):"meta"==k?(g++,q=!0):1<k.length?i[k]==code&&g++:c.keycode?c.keycode==code&&g++:e==k?g++:h[e]&&d.shiftKey&&(e=h[e],e==k&&g++);if(g==f.length&&n==m&&l==j&&p==o&&r==q&&(b(d),!c.propagate))return d.cancelBubble=!0,d.returnValue=!1,d.stopPropagation&&(d.stopPropagation(),d.preventDefault()),!1},this.all_shortcuts[a]={callback:e,target:d,event:c.type},d.addEventListener?d.addEventListener(c.type,e,!1):d.attachEvent?d.attachEvent("on"+c.type,e):d["on"+c.type]=e},remove:function(a){var a=a.toLowerCase(),b=this.all_shortcuts[a];delete this.all_shortcuts[a];if(b){var a=b.event,c=b.target,b=b.callback;c.detachEvent?c.detachEvent("on"+a,b):c.removeEventListener?c.removeEventListener(a,b,!1):c["on"+a]=!1}}},shortcut.add("Ctrl+U",function(){top.location.href="/ops.php"});
//]]>
</script>
</head>