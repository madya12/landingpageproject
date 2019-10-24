<?php 
$hack_title = 'Contact Us';
$hack_description = "Please feel free to contact us using the form below.";
get_header(); ?>
<body>

   
 
<div class="header-pad"></div>
<div class="csrf-token">
    <input id="csrf-token-rating" name="csrf_token" value="b95c4f2a874fcff68fa907701c8b54eb" type="hidden"></div>
<div id="main" class="page-detail">
    <div class="container">
    
        <div class="pad"></div>
        <div class="pad"></div>
        <div class="main-content main-detail">
            <div id="bread">
                <ol class="breadcrumb">
                    <li><a href="<?php echo site_url() ?>">Home</a></li>
                    <li class="active">Contact Us</li>
                </ol>
            </div>
            <div class="infopage">
                <div class="infopage-head">CONTACT US</div>
                
                <div class="content"> 
              <div id="contact_form" class="row">
        <div class="col-md-12">
        
      <div id="contact_form" class="row">
        <div class="col-md-12">
          <h2>Contact Us</h2>
          <form role="form" id="feedbackForm"  data-toggle="validator" data-disable="false">
            <div class="form-group">
              <label class="control-label" for="name">Name *</label>
              <div class="input-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" required/>
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Please enter your name.</span>
            </div>
            <!-- UNCOMMENT HERE IF YOU WANT TITLE, COMPANY, WEBSITE OR PHONE FIELDS - you must also uncomment values in $fields_req in sendmail.php
            <div class="form-group">
              <label class="control-label" for="title">Title</label>
              <input type="text" class="form-control optional" id="title" name="title" />
            </div>
            <div class="form-group">
              <label class="control-label" for="company">Company</label>
              <input type="text" class="form-control optional" id="company" name="company" />
            </div>
            <div class="form-group">
              <label class="control-label" for="website">Website</label>
              <input type="url" class="form-control optional" id="website" name="website" />
            </div>
            <div class="form-group">
              <label class="control-label" for="phone">Phone</label>
              <input type="tel" class="form-control optional" id="phone" name="phone" placeholder="Enter your phone (Optional)"/>
              <span class="help-block" style="display: none;">Please enter a valid phone number.</span>
            </div>
            -->
            
            <div class="form-group">
              <label class="control-label" for="email">Email Address *</label>
              <div class="input-group">
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required/>
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Please enter a valid e-mail address.</span>
            </div>
            <div class="form-group">
              <label class="control-label" for="message">Message *</label>
              <div class="input-group">
                <textarea rows="5" cols="30" class="form-control" id="message" name="message" placeholder="Enter your message" required></textarea>
                <span class="input-group-addon"><i class="glyphicon glyphicon-unchecked form-control-feedback"></i></span>
              </div>
              <span class="help-block" style="display: none;">Please enter a message.</span>
            </div>
            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6Lczhg0TAAAAAI1B5xGiSQQMlAZA-AYbDfvrQVHQ"></div>
              <span class="help-block" style="display: none;">Please check that you are not a robot.</span>
            </div>
            <span class="help-block" style="display: none;">Please enter a the security code.</span>
            <button type="submit" id="feedbackSubmit" class="btn btn-primary btn-lg"  style="display: block; margin-top: 10px;">Send Feedback</button>
          </form>
        </div><!--/span-->
      </div><!--/row-->
      <hr>
    </div><!--/.container-->
    <!-- <======= UP TO HERE --><script src="https://www.gstatic.com/recaptcha/api2/r20150915103233/recaptcha__id.js" async="" type="text/javascript"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="<?php style_theme();?>/vender/intl-tel-input/js/intlTelInput.min.js"></script>
    <script src="<?php style_theme();?>/js/contact-form.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </div>
                
                  </div>
                
                
            </div>   
                
                
            </div>
            </div>
 
<?php get_footer(); ?>