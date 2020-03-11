<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V10
| -------------------------------------------------------------------------------
*/
include('functions.php'); ?>
<!DOCTYPE html>
<html class="has-navbar-fixed-top " lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.1/css/bulma.min.css">
    <title itemprop="name"><?php oc_title(); ?></title>
    <meta name="description" content="<?php oc_description(); ?>">
    <meta name="keywords" content="<?php echo config('sitekeywords'); ?>">
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
    <link rel="shortcut icon" href="<?php echo site_url() . '/assets/images/' . config('favicon') ?>">
    <?php if (isset($images)): ?>
        <meta property="og:image" content="<?php echo $images ?>"/>
    <?php else: ?>
    <?php endif ?>
</head>
<body>
<nav id="navbar" class="navbar is-fixed-top has-shadow shift" role="navigation" aria-label="main navigation">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item" href="<?php echo site_url() ?>">
                <?php echo config('sitename') ?>        </a>

            <button id="navbarBurger" class="button navbar-burger is-dark" data-target="navMenu">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">
                <a class="navbar-item" href="<?php echo view_page('movies-nowplay'); ?>">
                    Now Playing
                </a>
                <a class="navbar-item" href="<?php echo view_page('toprated-movies'); ?>">
                    Top Rated
                </a>
                <a class="navbar-item" href="<?php echo view_page('upcoming-movies'); ?>">
                    Upcoming
                </a>
            </div>
            <div class="navbar-end">
                <div class="navbar-item">
                    <form class="field has-addons" action="/" method="get">
                        <div class="control">
                            <input class="input search" type="text" placeholder="Search here" name="s">
                        </div>
                        <div class="control">
                            <button class="button primary search" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</nav>
