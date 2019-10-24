<?php 
   $hack_title = 'Contact Us';
   $hack_description = "Please feel free to contact us using the form below.";
   get_header(); ?>
<body>
   <div class="wrapper">
   <?php get_menu(); ?>
   <div id="content_hero" style="background-image: url(<?php style_theme() ?>/images/hero-contact.jpg)">
      <div class="container">
         <div class="row blurb scrollme animateme" data-when="exit" data-from="0" data-to="1" data-opacity="0" data-translatey="100">
            <div class="col-md-9">
               <span class="title">Have any questions?</span>
               <h1>Please contact us</h1>
            </div>
         </div>
      </div>
   </div>
   <div class="container section negative-margin">
      <div class="row">
         <div class="col-sm-12">
            <div id="map"></div>
         </div>
      </div>
   </div>
   <div class="container section negative-margin contact">
      <div class="row">
         <div class="col-sm-12">
            <h2>Send a message</h2>
         </div>
      </div>
      <div class="row">
         <div class="col-sm-6">
            <form>
               <div class="form-group">
                  <label>Name *</label>
                  <input type="text" />
               </div>
               <div class="form-group">
                  <label>Email *</label>
                  <input type="email" />
               </div>
               <div class="form-group">
                  <label>Where did you hear about us?</label>
                  <input type="text" />
               </div>
               <div class="form-group">
                  <label>Message *</label>
                  <textarea rows="5"></textarea>
               </div>
               <div class="form-group right-align">
                  <button class="btn btn-ghost">Send message</button>
               </div>
            </form>
         </div>
         <div class="col-sm-5 col-sm-push-1">
            <div class="icon-row">
               <div class="col">
                  <span class="circle">
                  <i class="material-icons">place</i>
                  </span>
               </div>
               <div class="col">
                  <h4 class="no-underline">Address</h4>
                  <p>342 Sloane St, London, W1D 3NE</p>
               </div>
            </div>
            <div class="icon-row">
               <div class="col">
                  <span class="circle">
                  <i class="material-icons">email</i>
                  </span>
               </div>
               <div class="col">
                  <h4 class="no-underline">Email</h4>
                  <p><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1871767e775875776e717d6b6c796a367b77366d73">[email&#160;protected]</a></p>
               </div>
            </div>
            <div class="icon-row">
               <div class="col">
                  <span class="circle">
                  <i class="material-icons">phone in talk</i>
                  </span>
               </div>
               <div class="col">
                  <h4 class="no-underline">Telephone</h4>
                  <p>+44 0330 123 4567</p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="section small-padding border-top">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 cta">
               <p>Need help? Contact our support team on</p>
               <p class="gradient-text">0330 123 4567</p>
            </div>
         </div>
      </div>
   </div>



<footer>
   <div class="container">
      <div class="row">
         <div class="col-sm-3">
            <h6>Get in touch</h6>
            <ul>
               <li><a href="#">FAQs</a></li>
               <li><a href="#">Give us feedback</a></li>
               <li><a href="<?php echo view_page( 'contact-us' );?>">Contact us</a></li>
            </ul>
         </div>
         <div class="col-sm-3">
            <h6>About Movie star</h6>
            <ul>
               <li><a href="#">About us</a></li>
               <li><a href="#">Find us</a></li>
               <li><a href="#">Schedule</a></li>
               <li><a href="#">News</a></li>
            </ul>
         </div>
         <div class="col-sm-3">
            <h6>Legal stuff</h6>
            <ul>
               <li><a href="#">Terms &amp; Conditions</a></li>
               <li><a href="<?php echo view_page( 'privacy-policy' );?>">Privacy policy</a></li>
               <li><a href="<?php echo view_page( 'dmca-notice' );?>">DMCA</a></li>
            </ul>
         </div>
         <div class="col-sm-3">
            <h6>Connect with us</h6>
            <ul>
               <li><a href="#"><i class="fa fa-facebook"></i> Facebook</a></li>
               <li><a href="#"><i class="fa fa-twitter"></i> Twitter</a></li>
               <li><a href="#"><i class="fa fa-google-plus"></i> Google +</a></li>
            </ul>
         </div>
      </div>
      <div class="copyright">
         <p>Copyright &copy; <?php echo date('Y') ?> <a href="<?php echo site_url() ?>"><?php echo config('sitename') ?></a>. All rights reserved.</p>
      </div>
   </div>
</footer>
<script data-cfasync="false" src="<?php style_theme() ?>/cdn-cgi/scripts/d07b1474/cloudflare-static/email-decode.min.js"></script>
<script src="<?php style_theme() ?>/js/jquery-2.2.4.min.js"></script>
<script src="<?php style_theme() ?>/js/jquery-ui.min.js"></script>
<script src="<?php style_theme() ?>/js/bootstrap.min.js"></script>
<script src="<?php style_theme() ?>/js/headhesive.min.js"></script>
<script src="<?php style_theme() ?>/js/matchHeight.min.js"></script>
<script src="<?php style_theme() ?>/js/modernizr.custom.js"></script>
<script src="<?php style_theme() ?>/js/slick.min.js"></script>
<script src="<?php style_theme() ?>/js/venobox.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCzbEe1YItOGVa3h_gT66MTFP056M0xQyo"></script>
<script src="<?php style_theme() ?>/js/gmap3.min.js"></script>
<script src="https://use.fontawesome.com/4dfd2d448a.js"></script>
<script src="<?php style_theme() ?>/js/custom.js"></script>

<?php echo histats_write() ?>

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
</body>
</html>