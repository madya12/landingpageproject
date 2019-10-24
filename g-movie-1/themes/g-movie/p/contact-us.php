<?php 
$hack_title = 'Contact Us';
$hack_description = "Please feel free to contact us using the form below.";
get_header(); ?>
<div class="header-pad"></div>

<div id="main" class="page-detail">
<div class="container">
<div class="pad"></div><ol class="breadcrumb hidden-xs"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo site_url() ?>"><span itemprop="title"><i class="fa fa-home"></i> Home</span></a></li><li class="active"><span>Movies</span></li></ol>


<div class="block_title title_cat">
<div class="filter-toggle"><i class="fa fa-sort mr5"></i>Filter</div>
<h1 class="title">Contact Us </h1>
<p>Contact Us . . <a href="<?php echo site_url() ?>" title="Watch movies online - <?php echo site_path() ?>">Watch movies online - <?php echo config('sitename') ?></a> Content is updated Daily and always free!</p>
</div>

<div class="page-detail">
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
<div style="margin-bottom:15px;">

</div>

</div>
</div>
<?php get_footer(); ?>