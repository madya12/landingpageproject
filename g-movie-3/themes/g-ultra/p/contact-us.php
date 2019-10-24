<?php 
$hack_title = 'Contact Us';
$hack_description = "Please feel free to contact us using the form below.";
get_header(); ?>
       <div class="container menu-responsive content-responsive">
            <div class="row">
<div class="col-md-9 col-sm-9 col-xs-12">
  <div class="panel panel-active">
    <div class="panel-heading">
      <h1 itemprop="title" class="title">Contact us</h1><hr>
    </div>

    <div itemprop="description" class="panel-body">
            <form action="" method="POST" role="form">
        <div class="form-group">
          <label for="">Your Name : </label>
          <input type="text" class="form-control" id="" name="name" placeholder="Your Name ..">
        </div>
        <div class="form-group">
          <label for="">Your Email : </label>
          <input type="email" class="form-control" id="" placeholder="Email Address ..">
        </div>
        <div class="form-group">
          <label for="">Your Message : </label>
          <textarea name="message" rows="7" class="form-control" cols="50"></textarea> 
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success"><i class="fa fa-send"></i> Submit Message</button>
        </div>
      </form>
    </div>

  </div><!-- panel-body -->

</div><!-- .col-md-8 -->


<div style="float: right;">
    </div>
</div>
</div><!-- row -->

<?php get_footer(); ?>