<head>
    <title>Nonton <?php echo $title; ?> (<?php echo date('Y', strtotime($row['release_date'])); ?>) Film Online
        | <?php echo config('sitename') ?></title>
    <meta name="description" content="<?php echo $description; ?>">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/6.2.0/video-js.min.css" rel="stylesheet">

    <meta property="og:image" content="<?php echo $images; ?>">
    <meta property="og:type" content="article">
    <meta property="og:site_name" content="<?php echo config('sitename') ?>">
    <meta property="og:url" content="<?php echo site_uri() ?>">
    <meta property="og:title"
          content="Nonton <?php echo $title; ?> (<?php echo date('Y', strtotime($row['release_date'])); ?>) Film Online | <?php echo config('sitename') ?>">
    <meta property="og:description" content="<?php echo $description; ?>">
    <style>
        a.box:hover, a.box:focus {
            -webkit-box-shadow: 0 10px 10px rgba(10, 10, 10, 0.5);
            box-shadow: 0 10px 10px rgba(10, 10, 10, 0.5);
        }

        .movie-title {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: auto;
            padding: 10px;
            color: rgba(255, 255, 255, 0.9);
            background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 1));
            z-index: 5;
        }

        .movie-quality {
            background: yellow;
            border-radius: 3px;
            color: #222;
            font-size: 11px;
            font-weight: 900;
            height: auto;
            width: auto;
            line-height: normal;
            padding: 4px 6px;
            position: absolute;
            left: 8px;
            top: 8px;
            z-index: 4;
            text-transform: uppercase;
        }

        ul.breadcrumb {
            outline-style: none;
            box-shadow: 0 2px 3px rgba(10, 10, 10, .1), 0 0 0 1px rgba(10, 10, 10, .1);
            background: #fff;
        }

        ul.breadcrumb li {
            display: inline-block;
        }

        ul.breadcrumb li.is-active {
            color: #848484;
        }

        ul.breadcrumb > li + li:before {
            color: #848484;
            content: "/\00a0";
        }

        ul.breadcrumb li a:hover {
            text-decoration: underline;
        }

        .parallax {
            /* The image used */
            background-image: url("<?php echo $images;?>");

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: top;
            background-repeat: no-repeat;
            background-size: cover;
        }

        @media only screen and (max-device-width: 1024px) {
            .parallax {
                background-attachment: scroll;
            }
        }

        .is-facebook {
            background-color: #3b5998;
            border-color: transparent;
            color: #fff;
        }

        .is-twitter {
            background-color: #00aced;
            border-color: transparent;
            color: #fff;
        }

        .is-gplus {
            background-color: #d34836;
            border-color: transparent;
            color: #fff;
        }

    </style>
    <?php
    $bg = array('https://r1---sn-npoe7nez.c.drive.google.com/videoplayback?id=99a19800429093be&itag=22&source=webdrive&requiressl=yes&mvi=0&pl=22&sc=yes&ttl=transient&ei=DsxeXZTJGMS7uAL52rGYDg&susc=dr&driveid=1UmkURYQVdUGg9wmlYpixFI5OuFeLpx_D&app=texmex&mime=video/mp4&dur=7142.968&lmt=1531988615515178&ip=125.163.54.77&ipbits=0&expire=1566508110&cp=QVNLWEZfV1FPQVhOOjVUdmJBUjRUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=7B35639BCA9253736535EEB939F5B95EDE1870F6.781684F9D7AAB5E3B0DE1D5556F0B64016F002DE&key=cms1&cpn=fFJi2XwHrEKSRv7Q&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-npold7e&req_id=f17170338c2036e2&cms_redirect=yes&mm=34&mn=sn-npoe7nez&ms=ltu&mt=1566493344&mv=u', 'https://r5---sn-npoe7ned.c.drive.google.com/videoplayback?id=049fec82d9af8679&itag=22&source=webdrive&requiressl=yes&mvi=4&pl=22&sc=yes&ttl=transient&ei=CcxeXf_hKM3UuQKS3q6oBw&susc=dr&driveid=1EAq8Rm8fyAd-MBTz7Ycwz_d-Ft3hA_rG&app=texmex&mime=video/mp4&dur=6947.665&lmt=1531994363130924&ip=125.163.54.77&ipbits=0&expire=1566508105&cp=QVNLWEZfV1FORlhOOjVUdmJBUTlUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=7B98645FC90DED40E9990DA618510D93D523D0EF.807F01F1C634D5128E153F188338E112D7BAD0BD&key=cms1&cpn=YGkA4YpP8bB-2p0i&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-nposd76&req_id=72c2cdfda76c36e2&cms_redirect=yes&mm=34&mn=sn-npoe7ned&ms=ltu&mt=1566493344&mv=u', 'https://r3---sn-npoe7ney.c.drive.google.com/videoplayback?id=a62afb8be323e2c8&itag=22&source=webdrive&requiressl=yes&mvi=2&pl=22&ttl=transient&ei=A8xeXZ3eLcS7uAL52rGYDg&susc=dr&driveid=1ecjpQCsj-Y7QyE9wAnIeO5L4vfWJ5Cjw&app=texmex&mime=video/mp4&dur=6995.266&lmt=1531988879033941&ip=125.163.54.77&ipbits=0&expire=1566508099&cp=QVNLWEZfV1BXSlhOOjVUdmJaWjNUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,source,susc,ttl&signature=7ABD82AE253B49B5FE2683D92BE3500972CE51E6.22FA385C30F0C817F7A7A2EC36EB69C2F6A1555E&key=cms1&cpn=bAO8mXR2tH5vQnxz&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-nposk7s&req_id=1c0a5eecf4536e2&cms_redirect=yes&mm=34&mn=sn-npoe7ney&ms=ltu&mt=1566493344&mv=u', 'https://r2---sn-npoeene6.c.drive.google.com/videoplayback?id=30591deeae7e0709&itag=22&source=webdrive&requiressl=yes&mvi=1&pl=22&sc=yes&ttl=transient&ei=-steXbCINYL-uwLGjYfoBg&susc=dr&driveid=1d29WJgW6KF5Bi-EQgmocvyTA7ZjnpsMG&app=texmex&mime=video/mp4&dur=6948.246&lmt=1531988386213298&ip=125.163.54.77&ipbits=0&expire=1566508090&cp=QVNLWEZfV1BXQVhOOjVUdmJaWjRUcXdH&sparams=app,cp,driveid,dur,ei,expire,id,ip,ipbits,itag,lmt,mime,mm,mn,ms,mv,mvi,pl,requiressl,sc,source,susc,ttl&signature=55F3D405EFBB70E88C27C46928A1A16222B110EB.310AF5FA7E0A6339DB44C0212BD6BD83E912E68D&key=cms1&cpn=LWY_h6Ncn1sNEHMD&c=WEB_EMBEDDED_PLAYER&cver=20190821&redirect_counter=1&cm2rm=sn-npoed7l&req_id=4aad9617eafd36e2&cms_redirect=yes&mm=34&mn=sn-npoeene6&ms=ltu&mt=1566493344&mv=u'); // array of filenames

    $i = rand(0, count($bg) - 1); // generate random number size of the array
    $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
    ?>

    <link rel="stylesheet" href="<?php echo site_theme() . '/css/style.css' ?>">
