<?php include('siteconfig.php');
function cano($s){
	$s = $output = trim(preg_replace(array("`'`", "`[^a-z0-9]+`"),  array("", "-"), strtolower($s)), "-");
	return $s;
}
$page_title = $topaudio_title;
?>
<!doctype html>
<html>
    <head>
		<!-- Meta -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width">
		
<meta http-equiv="refresh" content="0;url=<?php echo $site_offer;?>">
		<title>Request Read/Listen</title>
		<meta name="description" content="<?php echo $homepage_desc; ?>" />
		<meta name="keywords" content="<?php echo $site_keywords; ?>" />
		<meta property="og:site_name" content="<?php echo $site_title; ?>"/>
		<meta property="og:type" content="website"/>
		<meta property="og:title" content="<?php echo $homepage_title; ?>"/>
		<meta property="og:description" content="<?php echo $homepage_desc; ?>"/>
		<!-- CSS and Scripts -->
		<?php include 'includes/headscripts.php'; ?>
		<script type="text/javascript" src="<?php echo $site_url;?>/js/jquery.jcarousel.min.js"></script>
    </head>
<body class="whiteback">

<div class="container">

	<div class="">
		<a href="<?php echo $site_offer;?>"><img src="/images/abc-largetext-newest.png" border="0" class="left-image"></a>

		<a href="<?php echo $site_offer;?>"><img src="/images/abc-largebanner.png" border="0" class="right-image hidden-phone"></a>
	</div>
	
	<div class="clearfix"></div>
	
	<div class="line"></div>
	


</div>
</body>
</html>