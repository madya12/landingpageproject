<?php
/*
| -------------------------------------------------------------------------------
| Author            : G-silver
| Template Name     : Black V1
| -------------------------------------------------------------------------------
*/
include('header.php');
$newquery = bad_words( get_search_query() );
?>
<div class="header-pad"></div>

<div id="main" class="page-category">
<div class="container">
<div class="pad"></div><ol class="breadcrumb hidden-xs"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo site_url() ?>/"><span itemprop="title"><i class="fa fa-home"></i> Home</span></a></li><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><span itemprop="title"><a href="<?php echo site_url() ?>/library" title="Library" itemprop="url">Library</a> </span></li><li class="active"><span>0-9</span></li></ol>


<div class="main-content main-category">
<div class="block_title title_cat" style="border: none;">
<h1 class="title">Movies By Letter</h1>
<p>List of the most attractive genre. Providing movies online at <?php echo site_path() ?></p>
<div class="share">
<script type="text/javascript"> var addthis_share = { url: "<?php echo site_url() ?>/library", }</script>
<div class="addthis_native_toolbox"></div>
</div>
</div>
<div class="movies-list-wrap">
<div class="ml-alphabet">
 <div class="movies-letter">
<a class="btn btn-letter active" href="<?php echo site_url() ?>/library/?s=0-9">0-9</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=a">A</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=b">B</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=c">C</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=d">D</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=e">E</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=f">F</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=g">G</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=h">H</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=i">I</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=j">J</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=k">K</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=l">L</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=m">M</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=n">N</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=o">O</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=p">P</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=q">Q</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=r">R</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=s">S</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=t">T</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=u">U</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=v">V</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=w">W</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=x">X</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=y">Y</a>
<a class="btn btn-letter " href="<?php echo site_url() ?>/library/?s=z">Z</a>
<div class="clearfix"></div>
</div>
</div>
<div class="letter-movies-lits">
<table class="table table-striped">
<tbody>
<tr class="mlnew-head">
<td class="mlnh-1">#</td>
<td colspan="2" class="mlnh-letter">Movie</td>
<td class="mlnh-3">Year</td>
<td class="mlnh-3">Quality</td>
<td class="mlnh-5">Country</td>
<td class="mlnh-4">Genre</td>
<td class="mlnh-6">IMDb</td>
</tr>
<?php 
        if ( empty( $_GET[page] ) ) { $page = 1; }else{ $page = $_GET[page]; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 30) as $row ) {
                ?>
<tr class="mlnew">
<td class="mlnh-1">1</td>
<td class="mlnh-thumb">
<a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>" class="thumb">
<img src="<?php echo $row['poster_path'];?>" title="<?php echo $row['title'];?>" alt="<?php echo $row['title'];?>">
</a>
</td>
<td class="mlnh-2">
<h2><a href="<?php echo seo_movie($row['id'],$row['title']);?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></h2>
</td>
<td><?php echo date('Y', strtotime( $row['release_date'] ) );?></td>
<td class="mlnh-3">HD</td>
<td class="mlnh-4">
<a href='<?php echo seo_movie($row['id'],$row['title']);?>' title='<?php echo $row['production_countries'];?>'><?php echo $row['production_countries'];?></a> </td>
<td class="mlnh-5">
<?php echo $genre;?> </td>
<td class="mlnh-6"><span class="label label-warning"><?php echo $row['vote_average'];?></span></td>
</tr>
<?php 
                }
        else:
            $unserialize = unserialize( ocim_search(limit_word($newquery, 3), limit_word($newquery, 3).'_search') );
            if( is_array($unserialize['result']) ):
                foreach ( (array) $unserialize['result'] as $sect) {
                ?>
<tr class="mlnew">
<td class="mlnh-1">1</td>
<td class="mlnh-thumb">
<a href="<?php echo seo_movie($sect['id'],$sect['title']);?>" title="<?php echo $sect['title'];?>" class="thumb">
<img src="<?php echo $sect['poster_path'];?>" title="<?php echo $sect['title'];?>" alt="<?php echo $sect['title'];?>">
</a>
</td>
<td class="mlnh-2">
<h2><a href="<?php echo seo_movie($sect['id'],$sect['title']);?>" title="<?php echo $sect['title'];?>"><?php echo $sect['title'];?></a></h2>
</td>
<td><?php echo date('Y', strtotime( $sect['release_date'] ) );?></td>
<td class="mlnh-3">HD</td>
<td class="mlnh-4">
<a href='<?php echo seo_movie($sect['id'],$sect['title']);?>' title='<?php echo $sect['production_countries'];?>'><?php echo $sect['production_countries'];?></a> </td>
<td class="mlnh-5">
<?php echo $genre;?> </td>
<td class="mlnh-6"><span class="label label-warning"><?php echo $sect['vote_average'];?></span></td>
</tr>
<?php
                }
            else: ?>
            <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2><i class="fa fa-exclamation"></i> No Movie Found for this search</h2>
                        </div>
                    </div>
                </div>
                <br>
            <?php 
            endif; 
        endif;
        ?>
</tbody>
</table>
</div>
<div id="pagination" style="text-align: left;"><nav><?php 
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');
                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = '/?s='.get_search_query();
                        $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                        $pagination->setPage($_GET[page]); // dont change it
                       echo $pagination->showPage();
                endif;
                ?></nav></div> 
<div style="margin-bottom:15px;">
 </div>

</div>
</div>
</div>
</div>
<?php include('footer.php'); ?>