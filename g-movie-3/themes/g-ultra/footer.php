<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silvers
| Template Name     : G12
| -------------------------------------------------------------------------------
*/
?>
</div>
</div><!-- row -->
</div><!-- container -->
<footer class="footer">
    <div class="copyright">
        <div class="container" style="font-size: 12px">
            <span>Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo site_url() ?>"><?php echo config('sitename') ?></a>. All rights reserved. </span>
            <span class="pull-right"><a href="<?php echo view_page( 'dmca-notice' );?>">DMCA</a> | <a href="<?php echo view_page( 'privacy-policy' );?>">Privacy</a> | <a href="<?php echo view_page( 'contact-us' );?>">Contact</a> | <a target="_blank" rel="nofollow" href="<?php echo site_url() ?>/sitemap.xml">Sitemap</a></span>
        </div><!-- container-->
    </div><!-- copyright -->
</footer><!-- .footer -->
<div class="modal animated bounceIn" id="reg_form" tabindex="-1" role="dialog" aria-labelledby="reg_form" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content clearfix"> <div class="modal-header bg-success"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="myModalLabel">Register Free Account!</h4> </div><div class="modal-body clearfix"> <div class="col-md-6" id="login"> <h5>Member Login</h5> <div class="form-group"> <input type="text" class="form-control input-sm" id="userid" placeholder="username"> </div><div class="form-group"> <input type="password" class="form-control input-sm" id="password" placeholder="password"> </div><div class="form-group"> <span class="onload label label-success" style="display: none;">Please wait...</span> <span class="onerror label label-warning" style="display: none;">Wrong Username or Password</span> </div><input type="submit" id="subreg" class="btn btn-success" value="Log me in"> </div><div class="col-md-6"> <h5>Member Benefits</h5> <ol> <li>Watch as many movies you want!</li><li>Secure and no restrictions!</li><li>Stream movies in HD quality!</li><li>It works on your TV, PC or MAC!</li></ol> <button class="btn btn-primary backcolor" onclick="window.location.href='/?action=register'">Register Here!</button> </div></div><div class="modal-footer bg-success"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> </div></div></div></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php style_theme();?>/js/jquery-ui.min.js"></script>
<script src="<?php style_theme();?>/js/bootstrap2.min.js"></script>
<script src="<?php style_theme();?>/js/responsiveCarousel.js"></script>
<script src="<?php style_theme();?>/js/owl.carousel.min.js"></script>
<script src="<?php style_theme();?>/js/scripts.min.js"></script>
<script src="<?php style_theme();?>/js/player.js"></script>

<?php echo histats_write() ?>

</body>
</html>
   <script type="text/javascript">
        $.mobile.ajaxEnabled = false;


        function pauseClick() {
            $("#play-icon").show();
            $("#pause-icon").hide();
            $("#intro").pauseVideo();
            
        }

        function playClick() {
            $(".movie-loading, .movie-loader").show();
            $("#fregister").hide();
            $(".loading111").show();
            $("#intro").show();
            $("#play-icon").hide();
            $("#playnow1").hide();
            $("#pause-icon").show();
            $(".movie-loader").fadeIn(2000);

            var symbol = $("#intro")[0].src.indexOf("?") > -1 ? "&" : "?";
            $("#intro")[0].src += symbol + "autoplay=1";
            setTimeout(function() {
             $(".black").show();
             $(".loading111").hide();
         }, 3500)



            $("#playnow .fa-youtube-play").css("visibility", "visible");
            setTimeout(function() {
             $(".movie-loader").hide();
             $(".register111").show()
         }, 3500)
        }

        function playerLoad() {
          if ($("#player").length) {
             $(".movie-loading").show();
             setTimeout(function() {
                $(".movie-loader").show()
            }, 1000);
             $("span#playnow").css("visibility", "visible");
             $(".movie-loading").hide()
         }
     }

     function playHover() {
      $(".entry-title").toggleClass("active")
  }

  function regplayClick() {  
      var searchParams = new URLSearchParams(window.location.search);
      window.location.replace("/register");
  }

  function playLoad() {
      $(".movie-loading").hide();
      $(".fa-arrows-alt").click(function() {
         screenfull.request(document.getElementById("player"));
         $(this).toggleClass("fa-arrows-alt fa-compress")
     });
      $("a#playnow,.play,i.fa.fa-compress").click(function() {
         screenfull.exit()
     });
      $(".inline").colorbox({
         inline: true,
         width: "40%"
     })
  }

  function playClear() {
      $("#player").load(function() {})
  }

  function secondsTimeSpanToHMS(c) {
      var b = Math.floor(c / 3600);
      c -= b * 3600;
      var a = Math.floor(c / 60);
      c -= a * 60;
      return b + ":" + (a < 10 ? "0" + a : a) + ":" + (c < 10 ? "0" + c : c)
  };

  $(document).ready(function() {
      $("a.login-window").click(function() {
         $(".login-popup").fadeIn(300);
         $(".blackhole").fadeIn(300);
         return false
     });
      $("a.close").click(function() {
         $(".login-popup, .blackhole").fadeOut(300);
         return false
     });
      $("#formsubmit").click(function() {
         $(".onerror").fadeOut("fast");
         $(".onload").fadeIn().delay(3e3);
         $(".onload").fadeOut("fast");
         setTimeout(function() {
            $(".onerror").fadeIn("fast");
            $("#formuser, #formpass").val("");
            $("#formuser").focus()
        }, 3500)
     })
  })
</script>