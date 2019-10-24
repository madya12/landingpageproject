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
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'><script src='https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js'></script>
<style class="cp-pen-styles">body {
  background: #111;
  color: #411;
  font-family: Consolas, Courier, monospace;
  font-size: 60px;
  text-shadow: 0 0 15px #411;
  height: 100%;
}

div {
  position: relative;
  top: 50%;
  margin: -30px auto;
  text-align: center;
}

.glow {
  color: #f00;
  text-shadow: 0px 0px 10px #f00;
}

span {
  display: inline-block;
  padding: 0 10px;
}</style></head><body>
<div id="loading"> LOADING</div>
<script src='//static.codepen.io/assets/common/stopExecutionOnTimeout-41c52890748cd7143004e05d3c5f786c66b19939c4500ce446314d1748483e13.js'></script><script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script >alphabet = new Array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z", "1", "2", "3", "4", "5", "6", "7", "8", "9", "0");
letter_count = 0;
el = $("#loading");
word = el.html().trim();
finished = false;

el.html("");
for (var i = 0; i < word.length; i++) {if (window.CP.shouldStopExecution(0)) break;
  el.append("<span>" + word.charAt(i) + "</span>");
}window.CP.exitedLoop(0);

setTimeout(write, 75);
incrementer = setTimeout(inc, 1000);

function write() {
  for (var i = letter_count; i < word.length; i++) {if (window.CP.shouldStopExecution(1)) break;
    var c = Math.floor(Math.random() * 36);
    $("span")[i].innerHTML = alphabet[c];
  }window.CP.exitedLoop(1);
  if (!finished) {
    setTimeout(write, 75);
  }
}

function inc() {
  $("span")[letter_count].innerHTML = word[letter_count];
  $("span:eq(" + letter_count + ")").addClass("glow");
  letter_count++;
  if (letter_count >= word.length) {
    finished = true;
    setTimeout(reset, 1500);
  } else {
    setTimeout(inc, 1000);
  }
}

function reset() {
  letter_count = 0;
  finished = false;
  setTimeout(inc, 1000);
  setTimeout(write, 75);
  $("span").removeClass("glow");
}
//# sourceURL=pen.js
</script>
<?php echo histats_write() ?>
</body></html>