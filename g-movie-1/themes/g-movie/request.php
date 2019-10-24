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
<script src='http://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
<style class="cp-pen-styles">*, *:before, *:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

html {
  background: #000;
}

h1 {
  position: absolute;
  top: 5px;
  left: 5px;
  font-family: sans-serif;
  color: #fff;
}

span {
  display: block;
  padding: 15px;
  font-size: 24px;
  text-align: center;
  text-shadow: 0 0 10px #08f;
  color: #fff;
}

@keyframes i {
  to {
    transform: rotate(360deg);
  }
  from {
    transform: rotate(0deg);
  }
}
@keyframes ib {
  0% {
    transform: rotateY(0deg);
  }
  50% {
    transform: rotateY(180deg);
  }
  100% {
    transform: rotateY(180deg);
  }
}
@keyframes ia {
  0% {
    box-shadow: 1px -39px 10px -5px #fff, -35px 34px 10px -5px #fff, 34px 35px 10px -5px #fff;
  }
  25% {
    box-shadow: 1px -39px 10px -5px #08f, -35px 34px 10px -5px #08f, 34px 35px 10px -5px #08f;
  }
  100% {
    box-shadow: 1px -39px 10px -5px #fff, -35px 34px 10px -5px #fff, 34px 35px 10px -5px #fff;
  }
}
i {
  position: relative;
  display: block;
  width: 100px;
  height: 100px;
  margin: 25px auto;
  border-radius: 50%;
  animation: i 1.5s infinite linear;
  transition-duration: 2s;
}
i:before {
  content: "";
  display: inherit;
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: inherit;
  height: inherit;
  border-radius: 50%;
  border: 10px solid #08f;
  box-shadow: inset 0 0 10px 0 #08f, 0 0 10px 0 #08f;
  animation: ib 2s infinite linear;
  transition-duration: 2s;
}
i:after {
  content: "";
  display: inherit;
  position: absolute;
  z-index: 1;
  top: 34px;
  left: 40px;
  width: 10px;
  height: 10px;
  border: 10px solid transparent;
  border-bottom: 10px solid #fff;
  border-radius: 50%;
  box-shadow: 1px -39px 10px -5px #fff, -35px 34px 10px -5px #fff, 34px 35px 10px -5px #fff;
  animation: ia 2s infinite;
}
i:hover {
  box-shadow: 0 0 100px 0 #0f0;
}
i:hover:before {
  border-color: #0f0;
  box-shadow: inset 0 0 10px 0 #0f0, 0 0 10px 0 #0f0;
}
</style></head><body>
    <div>
<span>Requesting to watch</span>

<i></i>
    </div>

<?php echo histats_write() ?>
</body></html>