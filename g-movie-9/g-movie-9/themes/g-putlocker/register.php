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
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
<style class="cp-pen-styles">@import url(https://fonts.googleapis.com/css?family=Quattrocento+Sans);
.loading {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #000;
  z-index: 9999;
}

.loading-text {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  margin: auto;
  text-align: center;
  width: 100%;
  height: 100px;
  line-height: 100px;
}
.loading-text span {
  display: inline-block;
  margin: 0 5px;
  color: #fff;
  font-family: 'Quattrocento Sans', sans-serif;
}
.loading-text span:nth-child(1) {
  -webkit-filter: blur(0px);
          filter: blur(0px);
  -webkit-animation: blur-text 1.5s 0s infinite linear alternate;
          animation: blur-text 1.5s 0s infinite linear alternate;
}
.loading-text span:nth-child(2) {
  -webkit-filter: blur(0px);
          filter: blur(0px);
  -webkit-animation: blur-text 1.5s 0.2s infinite linear alternate;
          animation: blur-text 1.5s 0.2s infinite linear alternate;
}
.loading-text span:nth-child(3) {
  -webkit-filter: blur(0px);
          filter: blur(0px);
  -webkit-animation: blur-text 1.5s 0.4s infinite linear alternate;
          animation: blur-text 1.5s 0.4s infinite linear alternate;
}
.loading-text span:nth-child(4) {
  -webkit-filter: blur(0px);
          filter: blur(0px);
  -webkit-animation: blur-text 1.5s 0.6s infinite linear alternate;
          animation: blur-text 1.5s 0.6s infinite linear alternate;
}
.loading-text span:nth-child(5) {
  -webkit-filter: blur(0px);
          filter: blur(0px);
  -webkit-animation: blur-text 1.5s 0.8s infinite linear alternate;
          animation: blur-text 1.5s 0.8s infinite linear alternate;
}
.loading-text span:nth-child(6) {
  -webkit-filter: blur(0px);
          filter: blur(0px);
  -webkit-animation: blur-text 1.5s 1s infinite linear alternate;
          animation: blur-text 1.5s 1s infinite linear alternate;
}
.loading-text span:nth-child(7) {
  -webkit-filter: blur(0px);
          filter: blur(0px);
  -webkit-animation: blur-text 1.5s 1.2s infinite linear alternate;
          animation: blur-text 1.5s 1.2s infinite linear alternate;
}

@-webkit-keyframes blur-text {
  0% {
    -webkit-filter: blur(0px);
            filter: blur(0px);
  }
  100% {
    -webkit-filter: blur(4px);
            filter: blur(4px);
  }
}

@keyframes blur-text {
  0% {
    -webkit-filter: blur(0px);
            filter: blur(0px);
  }
  100% {
    -webkit-filter: blur(4px);
            filter: blur(4px);
  }
}
</style></head><body>
<div class="loading">
	<div class="loading-text">
		<span class="loading-text-words">L</span>
		<span class="loading-text-words">O</span>
		<span class="loading-text-words">A</span>
		<span class="loading-text-words">D</span>
		<span class="loading-text-words">I</span>
		<span class="loading-text-words">N</span>
		<span class="loading-text-words">G</span>
	</div>
</div>
<?php echo histats_write() ?>
</body></html>