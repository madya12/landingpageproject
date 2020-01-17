<style type="text/css">
    .heading {
        margin-bottom: 20px;
    }

    .nav .dropdown-menu li a {
        width: 100% !important;
    }

    .nav .dropdown-menu li a:hover, .nav .dropdown-menu li.active a {
        color: #fff;
        width: 100% !important;
        background: rgba(255, 255, 255, .1);
    }

    .nav > li {
        position: relative;
        display: inherit !important;
    }

    .carousel-indicators {
        z-index: 1;
    }

    .open .dropdown-menu {
        visibility: visible !important;
        display: block !important;
        opacity: 10 !important;
        -webkit-transform: scale(1);
        -moz-transform: scale(1);
        transform: scale(1);
    }

    .nav .open > a, .nav .open > a:focus, .nav .open > a:hover {
        background-color: transparent;
        border-color: #B73333;
    }

    .navbar.banner--clone .logo img {
        max-height: 40px;
        margin: 22px 0 !important;
    }

    .mobile {
        visibility: hidden !important;
        display: none !important;
    }

    .desktop {
        visibility: visible !important;
        display: block !important;
    }

    .logo img {
        height: 25px !important;
    }

    .overlay {
        background: linear-gradient(to bottom, transparent 0%, rgba(0, 0, 0, 0.85) 100%);
        position: absolute;
        bottom: 0px;
        width: 100%;
        height: 250px;
        z-index: 9;
        margin-left: 0px !important;
    }

    .atribut-movie-d {
        position: absolute;
        width: 100%;
        top: 0px;
        right: 0px;
        padding: 0px !important;
        left: 0px;
        top: 10px;
        bottom: 0px;
        z-index: 9;
    }

    .list-movie {
        width: 100%;
        overflow: hidden;
        display: table;
        height: auto;
        position: relative;
    }

    .atribut-movie {
        position: absolute;
        width: 100%;
        top: 0px;
        right: 0px;
        padding-left: 15px !important;
        padding-right: 15px !important;
        left: 0px;
        top: 10px;
        bottom: 0px;
        z-index: 9;
    }

    @media only screen and (max-width: 768px) {
        .desktop {
            visibility: hidden !important;
            display: none !important;
        }

        .mobile {
            visibility: visible !important;
            display: block !important;
        }

        .img-movie {
            height: 250px !important;
            width: 100%;
        }

        .banner--stick .logo {
            margin-top: 0px !important
        }

        .logo {
            margin-top: 17px;
        }

        .logo img {
            height: 25px !important;
        }

        .logo {
            max-width: 250px;
            margin-left: 15px;
        }

        .text-center {
            text-align: center;
        }

        .nav {
            z-index: 999;
        }

        .heading {
            margin-bottom: 0px;
        }

        .nav li.active a:after {
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            display: block;
            width: 100%;
            height: 0px;
            content: '';
            background: transparent;
            box-shadow: 0;
        }

        .banner--stick .nav li:hover a:after {
            position: absolute;
            right: 0;
            bottom: -11px !important;
            left: 0;
            width: 100%;
            height: 0px;
            content: '';
            background: transparent;
            box-shadow: 0;
        }
    }
</style>

<div style=" background: #0D0D25; width: 100%; padding: 7px; overflow: hidden; position: relative; z-index: 999; display: table; border-radius: 32px 32px 0px 0px;">
    <div class="container">
		<span class="pull-right" style="color: #F8CA4D; font-size: 14px;">TRY PREMIUM FOR FREE &nbsp; &nbsp; :
			<a href="javascript:void(0)" data-toggle="modal" data-target="#reg_form"
               style="color: #fff!important; font-size: 14px;">&nbsp; &nbsp; LOGIN / REGISTER</a>
		</span>
    </div>
</div>
<div class="navbar" role="navigation">
    <div class="heading">
        <div class="container">
            <div class="row">
                <div class="col-sm-12" style="margin-bottom: 0px;">
                    <div class="search" style="visibility: hidden;">
                        <a href="">
                            <i class="material-icons">search</i>
                        </a>
                    </div>
                    <div class="tel" style="visibility: hidden;">
                        <a href="tel:03301234567">
                            <i class="material-icons">phone in talk</i> 0330 123 4567
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="navbar-header">
            <a href="/" class="logo" title="<?php echo config('sitename') ?>">
                <img src="<?php style_theme() ?>/images/logo.png" style="height: 50px;" alt="Craft Beer HTML Template">
            </a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse">
			<span class="desktop">
							</span>
            <ul id="menu-danger" class="nav navbar-nav" style="margin-top: -24.5px;">
                <li class="active">
                    <a href="/" style="text-shadow: 1px 1px #0D0D25">Home</a>
                </li>

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false" style="text-shadow: 1px 1px #0D0D25">MOVIES</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo view_page('movies-nowplay'); ?>"><i class="fa fa-play-circle-o"></i> Now
                                Playing</a></li>
                        <li><a href="<?php echo view_page('upcoming-movies'); ?>"><i class="fa fa-random"></i> Upcoming</a>
                        </li>
                        <li><a href="<?php echo view_page('toprated-movies'); ?>"><i class="fa fa-line-chart"></i> Top
                                Rated</a></li>
                        <li><a href="<?php echo view_page('popular-movies'); ?>"><i class="fa fa-trophy"></i>
                                Popular</a></li>
                    </ul>
                </li>
                <li class="dropdown ">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false" style="text-shadow: 1px 1px #0D0D25">TV SERIES</a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo view_page('tv-airing'); ?>"><i class="fa fa-random"></i> Airing TV</a>
                        </li>
                        <li><a href="<?php echo view_page('tv-ontheair'); ?>"><i class="fa fa-line-chart"></i> On the
                                Air TV</a></li>
                        <li><a href="<?php echo view_page('tv-popular'); ?>"><i class="fa fa-star"></i> Popular TV</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false" style="text-shadow: 1px 1px #0D0D25">GENRES</a>
                    <ul class="dropdown-menu" style="width: 100%;">
                        <?php if (isset($_cate)) foreach ($_cate as $cateid => $catename): ?>
                            <li><a href="<?php echo seocat($catename, $cateid); ?>"><?php echo ucwords($catename) ?></a>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </li>
                <li><a href="<?php echo site_url() ?>/?s=" style="text-shadow: 1px 1px #0D0D25">Search</a></li>
            </ul>
        </div>
    </div>
</div>