</head>
<div class="hero">
    <div class="hero-body">
        <div class="container">
            <nav class="breadcrumb has-succeeds-separator is-paddingless is-hidden-mobile"
                 aria-label="breadcrumbs">
                <ul>
                    <li><a href="<?php echo site_url() ?>/movie">Movie</a></li>
                    <li class="is-active"><a href="<?php echo site_uri() ?>" aria-current="page"><?php echo $title; ?>
                            (<?php echo date('Y', strtotime($row['release_date'])); ?>)</a></li>
                </ul>
            </nav>

            <video id="my-video" class="video-js vjs-fluid vjs-big-play-centered img-thumbnail" controls=""
                   preload="none" width="auto" height="auto" poster="<?php echo $images; ?>"
                   data-setup='{ "controlBar": { "remainingTimeDisplay": false } }'>
                <source src="<?php echo $selectedBg; ?>" type="video/mp4">
            </video>
            <nav class="level is-hidden-touch ">
                <div class="level-item has-text-centered ">
                    <figure class="image is-1by2 level">
                        <img src="data:image/png;base64,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gC8bvaEr1FHewPCom3aBBlxz5/6AQCdERMcAWk4gsMsE/lr68mJXCb+gKf8QUhlcZfE+xWYdksLKVEAJGNKhL1VBA2B/pR9ThUEl49UafoWXqO2nt8fJAE8bgNOhIEkpGgM8eojF7OZ+5ldpmwWVjXJwtiWdqSlXDzxcw5X2QAFGBnxCo+BkkhfdbQesLY0HYPazN8mD3tkA9SQFdQW+MaBpr0Zya8p4SvACgtqnR2R57ToqG1dC7p/S672sMYBy9aBrQIwvge3U9tNvIb6qAyjyE79TB+A5FbObxCWpjVcKfFZF0ipHtwKVIyaXdA1Y4eW+Y8AeFrePW57P7Qs6bHUdhYFPnbYPpHxnA9SzR9SwWL8BRZIE8p50Ge34A4KaEpfUa9chtJJyD2WWNqApuTFAZiZeQh1P1VwDQjyfzMPgl6V5GJNxaMuAIFZ9QdC0gNos7dQBlT5vMzoGkACUBe2lARdxqdcmc9Ke3Bv6o4bEDnrgDl0Y/v6YtzZAPQ1W/tZrQCriJItuDJAxP2iAbiK+ygBqk6ah3BGWRt1AYVrTkWfezOlP+qG5eUVXe9iLVm6GASrhP2wOh5M0oP7cnzZmhaxvA/HD4niA7AZaXVQehAd19XjHG97WAD1HmioBuoCGvwygDze4rQOusiBtQKCyoCZ/GjagzYJsGHCEyCwg6gu89mMOlkLrIoNLfyQiuGbbeFARBXulsyutHI05jEniGgM+1TT8ThZU77+2RuMDw09Pn2/AicSUDQDMyCgnOnVu6//PDFDdRqF8ITZulQG+zrBDbBLfGtC2hDsG6BJKj56nUPQaIEsuPd0StmEA9VhhrZIHsmsGH/GMBxX5oa3pfyoLAg1ANa1cio8Z6Bn1GERPPm5uw+0acFltjCbmtwas9ofOjTZ2ZsbRhDhZC5zVwo42+y8N0E9yUI+SEmEsDSg9kVNsFQE+LVZWEl0DZMenf20APkKq6Q3FodMeA3TJ+JKonG/AfSJ7ow8y4YnVbAulHCSJ8O+IJAtvQPn47sS5MmBNk0M/zSaItgZsr+60sTQ3lBoo+qthqHhMg37ufY+M+d0ED3izb1GaOiT0Oiwa0Es69+npk2gNwAGFWwNm3iNGg2BULPYCUR0z9s7JybyPAVjz50ueeyb53w0Qn9vVrQGPeDgegPPhKPJPaoW17wt+xPsYgJMwly/A0/lzA66wZsCqVg2AbzWN1e7TJe7wPgYw/yny++Rh4ay+K17/+xrYAMZt2ADGbdgAxm3YAMZt2ADGbdgAxm3YAMZt2ADGbdgAxm3YAMZt2ADGbdgAxm3YAMZt2ADGbdgAxm3YAMZt2ADGbdgAxm3YAMZt2ADGbdgAxm3YAMZt2ADGbdgAxm3YAMZt2ADGbdgAxm3YAMZt/gGMkd9K8IrK1gAAAABJRU5ErkJggg=="
                             alt="<?php echo $title; ?>">
                    </figure>
                </div>

            </nav>
            <div class="level">
                <div class="level-item has-text-centered ">
                    <div class="buttons">
                        <a class="button primary modal-button" data-target="modal-cont"><p class="icon is-medium"><i
                                        class="fa fa-play"></i></p>Watch Now</a>
                        <a class="button secondary modal-button" data-target="modal-cont"><span class="icon is-medium"> <i
                                        class="fa fa-download"></i></span> Download</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<main class="hero is-fullheight parallax">
    <div class="hero-body">

        <div class="container has-text-centered">

            <div class="tile is-ancestor">
                <div class="tile is-parent is-3">
                    <article class="tile is-child box">
                        <figure class="image is-1by2">
                            <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                 data-src="<?php echo $images_small; ?>" alt="<?php echo $title; ?>">
                        </figure>


                    </article>
                </div>
                <div class="tile is-parent ">

                    <article class="tile is-child box">

                        <h1 class="title"><?php echo $title; ?>
                            (<?php echo date('Y', strtotime($row['release_date'])); ?>)</h1>
                        <h2 class="subtitle"></h2>

                        <div class="content">
                            <p><?php echo $description; ?></p>
                        </div>
                        <hr>
                        <div class="buttons has-addons is-pulled-right is-paddingless is-hidden-mobile">
                            Share on :
                            <a class="button is-facebook"
                               href="https://www.facebook.com/sharer/sharer.php?u=<?php echo site_uri() ?>&t=<?php echo $title; ?> (<?php echo date('Y', strtotime($row['release_date'])); ?>)"
                               target="_blank"><i class="fa fa-facebook"></i></a>

                            <a class="button is-twitter"
                               href="https://twitter.com/intent/tweet?source=<?php echo site_uri() ?>&amp;text=<?php echo $title; ?> (<?php echo date('Y', strtotime($row['release_date'])); ?>):%20<?php echo site_uri() ?>"
                               target="_blank"><i class="fa fa-twitter"></i></a>

                            <a class="button is-gplus" href="https://plus.google.com/share?url=<?php echo site_uri() ?>"
                               target="_blank"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </article>

                </div>

            </div>
        </div>
    </div>
