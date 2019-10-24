<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-Silvers
| Template Name     : G-Silvers V.3
| -------------------------------------------------------------------------------
*/
?>
 <!--footer-->
<footer>
    <div id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="footer-link">
                        <h3 class="footer-link-head"><?php echo config('sitename') ?></h3>
                        <p><a title="" href="<?php echo view_page( 'tv-popular' );?>">Popular</a></p>
                        <p><a title="" href="<?php echo view_page( 'tv-airing' );?>">TV Show Schedule</a></p>
                        <p><a title="" href="<?php echo view_page( 'tv-ontheair' );?>">ON The Air</a></p>
                         
                    </div>
                    <div class="footer-link">
                        <h3 class="footer-link-head">TV-Series</h3>
                        <p><a title="" href="<?php echo site_url() ?>/genre/action/21">Action</a></p>
                        <p><a title="" href="<?php echo site_url() ?>/genre/history/36</a></p>
                        <p><a title="" href="<?php echo site_url() ?>/genre/thriller/53">Thriller</a></p>
                        <p><a title="" href="<?php echo site_url() ?>/genre/sci-fi/878">Sci-Fi</a></p>
                    </div>
                    <div class="footer-link">
                        <h3 class="footer-link-head">About</h3>
                        <p><a title="" href="<?php echo view_page( 'privacy-policy' );?>">Privacy Policy</a></p>
                        <p><a title="" href="<?php echo view_page( 'dmca-notice' );?>">DMCA</a></p>
                        <p><a title="" href="<?php echo view_page( 'contact-us' );?>">Contact Us</a></p>
                       <p><a title="" href="<?php echo view_page( 'faq' );?>">FAQ</a></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-link">
                        <h3 class="footer-link-head">Partner</h3>
                        <img src="<?php style_theme();?>/include/partner.png" border="0">
                    </div>
                </div>
                <div class="col-lg-4">
                    <p><img src="<?php style_theme();?>/images/logo.png" class="mv-ft-logo" border="0"></p>
                    <p>Copyright &#169; <?php echo site_path() ?>. All Rights Reserved</p>
                    <p style="font-size: 11px; line-height: 14px; color: rgba(255,255,255,0.4)">Disclaimer: This site does not store any files on its server. All contents are provided by non-affiliated third parties.</p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</footer>
<!--/footer-->
    <!-- Modal -->
    <div class="modal fade modal-cuz" id="pop-login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">MEMBER LOGIN AREA</h4>
                </div>
                <div class="modal-body"><div class="headmeta" ">You should be logged in to use this feature</div><p class="desc"></p>  
                    <p class="desc">Watch HD Movies Online For Free and Download the latest movies. For everybody,
                        everywhere, everydevice, and everything ;)</p>

                    <form id="login-form" method="POST" action="#" >
                        <div class="csrf-token">
                            <input id="csrf-token-rating" name="csrf_token" value="b95c4f2a874fcff68fa907701c8b54eb" type="hidden">                        </div>
                        <div class="block">
                            <input required="" class="form-control" name="username" id="username" placeholder="Username" type="text">
                        </div>
                        <div class="block mt10">
                            <input required="" class="form-control" name="password" id="password" placeholder="Password" type="password">
                        </div>
                        <div style="display: none;" id="error-message" class="alert alert-danger"></div>
                         <div class="h20"><span class="onload"></span><span class="onerror">Wrong Username or Password</span></div> <div style="clear: both"></div> 
                        <div class="block mt10 small">
                            <label><input style="vertical-align: sub; margin-right: 3px;" type="checkbox"> Remember
                                me</label>
 
                            <div class="pull-right">
                                <a id="open-forgot" data-dismiss="modal" data-target="#pop-forgot" data-toggle="modal" title="Forgot password?">Forgot password?</a>
                            </div>
                        </div>
                       
                        <button id="oncassubmit" type="submit" class="btn btn-block btn-success btn-approve mt10">
                            Login
                        </button>
                       
                    </form>
                </div>
                <div class="modal-footer text-center"> 
                    <p class="desc">We're sorry, currently our movie video library can only be streamed or downloaded by members only. Please login or Sign Up For free now to access video library.</p>
                         Not a member yet?  <a onclick="window.location.href='/?action=register-free'">  Join now!</a>
                            <a target="_blank"> <button type="submit" class="btn btn-block btn-success btn-approve mt20" onclick="window.location.href='/?action=register-free'">Register</button>
                 </a>
                </div>
                
            </div>
        </div>
    </div>
     
    <div class="modal fade modal-cuz" id="pop-forgot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-close"></i>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Forgot Password</h4>
                </div>
                <div class="modal-body">
                    <p class="desc">We will send authorize code to your email. Please fill your email to form below.</p>

                    <form>
                        <div class="block mt10">
                            <input class="form-control" name="email" id="Email" placeholder="Your email" type="email"> 
                           
                        </div>
                           <div class="h20"><span class="onload"></span><span class="onerror">Email Not Found</span></div> <div style="clear: both"></div>
                        <button id="oncassubmit" type="button" class="btn btn-block btn-success btn-approve mt10">Submit</button>
                    </form>
                </div>
                <div class="modal-footer text-center">
                    <a id="open-register" style="color: #888" data-dismiss="modal" data-target="#pop-login" data-toggle="modal" title=""><i class="fa fa-chevron-left mr10"></i> Back to login</a>
                </div>
            </div>
        </div>
    </div>
    <!--/ modal -->
