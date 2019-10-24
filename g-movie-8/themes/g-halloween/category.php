<?php
/*
| -------------------------------------------------------------------------------
| Author            : GS
| Template Name     : G-Black
| -------------------------------------------------------------------------------
*/
if ( empty( $_GET[page] ) ) { 
        $pathinfo = pathinfo ($uri);
        $dirname = str_replace('/'.config('category_url').'/','',$pathinfo['dirname']);
        $filename = $pathinfo['filename'];
        $page = 1;
}else{ 
        $dirname = $_GET[terms];
        $filename = $_GET[id];
        $page = $_GET[page];
        $hal = ' Pages ' .$page;
        $title_after = $hal;
        $description_after = $hal . ' on ' . site_path();
}

$hack_title = ucwords($dirname) . ' Movies';
include('header.php');
?>

<div class="module">
	<div class="content">
		<header>
			<h1>Category for "<?php echo $dirname;?>"<?php echo $hal;?></h1>
			<span class="s_trending">
				<a href="<?php echo view_page( 'movies-nowplay' );?>" class="m_trending active">Movies</a>
				<a href="<?php echo view_page( 'tv-ontheair' );?>" class="m_trending">TV Show</a>
			</span>
		</header>
		
		<div class="items">
		<?php 
        $Movies = unserialize( ocim_data_genre('home_genre_'.$filename.'_',$filename,$page) );
        if( is_array($Movies['result']) ):
        foreach ( (array) array_slice($Movies['result'], 0, 20) as $row ) {
                ?>
							<article id="post-1418" class="item movies">
				<div class="poster">
					<img src="<?php echo $row['poster_path'];?>" alt="<?php echo $row['title'];?>">
					<div class="rating"><span class="icon-star2"></span> <?php echo $row['vote_average'];?></div>
					<span class="quality">HD</span> <a href="<?php echo seo_movie($row['id'],$row['title']);?>"><div class="see"></div></a>
				</div>
				<div class="data">
					<h3><a href="<?php echo seo_movie($row['id'],$row['title']);?>"><?php echo $row['title'];?></a></h3>
					<span><?php echo date('Y', strtotime( $row['release_date'] ) );?></span>
				</div>
			</article>
			<?php 
                }
        endif; 
        ?>
		
		</div>
		
		<div class="pagination">
			<?php 
                if ($Movies['total_results'][0] > 19) :
                        require_once( DOCUMENT_ROOT. '/app/class/CSSPagination.class.php');

                        if ($Movies['total_results'][0] > 1000) :
                                $totalResults = 1000;
                        else:
                                $totalResults = $Movies['total_results'][0];
                        endif;
                        $limit  = 20; 
                        $link   = '/?action=category&terms='.$dirname.'&id='.$filename;
                        $pagination = new CSSPagination($totalResults, $limit, $link );
                        $pagination->setPage($_GET[page]);
                       echo $pagination->showPage();
                endif;
                ?>
		</div>
		<div class='resppages'>
			
		</div>

	</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>