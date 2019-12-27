<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/app/config/autoload.php');
header("Content-Type: text/xml;charset=utf-8");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="https://www.w3.org/2001/XMLSchema-instance" xmlns:image="https://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="https://www.sitemaps.org/schemas/sitemap/0.9 https://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url><loc><?php echo site_url();?>/sitemap.xml</loc><changefreq>daily</changefreq><priority>1.0</priority></url>

<?php
foreach(sitemap_search('500','0',',') as $sitemap) {
    $date = date('Y-m-d', strtotime( 'r' ));
    $link = _seo($sitemap['title']);  
    echo '<url><loc>'.$link.'</loc><lastmod>'.$date.'</lastmod><changefreq>weekly</changefreq><priority>0.8</priority></url>';
}
?>
</urlset>