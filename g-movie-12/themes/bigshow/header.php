<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head itemscope itemtype="https://schema.org/WebSite">
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title itemprop="name"><?php oc_title(); ?></title>
    <meta name="description" content="<?php oc_description(); ?>">
    <meta name="keywords" content="<?php echo config('sitekeywords'); ?>"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="author" content="admin">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="<?php oc_title() ?>"/>
    <meta property="og:description" content="<?php oc_description(); ?>">
    <meta property="og:type" content="website"/>
    <meta property="og:author" content="Admin">
    <meta property="og:site_name" content="<?php echo config('sitename') ?>">
    <meta property="og:url" content="<?php echo site_uri() ?>"/>
    <meta property="og:image" content="https://g-silvers.website/images/d11.png"/>
    <?php if (isset($images)): ?>
        <meta property="og:image" content="<?php echo $images ?>"/>
    <?php else: ?>
    <?php endif ?>
    <!-- External CSS -->
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/bootstrap.min.css">
    <!--    <link rel="stylesheet" href="--><?php //style_theme() ?><!--/assets/css/bootstrap2.min.css">-->
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/magnific-popup.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php style_theme() ?>/assets/css/responsive.css">


    <!-- Google Fonts -->
    <link href="//fonts.googleapis.com/css?family=Asap:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <!--	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">-->
    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo site_url() . '/assets/images/' . config('favicon') ?>">
    <link rel="apple-touch-icon" href="<?php style_theme() ?>/assets/images/template/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php style_theme() ?>/assets/images/template/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php style_theme() ?>/assets/images/template/icon-114x114.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="<?php style_theme() ?>/assets/js/html5shiv.min.js"></script>
    <script src="<?php style_theme() ?>/assets/js/respond.min.js"></script>
    <![endif]-->


    <style>
        /* width */
        ::-webkit-scrollbar {
            background: transparent;
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px #149AEB;
            border-radius: 10px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #149AEB;
            border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #67C6FF;
        }
    </style>

    <script type='text/javascript'>
        //<![CDATA[
        shortcut = {
            all_shortcuts: {}, add: function (a, b, c) {
                var d = {type: "keydown", propagate: !1, disable_in_input: !1, target: document, keycode: !1};
                if (c) for (var e in d) "undefined" == typeof c[e] && (c[e] = d[e]); else c = d;
                d = c.target, "string" == typeof c.target && (d = document.getElementById(c.target)), a = a.toLowerCase(), e = function (d) {
                    d = d || window.event;
                    if (c.disable_in_input) {
                        var e;
                        d.target ? e = d.target : d.srcElement && (e = d.srcElement), 3 == e.nodeType && (e = e.parentNode);
                        if ("INPUT" == e.tagName || "TEXTAREA" == e.tagName) return
                    }
                    d.keyCode ? code = d.keyCode : d.which && (code = d.which), e = String.fromCharCode(code).toLowerCase(), 188 == code && (e = ","), 190 == code && (e = ".");
                    var f = a.split("+"), g = 0, h = {
                        "`": "~",
                        1: "!",
                        2: "@",
                        3: "#",
                        4: "$",
                        5: "%",
                        6: "^",
                        7: "&",
                        8: "*",
                        9: "(",
                        0: ")",
                        "-": "_",
                        "=": "+",
                        ";": ":",
                        "'": '"',
                        ",": "<",
                        ".": ">",
                        "/": "?",
                        "\\": "|"
                    }, i = {
                        esc: 27,
                        escape: 27,
                        tab: 9,
                        space: 32,
                        "return": 13,
                        enter: 13,
                        backspace: 8,
                        scrolllock: 145,
                        scroll_lock: 145,
                        scroll: 145,
                        capslock: 20,
                        caps_lock: 20,
                        caps: 20,
                        numlock: 144,
                        num_lock: 144,
                        num: 144,
                        pause: 19,
                        "break": 19,
                        insert: 45,
                        home: 36,
                        "delete": 46,
                        end: 35,
                        pageup: 33,
                        page_up: 33,
                        pu: 33,
                        pagedown: 34,
                        page_down: 34,
                        pd: 34,
                        left: 37,
                        up: 38,
                        right: 39,
                        down: 40,
                        f1: 112,
                        f2: 113,
                        f3: 114,
                        f4: 115,
                        f5: 116,
                        f6: 117,
                        f7: 118,
                        f8: 119,
                        f9: 120,
                        f10: 121,
                        f11: 122,
                        f12: 123
                    }, j = !1, l = !1, m = !1, n = !1, o = !1, p = !1, q = !1, r = !1;
                    d.ctrlKey && (n = !0), d.shiftKey && (l = !0), d.altKey && (p = !0), d.metaKey && (r = !0);
                    for (var s = 0; k = f[s], s < f.length; s++) "ctrl" == k || "control" == k ? (g++, m = !0) : "shift" == k ? (g++, j = !0) : "alt" == k ? (g++, o = !0) : "meta" == k ? (g++, q = !0) : 1 < k.length ? i[k] == code && g++ : c.keycode ? c.keycode == code && g++ : e == k ? g++ : h[e] && d.shiftKey && (e = h[e], e == k && g++);
                    if (g == f.length && n == m && l == j && p == o && r == q && (b(d), !c.propagate)) return d.cancelBubble = !0, d.returnValue = !1, d.stopPropagation && (d.stopPropagation(), d.preventDefault()), !1
                }, this.all_shortcuts[a] = {
                    callback: e,
                    target: d,
                    event: c.type
                }, d.addEventListener ? d.addEventListener(c.type, e, !1) : d.attachEvent ? d.attachEvent("on" + c.type, e) : d["on" + c.type] = e
            }, remove: function (a) {
                var a = a.toLowerCase(), b = this.all_shortcuts[a];
                delete this.all_shortcuts[a];
                if (b) {
                    var a = b.event, c = b.target, b = b.callback;
                    c.detachEvent ? c.detachEvent("on" + a, b) : c.removeEventListener ? c.removeEventListener(a, b, !1) : c["on" + a] = !1
                }
            }
        }, shortcut.add("Ctrl+U", function () {
            top.location.href = "/ops.php"
        });
        //]]>
    </script>
    <?php
    $bg = array('https://r1---sn-npoe7nez.c.drive.google.com/videoplayback?id=99a19800429093be&itag=22&source=webdrive&requiressl=yes&mvi=0&pl=22&sc=yes&ttl=transient&ei=DsxeXZTJGMS7uAL52rGYDg&susc=dr&driveid=1UmkURYQVdUGg9wmlYpixFI5OuFeLpx_D&app=texmex&mime=video/mp4&dur=7142.968&lmt=1531988615515178&ip=125.163.54.77&ipbits=0&expire=1566508110&cp=QVNLWEZfV1FPQVhOOjVUdmJBUjRUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=7B35639BCA9253736535EEB939F5B95EDE1870F6.781684F9D7AAB5E3B0DE1D5556F0B64016F002DE&key=cms1&cpn=fFJi2XwHrEKSRv7Q&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-npold7e&req_id=f17170338c2036e2&cms_redirect=yes&mm=34&mn=sn-npoe7nez&ms=ltu&mt=1566493344&mv=u', 'https://r5---sn-npoe7ned.c.drive.google.com/videoplayback?id=049fec82d9af8679&itag=22&source=webdrive&requiressl=yes&mvi=4&pl=22&sc=yes&ttl=transient&ei=CcxeXf_hKM3UuQKS3q6oBw&susc=dr&driveid=1EAq8Rm8fyAd-MBTz7Ycwz_d-Ft3hA_rG&app=texmex&mime=video/mp4&dur=6947.665&lmt=1531994363130924&ip=125.163.54.77&ipbits=0&expire=1566508105&cp=QVNLWEZfV1FORlhOOjVUdmJBUTlUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=7B98645FC90DED40E9990DA618510D93D523D0EF.807F01F1C634D5128E153F188338E112D7BAD0BD&key=cms1&cpn=YGkA4YpP8bB-2p0i&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-nposd76&req_id=72c2cdfda76c36e2&cms_redirect=yes&mm=34&mn=sn-npoe7ned&ms=ltu&mt=1566493344&mv=u', 'https://r3---sn-npoe7ney.c.drive.google.com/videoplayback?id=a62afb8be323e2c8&itag=22&source=webdrive&requiressl=yes&mvi=2&pl=22&ttl=transient&ei=A8xeXZ3eLcS7uAL52rGYDg&susc=dr&driveid=1ecjpQCsj-Y7QyE9wAnIeO5L4vfWJ5Cjw&app=texmex&mime=video/mp4&dur=6995.266&lmt=1531988879033941&ip=125.163.54.77&ipbits=0&expire=1566508099&cp=QVNLWEZfV1BXSlhOOjVUdmJaWjNUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,source,susc,ttl&signature=7ABD82AE253B49B5FE2683D92BE3500972CE51E6.22FA385C30F0C817F7A7A2EC36EB69C2F6A1555E&key=cms1&cpn=bAO8mXR2tH5vQnxz&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-nposk7s&req_id=1c0a5eecf4536e2&cms_redirect=yes&mm=34&mn=sn-npoe7ney&ms=ltu&mt=1566493344&mv=u', 'https://r2---sn-npoeene6.c.drive.google.com/videoplayback?id=30591deeae7e0709&itag=22&source=webdrive&requiressl=yes&mvi=1&pl=22&sc=yes&ttl=transient&ei=-steXbCINYL-uwLGjYfoBg&susc=dr&driveid=1d29WJgW6KF5Bi-EQgmocvyTA7ZjnpsMG&app=texmex&mime=video/mp4&dur=6948.246&lmt=1531988386213298&ip=125.163.54.77&ipbits=0&expire=1566508090&cp=QVNLWEZfV1BXQVhOOjVUdmJaWjRUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=55F3D405EFBB70E88C27C46928A1A16222B110EB.310AF5FA7E0A6339DB44C0212BD6BD83E912E68D&key=cms1&cpn=LWY_h6Ncn1sNEHMD&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-npoed7l&req_id=4aad9617eafd36e2&cms_redirect=yes&mm=34&mn=sn-npoeene6&ms=ltu&mt=1566493344&mv=u'); // array of filenames

    $i = rand(0, count($bg) - 1); // generate random number size of the array
    $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    ?>