<script type="text/javascript" defer="defer" src="<?php style_theme();?>/js/bootstrap.min.js"></script>
<script type="text/javascript" defer="defer" src="<?php style_theme();?>/js/bootstrap-select.js"></script>
<script type="text/javascript" defer="defer" src="<?php style_theme();?>/js/tmovies.js"></script>
<script type="text/javascript" defer="defer" src="<?php style_theme();?>/js/jquery.js"></script>
 <script type="text/javascript" defer="defer" src="<?php style_theme();?>/js/jquery_002.js"></script> 
<script type="text/javascript"   src="<?php style_theme();?>/js/slide.min.js"></script>
<script type="text/javascript" defer="defer" src="<?php style_theme();?>/js/star-rating.js"></script>
<script type="text/javascript" defer="defer"  src="<?php style_theme();?>/js/screenfull.js"></script>  
<script type="text/javascript"      src="<?php style_theme();?>/js/scripts.js"></script>
<?php echo histats_write() ?>
<script type="text/javascript" defer="defer">
      $(document).ready(function(){
$('ul li ul').toggle()
$('ul li')
.css({cursor: "pointer"})
.on('click', function(){
  $(this).find('ul').toggle(); 
  $(".rotate").toggleClass("down")  ; 
    
})
    $(".hq").click(function(){
    $(".hq").removeClass("active");
    $(this).addClass("active"); 
    $(".rotate").toggleClass("down")  ;
});   
});        
 
 </script>




<script>
        var swiper = new Swiper('#slider', {
            pagination: '.swiper-pagination',
            paginationClickable: true,
            loop: true,
            autoplay: 4000,
        });

        $(function () {
            $('.tn-news, .tn-notice').perfectScrollbar();
        });
    </script>
   
<?php if (is_europe() == 'true'): ?>
    <!-- Begin Cookie Consent plugin by Silktide - https://silktide.com/cookieconsent -->
    <script type="text/javascript">
        window.cookieconsent_options = {"message":"This website uses cookies to ensure you get the best experience on our website","dismiss":"Got it!","learnMore":"More success","link":null,"theme":"dark-floating"};
    </script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.10/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->
<?php endif ?>
<?php if (config('protect_content') == 'true'): ?>
    <Script Language='Javascript'>
        document.write(unescape('%3C%73%63%72%69%70%74%20%74%79%70%65%3D%22%74%65%78%74%2F%6A%61%76%61%73%63%72%69%70%74%22%3E%0A%66%75%6E%63%74%69%6F%6E%20%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%65%29%7B%69%66%28%74%79%70%65%6F%66%20%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%6F%6E%73%65%6C%65%63%74%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%6C%73%65%20%69%66%28%74%79%70%65%6F%66%20%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%21%3D%22%75%6E%64%65%66%69%6E%65%64%22%29%65%2E%73%74%79%6C%65%2E%4D%6F%7A%55%73%65%72%53%65%6C%65%63%74%3D%22%6E%6F%6E%65%22%3B%65%6C%73%65%20%65%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%65%2E%73%74%79%6C%65%2E%63%75%72%73%6F%72%3D%22%64%65%66%61%75%6C%74%22%7D%77%69%6E%64%6F%77%2E%6F%6E%6C%6F%61%64%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%64%69%73%61%62%6C%65%53%65%6C%65%63%74%69%6F%6E%28%64%6F%63%75%6D%65%6E%74%2E%62%6F%64%79%29%7D%0A%0A%66%75%6E%63%74%69%6F%6E%20%6D%6F%75%73%65%64%77%6E%28%65%29%7B%74%72%79%7B%69%66%28%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%32%7C%7C%65%76%65%6E%74%2E%62%75%74%74%6F%6E%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%63%61%74%63%68%28%65%29%7B%69%66%28%65%2E%77%68%69%63%68%3D%3D%33%29%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%64%6F%63%75%6D%65%6E%74%2E%6F%6E%63%6F%6E%74%65%78%74%6D%65%6E%75%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%64%72%61%67%73%74%61%72%74%3D%66%75%6E%63%74%69%6F%6E%28%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%3B%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6D%6F%75%73%65%64%6F%77%6E%3D%6D%6F%75%73%65%64%77%6E%0A%0A%77%69%6E%64%6F%77%2E%61%64%64%45%76%65%6E%74%4C%69%73%74%65%6E%65%72%28%22%6B%65%79%64%6F%77%6E%22%2C%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%65%2E%70%72%65%76%65%6E%74%44%65%66%61%75%6C%74%28%29%7D%7D%29%3B%64%6F%63%75%6D%65%6E%74%2E%6B%65%79%70%72%65%73%73%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%69%66%28%65%2E%63%74%72%6C%4B%65%79%26%26%28%65%2E%77%68%69%63%68%3D%3D%36%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%36%7C%7C%65%2E%77%68%69%63%68%3D%3D%36%37%7C%7C%65%2E%77%68%69%63%68%3D%3D%37%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%30%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%33%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%35%7C%7C%65%2E%77%68%69%63%68%3D%3D%38%36%29%29%7B%7D%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%0A%0A%64%6F%63%75%6D%65%6E%74%2E%6F%6E%6B%65%79%64%6F%77%6E%3D%66%75%6E%63%74%69%6F%6E%28%65%29%7B%65%3D%65%7C%7C%77%69%6E%64%6F%77%2E%65%76%65%6E%74%3B%69%66%28%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%32%33%7C%7C%65%2E%6B%65%79%43%6F%64%65%3D%3D%31%38%29%7B%72%65%74%75%72%6E%20%66%61%6C%73%65%7D%7D%0A%3C%2F%73%63%72%69%70%74%3E%0A'));
    </Script>
<?php endif ?>
</body></html> 