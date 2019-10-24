<?php 
$hack_title = 'Contact Us';
$hack_description = "Please feel free to contact us using the form below.";
get_header(); ?>
 <!-- Page Header -->
    <div class="page-header" style="  background-image: url(<?php style_theme() ?>/assets/images/bg/page-header.png);
  background-position: center center;
  background-size: cover; ">
        <div class="page-header-overlay">
            <div class="container">
                <h2 class="page-title">Disclaimer Policy</h2>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h1 itemprop="title" class="title">Contact us</h1><hr>
    </div>

    <div itemprop="description" class="panel-body">
      <?php if (isset($_POST['name'])): ?>
        <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Hi <?php echo $_POST['name'] ?>,</strong>  Your Message Has Sent...
        </div>
      <?php endif ?>
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

<?php get_sidebar(); ?>

<?php get_footer(); ?>