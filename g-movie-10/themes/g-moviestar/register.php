<?php 
/*
| -------------------------------------------------------------------------------
| Author            : Galih Sophian
| Template Name     : G-Silvers V3
| -------------------------------------------------------------------------------
*/

require_once($_SERVER['DOCUMENT_ROOT'] .'/app/config/autoload.php'); ?>
<html>
<head>
<title>Redirecting to Secure Page</title>
<meta http-equiv="refresh" content="0;url=<?php echo config('offer_link1');?>">
<body>
<?php echo histats_write() ?>
</body></html>