<?php 
require_once($_SERVER['DOCUMENT_ROOT'] . '/app/config/autoload.php');
header("Content-Type: text/xml;charset=utf-8");
echo '<?xml version="1.0" encoding="utf-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd">

<url><loc><?php echo site_url();?>/</loc><changefreq>daily</changefreq><priority>1.0</priority></url>
<?php
$hostname = $_SERVER['HTTP_HOST'];
if ($handle = opendir($_SERVER['DOCUMENT_ROOT'] .'/app/content/sitemap/')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != "movie" && $entry != "tv" && $entry != "sitemap.php" && $entry != "error_log" && $entry != "index.php") {
            $sitemap = str_replace('php','xml',$entry);
            $hold[] = $sitemap;
        }
    }

    natsort($hold);
    if(is_array($hold)):
        foreach ($hold as $key => $val) {
            echo '<url><loc>http://'.$hostname.'/'.$val.' </loc><lastmod>'.date('Y-m-d', strtotime(date("r")) ).'</lastmod><changefreq>daily</changefreq><priority>0.8</priority></url>';
        }
    endif;
    closedir($handle);
}?>
</urlset>