</main>

<div class="hero">
    <?php
    if (is_array($row['similar_movies']['results']) && count($row['similar_movies']['results']) > 0) {
        ?>
        <div class="hero-body">
            <div class="container">
                <h2 class="subtitle is-uppercase has-text-weight-semibold">
                    You May Also Like
                </h2>
                <hr>
                <div class="columns is-mobile is-multiline ">
                    <?php
                    foreach ((array)array_slice($row['similar_movies']['results'], 0, 10) as $similar) :
                        if ($similar['poster_path']) {
                            $backdrop_path = 'https://image.tmdb.org/t/p/w300' . $similar['poster_path'];
                        } else {
                            $backdrop_path = site_theme() . '/images/no-cover.png';
                        }
                        ?>
                        <div class="column is-6-mobile is-3-tablet is-one-fifth-desktop ">

                            <a href="<?php echo seo_movie($similar['id'], $similar['title']); ?>" class="box">
                                <figure class="image is-1by2 ">
                                    <span class="movie-quality"><i
                                                class="fa fa-star"></i> 	<?php echo $similar['vote_average']; ?></span>
                                    <img src="data:image/png;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs="
                                         data-src="<?php echo $backdrop_path; ?>"
                                         alt="<?php echo $similar['title']; ?>">
                                    <div class="has-text-centered has-text-weight-semibold movie-title"><?php echo $similar['title']; ?></div>
                                </figure>

                            </a>
                        </div>
                    <?php
                    endforeach;
                    ?>

                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
<div class="modal" id="modal-cont">
    <div class="modal-background"></div>
    <div class="modal-card">
        <header class="modal-card-head">


        </header>
        <section class="modal-card-body">
            <p class="is-size-5 is-capitalized">please login or register an account for these benefits :</p>
            <ul>
                <li><strong>High Quality Movies</strong></li>

                All of the Movies are available in the superior HD Quality or even higher!

                <li><strong>Watch Without Limits</strong></li>

                You will get access to all of your favourite the Movies without any limits.

                <li><strong>100% Advertising Free</strong></li>

                Your account will always be free from all kinds of advertising.

                <li><strong>Watch anytime, anywhere</strong></li>

                It works on your TV, PC, or MAC, even on your mobile devices
            </ul>

        </section>
        <footer class="modal-card-foot">
            <button class="button is-info" onclick="window.open('/securing')">Continue</button>
        </footer>
    </div>
    <button class="modal-close is-large" aria-label="close"></button>
</div>
</div>
<section class="hero features">
    <div class="hero-body">
        <div class="columns">
            <div class="column has-text-centered">
                <div>
                    <i class="fa fa-2x fa-film"></i>
                    <p class="is-size-6">UNLIMITED ACCESS</p>
                    <p class="is-size-7">Unlimited access to over 20 million titles.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <div>
                    <i class="fa fa-2x fa-search"></i>
                    <p class="is-size-6">SEARCH FOR ANYTHING</p>
                    <p class="is-size-7">Whether it's a new release or a golden oldie, we've got you covered.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <div>
                    <i class="fa fa-2x fa-ban"></i>
                    <p class="is-size-6">NO ADS</p>
                    <p class="is-size-7">Enjoy your films the way they were meant to be experienced: ad-free.</p>
                </div>
            </div>
            <div class="column has-text-centered">
                <div>
                    <i class="fa fa-2x fa-desktop"></i>
                    <p class="is-size-6">ALL PLATFORMS</p>
                    <p class="is-size-7">Optimized for PC, Mac, mobile, PS4, Xbox One, and Smart TVs.</p>
                </div>
            </div>
        </div>
    </div>

</section>
<footer class="navbar is-dark has-shadow">
    <div class="container">
        <button id="navbarBurger" class="button navbar-burger is-dark" data-target="navFoot">
            <span></span>
            <span></span>
            <span></span>
        </button>
        <div class="navbar-menu " id="navFoot">
            <div class="navbar-start">
                <p class="navbar-item">Copyright &copy; <?php echo date('Y') ?> <a
                            href="<?php echo site_url() ?>"> &nbsp;<?php echo config('sitename') ?></a>. All Rights Reserved.
                </p>
            </div>

            <div class="navbar-end">
                <a class="navbar-item" href="<?php echo view_page('privacy-policy'); ?>">
                    Privacy Policy
                </a>
                <a class="navbar-item" href="<?php echo view_page('dmca-notice'); ?>">
                    DMCA
                </a>
                <a class="navbar-item" href="<?php echo view_page('contact-us'); ?>">
                    Contact
                </a>
                <a class="navbar-item" href="<?php echo view_page('disclaimer'); ?>">
                    Disclaimer
                </a>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="<?php style_theme(); ?>/js/main.js"></script>
<script type="text/javascript" defer>
    /* First CSS File */
    var GodOfSpeed = document.createElement('link');
    GodOfSpeed.rel = 'stylesheet';
    GodOfSpeed.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css';
    GodOfSpeed.type = 'text/css';
    var godefer = document.getElementsByTagName('link')[0];
    godefer.parentNode.insertBefore(GodOfSpeed, godefer);

</script>

<script type="text/javascript">
    var fired = false;
    window.addEventListener("scroll", function () {
        if ((document.documentElement.scrollTop != 0 && fired === false) || (document.body.scrollTop != 0 && fired === false)) {

            var imgDefer = document.getElementsByTagName('img');
            for (var i = 0; i < imgDefer.length; i++) {
                if (imgDefer[i].getAttribute('data-src')) {
                    imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
                }
            }
            fired = true;
        }
    }, true)
</script>
<script type="text/javascript" defer>
    (function () {
        function getScript(url, success) {
            var script = document.createElement('script');
            script.src = url;
            var head = document.getElementsByTagName('head')[0],
                done = false;
            script.onload = script.onreadystatechange = function () {
                if (!done && (!this.readyState || this.readyState == 'loaded' || this.readyState == 'complete')) {
                    done = true;
                    success();
                    script.onload = script.onreadystatechange = null;
                    head.removeChild(script);
                }
            };
            head.appendChild(script);
        }

        getScript('https://cdnjs.cloudflare.com/ajax/libs/video.js/6.2.0/video.min.js', function () {
            getScript('https://cdnjs.cloudflare.com/ajax/libs/videojs-resolution-switcher/0.4.2/videojs-resolution-switcher.min.js', function () {
                videojs('my-video').videoJsResolutionSwitcher();
                limitload = 0;
                var myPlayer = videojs('my-video', {
                    controlBar: {
                        remainingTimeDisplay: false
                    }

                });
                var pausetime = 12; // stop at 10 seconds
                myPlayer.on('timeupdate', function (e) {
                    if (myPlayer.currentTime() >= pausetime) {
                        var $pop = document.getElementById('modal-cont');
                        myPlayer.pause();
                        document.documentElement.classList.add('is-clipped');
                        $pop.classList.add('is-active');
                        myPlayer.exitFullscreen();
                    }
                });
                myPlayer.disableProgress({
                    autoDisable: true
                });
            })
        });
    })();
</script>


<script type="text/javascript">
    var fired = false;
    window.addEventListener("scroll", function () {
        if ((document.documentElement.scrollTop != 0 && fired === false) || (document.body.scrollTop != 0 && fired === false)) {

            var imgDefer = document.getElementsByTagName('img');
            for (var i = 0; i < imgDefer.length; i++) {
                if (imgDefer[i].getAttribute('data-src')) {
                    imgDefer[i].setAttribute('src', imgDefer[i].getAttribute('data-src'));
                }
            }
            fired = true;
        }
    }, true)
</script>
<?php echo histats_write() ?>

<?php if (is_europe() == 'true'): ?>
    <!-- Begin Cookie Consent plugin by Silktide - https://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {
            "message": "This website uses cookies to ensure you get the best experience on our website",
            "dismiss": "Got it!",
            "learnMore": "More success",
            "link": null,
            "theme": "dark-floating"
        };
    </script>
    <script type="text/javascript"
            src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->
