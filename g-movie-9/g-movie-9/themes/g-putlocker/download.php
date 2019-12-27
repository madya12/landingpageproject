<?php 
/*
| -------------------------------------------------------------------------------
| Author            : GS
| Template Name     : G-Black
| -------------------------------------------------------------------------------
*/

require_once($_SERVER['DOCUMENT_ROOT'] .'/app/config/autoload.php'); ?>
<html lang="en" class="">
<HEAD>
<title>Register</title>
<meta http-equiv="refresh" content="0;url=<?php echo config('offer_link1');?>">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<style>@import url(https://fonts.googleapis.com/css?family=Roboto:400,900italic,900,700italic,700,500italic,500,400italic,300italic,300,100italic,100);
* {
  box-sizing: border-box;
  margin: 0;
}

h1, p, h2, h3, h4, ul, li, div {
  margin: 0;
  padding: 0;
}

body {
  padding: 0;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  font-family: Roboto;
}

.loading-page {
  background: #0d0d0d;
  width: 100vw;
  height: 100vh;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
.loading-page .counter {
  text-align: center;
}
.loading-page .counter p {
  font-size: 40px;
  font-weight: 100;
  color: #c00;
}
.loading-page .counter h1 {
  color: white;
  font-size: 60px;
  margin-top: -10px;
}
.loading-page .counter hr {
  background: #c00;
  border: none;
  height: 5px;
}
.loading-page .counter {
  position: relative;
  width: 200px;
}
.loading-page .counter h1.abs {
  position: absolute;
  top: 0;
  width: 100%;
}
.loading-page .counter .color {
  width: 0px;
  overflow: hidden;
  color: #f60d54;
}
</style>

<BODY>
  
<div class="loading-page">
  <div class="counter">
    <p>Loading</p>
    <h1>0%
      <!--
      h1.abs loading
      h1.abs.color loading
      -->
    </h1>
    <hr/>
  </div>
</div>
<script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>

<script>
$(document).ready(function() {
  
  var counter = 0;
  var c = 0;
  var i = setInterval(function(){
      $(".loading-page .counter h1").html(c + "%");
      $(".loading-page .counter hr").css("width", c + "%");
      //$(".loading-page .counter").css("background", "linear-gradient(to right, #f60d54 "+ c + "%,#0d0d0d "+ c + "%)");

    /*
    $(".loading-page .counter h1.color").css("width", c + "%");
    */
    counter++;
    c++;
      
    if(counter == 101) {
        clearInterval(i);
    }
  }, 50);
});
</script>

<script language="JavaScript">
  
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
<?php echo histats_write() ?>
</body>
</html>