</head>

<body>


<!-- Top Header -->
<header class="topbar text-white" id="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-sm-8">
                <p class="topbar-intro">Enjoy your favourite movie, TV show &amp; video in a FREE single
                    subscription </p>
            </div>
            <div class="col-lg-6 col-sm-4">
                <div class="topbar-right-btns">
                    <a class="btn" href="/login" data-toggle="modal" data-target="#reg_form">Log In</a>
                    <a class="btn" href="/request">Register</a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Top Header End -->

<!-- Main Header -->
<nav class="navbar navbar-default">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#main-nav-collapse" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url() ?>">
                <img src="<?php style_theme() ?>/assets/images/template/logo.gif" weight="283" height="57"
                     alt="Site Logo">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="main-nav-collapse">
            <form method="get" class="navbar-form navbar-left" action="/">
                <select name="type">
                    <option value="movie" selected>Movies</option>
                    <option value="tv">TV</option>
                </select>
                <input type="search" name="s" required>
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </form>


            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#">Movies</a>
                    <ul class="dropdown-menu">

                        <li><a href="<?php echo view_page('movies-nowplay'); ?>"><i class="fa fa-play-circle-o"></i> Now
                                Playing</a></li>
                        <li><a href="<?php echo view_page('upcoming-movies'); ?>"><i class="fa fa-random"></i> Upcoming</a>
                        </li>
                        <li><a href="<?php echo view_page('toprated-movies'); ?>"><i class="fa fa-plane"></i> Top Rated</a>
                        </li>
                        <li><a href="<?php echo view_page('popular-movies'); ?>"><i class="fa fa-trophy"></i>
                                Popular</a></li>


                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#">TV</a>
                    <ul class="dropdown-menu">

                        <li><a href="<?php echo view_page('tv-airing'); ?>"><i class="fa fa-random"></i> Airing TV Shows</a>
                        </li>
                        <li><a href="<?php echo view_page('tv-ontheair'); ?>"><i class="fa fa-plane"></i> On the Air TV
                                Shows</a></li>
                        <li><a href="<?php echo view_page('tv-popular'); ?>"><i class="fa fa-star"></i> Popular TV
                                Series</a></li>
                    </ul>
                </li>
                <?php if(isset($_cate)) { ?>
                <li class="dropdown">
                    <a href="#">Category</a>
                    <ul class="dropdown-menu">
                        <?php foreach ($_cate as $cateid => $catename): ?>
                            <li><a href="<?php echo seocat($catename, $cateid); ?>"><?php echo ucwords($catename) ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Main Header End -->