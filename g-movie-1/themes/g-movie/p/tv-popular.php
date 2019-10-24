<?php
/**
 * The template for displaying page Most Popular TV Series
 *
 * @author www.g-silvers.website
 * @subpackage TMDB TWO 1.0
 *
 */
$hack_title = 'Most Popular TV Series';
$hack_description = 'Browse Most Popular TV Shows on '.site_path();
get_header(); ?>
<div class="header-pad"></div>

<div id="main" class="page-detail">
<div class="container">
<div class="pad"></div><ol class="breadcrumb hidden-xs"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo site_url() ?>"><span itemprop="title"><i class="fa fa-home"></i> Home</span></a></li><li class="active"><span>Movies</span></li></ol>


<div class="block_title title_cat">
<div class="filter-toggle"><i class="fa fa-sort mr5"></i>Filter</div>
<h1 class="title">Popular TV Series </h1>
<p>Popular TV . . <a href="<?php echo site_url() ?>" title="Watch movies online - <?php echo site_path() ?>">Watch movies online - <?php echo config('sitename') ?></a> Content is updated Daily and always free!</p>
</div>

<div class="movies-list-wrap">
<div class="movies-list">
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_tv('home_tv_popular_',$page, 'getPopularTVShows') );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 16) as $row ) {
                ?>
<div class="ml-item">
   <a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>HD</span><img data-original="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
<?php 
                }
        endif; 
        ?>
<div class="clearfix"></div>
</div>
</div>
<div id="pagination" style="text-align: left;"><?php
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');

                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = "/?do=tv-popular";
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?></div> 
<div style="margin-bottom:15px;">

</div>

</div>
</div>
<?php get_footer(); ?>