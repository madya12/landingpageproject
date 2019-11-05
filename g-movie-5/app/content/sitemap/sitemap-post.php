<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/app/config/autoload.php');
header("Content-Type: text/xml;charset=utf-8");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url><loc><?php echo site_url();?>/sitemap.xml</loc><changefreq>daily</changefreq><priority>1.0</priority></url>

<?php
if(recent_posts() != ''):
foreach(recent_posts('500') as $sitemap) {
    $date = date('Y-m-d', strtotime( $sitemap['pubdate'] ));
    $link = $sitemap['slug'];  
    echo '<url><loc>'.site_url().$link.'</loc><lastmod>'.$date.'</lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>';
}
endif;
?>
</urlset>