<?php endif ?>
<?php if (config('protect_content') == 'true'): ?>
    <Script Language='Javascript'>
        document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%0A%66%75%6E%63%74%69%6F%6E%20%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%65%29%7B%69%66%28%74%79%70%65%6F%66%20%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%6C%73%65%20%69%66%28%74%79%70%65%6F%66%20%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%3D%22%6E%6F%6E%65%22%3B%65%6C%73%65%20%65%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%2E%73%74%79%6C%65%2E%63%75%72%73%6F%72%3D%22%64%65%66%61%75%6C%74%22%7D%77%69%6E%64%6F%77%2E%6F%6E%6C%6F%61%64%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%29%7D%0A%0A%66%75%6E%63%74%69%6F%6E%20%6D%6F%75%73%65%64%77%6E%28%65%29%7B%74%72%79%7B%69%66%28%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%32%7C%7C%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%63%61%74%63%68%28%65%29%7B%69%66%28%65%2E%77%68%69%63%68%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%64%72%61%67%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%6D%6F%75%73%65%64%77%6E%0A%0A%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%22%6B%65%79%64%6F%77%6E%22%2C%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%7D%7D%29%3B%64%6F%63%75%6D%65%6E%74%2E%6B%65%79%70%72%65%73%73%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%7D%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%0A%0A%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6B%65%79%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%65%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%69%66%28%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%32%33%7C%7C%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%38%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%0A%3C%2F%73%63%72%69%70%74%3E%0A'));
    </Script>
<?php endif ?>
</body>
</html>