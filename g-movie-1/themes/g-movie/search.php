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

<div id="main" class="page-detail">
<div class="container">
<div class="pad"></div><ol class="breadcrumb hidden-xs"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo site_url() ?>"><span itemprop="title"><i class="fa fa-home"></i> Home</span></a></li><li class="active"><span>Movies</span></li></ol>

<div class="block_title title_cat">
<div class="filter-toggle"><li class="active"><a data-toggle="tab" href="#tvtab">TV Series</a></li></div>
<div class="filter-toggle"><li><a data-toggle="tab" href="#movietab">Movies</a></li></div>
<h1 class="title">Search Result for "<?php echo $newquery;?>" </h1>
<p>Search Result for "<?php echo $newquery;?>" . . <a href="<?php echo site_url() ?>" title="Watch movies online - <?php echo site_path() ?>">Watch movies online - <?php echo config('sitename') ?></a> Content is updated Daily and always free!</p>
</div>
        <ul class="nav nav-tabs" style="margin-top: 15px;">
                <li class="active"><a data-toggle="tab" href="#tvtab">TV Series</a></li>
                <li><a data-toggle="tab" href="#movietab">Movies</a></li>
        </ul>
        <div class="tab-content">
        <div id="movietab" class="tab-pane">
<div class="movies-list-wrap">
<div class="movies-list">
        <?php 
        if ( empty( $_GET['page'] ) ) { $page = 1; }else{ $page = $_GET['page']; }
        $Movies = unserialize( ocim_data_search_movie(limit_word($newquery, 3),$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 12) as $row ) {
                ?>
                <div class="ml-item">
   <a href="<?php echo seo_movie($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>Movies</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>
                
            <?php 
                }
        else:
            $unserialize = unserialize( ocim_search(limit_word($newquery, 3), limit_word($newquery, 3).'_search') );
            if( is_array($unserialize['result']) ):
                foreach ( (array) $unserialize['result'] as $sect) {
                ?>
                <div class="ml-item">
   <a href="<?php echo seo_video($sect['id'],$sect['title']);?>" class="ml-mask cluetip jt" title="<?php echo $sect['title'];?>">
      <span class='mli-quality'>Movies</span><img src="<?php echo $sect['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $sect['title'];?>">
      <span class="mli-info">
         <h2><?php echo $sect['title'];?></h2>
      </span>
   </a>
</div>
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
        </div>
        <div class="clearfix"></div>
        <nav class="text-center">
                <?php 
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
                        $pagination->setPage($_GET['page']); // dont change it
                       echo $pagination->showPage();
                endif;
                ?>
        </nav>
        </div>
        </div>
        <?php if (config('tvdb_search') == "false"): ?>
        <div id="tvtab" class="tab-pane active">
            <div class="movies-list-wrap">
            <div class="movies-list">
                <?php
                $tvdb  = new Tvdb(options('tvdb_api'));
                $serie = $tvdb->search($newquery);
                $count = 0;
                ?>
                <?php if (!empty($serie)): ?>
                <?php foreach ($serie as $tv): ?>
                <?php $_seri = $tvdb->seriesEpisode($tv->id)['serie'] ?>
                <div class="ml-item">
   <a href="<?php seo_serie($tv->id) ?>" class="ml-mask cluetip jt" title="<?php echo $tv->name ?>">
      <span class='mli-quality'>Series</span><img src="<?php echo $tvdb->poster($_seri->poster) ?>" class="lazy thumb mli-thumb" alt="<?php echo $tv->name ?>">
      <span class="mli-info">
         <h2><?php echo $tv->name ?></h2>
      </span>
   </a>
</div>
                <?php endforeach ?>
                <?php else: ?>
                <div class="row">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <h2><i class="fa fa-exclamation"></i> No TV Show Found for this search</h2>
                        </div>
                    </div>
                </div>
                <?php endif ?>
                </div>
            </div>
                <br>
        </div>
        </div>
        <?php else: ?>
                <div id="tvtab" class="tab-pane active">
            <div class="movies-list-wrap">
            <div class="movies-list">
                            <?php 
                            $TV = unserialize( ocim_data_search_tv(limit_word($newquery, 3),$page) );
                            if( is_array($TV['result']) ):
                                foreach ( (array) array_slice($TV['result'], 0, 12) as $row ) {
                                    ?>
                                    <div class="ml-item">
   <a href="<?php echo seo_tv($row['id'],$row['title']);?>" class="ml-mask cluetip jt" title="<?php echo $row['title'];?>">
      <span class='mli-quality'>Movies</span><img src="<?php echo $row['poster_path'];?>" class="lazy thumb mli-thumb" alt="<?php echo $row['title'];?>">
      <span class="mli-info">
         <h2><?php echo $row['title'];?></h2>
      </span>
   </a>
</div>

                                    <?php 
                                } 
                                else:
                                    ?>
                                <div class="row">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <h2><i class="fa fa-exclamation"></i> No TV Show Found for this search</h2>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <?php
                                endif;
                                ?>
                            </div>
                            <div class="clearfix"></div>
                            <nav class="text-center">
                                <?php 
                                if ($TV['total_results'][0] > 19) :
                                    require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');

                                if ($TV['total_results'][0] > 1000) :
                                    $totalResults = 1000;
                                else:
                                    $totalResults = $TV['total_results'][0];
                                endif;
                                $limit  = 20; 
                                $link   = '/?s='.get_search_query();
                                $pagination = new CSSPagination($totalResults, $limit, $link ); // create instance object
                                $pagination->setPage($_GET['page']); // dont change it
                                echo $pagination->showPage();
                                endif;
                                ?>
                            </nav>
                        </div>
                    </div>
                </div>   
                <?php endif ?>
</div>
</div>
<?php include('footer.php'); ?>