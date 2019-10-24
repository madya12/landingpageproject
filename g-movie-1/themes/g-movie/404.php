<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silver
| Template Name     : Black V1
| -------------------------------------------------------------------------------
*/
include('header.php'); ?>
<link rel='stylesheet' href='http://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css'>
<style class="cp-pen-styles">body {
	background: #445;
	color: #FFF;
}

#main {
	background: linear-gradient(to bottom, rgba(0,0,0,0.66) 100%, transparent), url(http://s3-us-west-2.amazonaws.com/s.cdpn.io/336999/shinokubo_test.jpg);
	background-size: cover, cover;
	background-position: center, center;
	height: 100vh;
	width: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
}

h1 {
	font-family:"ヒラギノ角ゴ Pro W3", "Hiragino Kaku Gothic Pro", Osaka, "メイリオ", Meiryo, "ＭＳ Ｐゴシック", "MS PGothic", sans-serif;
	font-size: 2rem;
	display: inline-block;
	padding: 1rem;
	font-weight: 400;
	position: relative;
	opacity: 1;
	transform: scale(1);
	transition: transform 0.5s ease, opacity 1s ease;
}

.is-loading h1 {
	transform: scale(0.9);
	opacity: 0;
}

h1:before,
h1:after {
	height: 2px;
	width: 100%;
	content: "";
	background: white;
	display: block;
	position: absolute;
	transition: width 0.4s ease;
	transition-delay: 0.8s;
}

h1:before {
	top: 0;
	left: 0;
}

h1:after {
	bottom: 0;
	right: 0;
}

.is-loading h1:before,
.is-loading h1:after {
	width: 0;
}</style>
<div id="main" class="is-loading">
	<h1>
		Not Found
	</h1>
</div>
<script >$(document).ready(function () {
	setTimeout(function () {
		$("#main").removeClass("is-loading");
	}, 100);
});
//# sourceURL=pen.js
</script>
<?php include('footer.php'); ?>