<head>
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
</head>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
