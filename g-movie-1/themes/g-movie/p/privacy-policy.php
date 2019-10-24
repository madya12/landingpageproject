<?php 
/**
 * The template for displaying page dmca
 *
 * @package www.g-silvers.website
 * @subpackage tmdbtwo
 * @since TMDB Two 1.0
 */
$hack_title = 'Privacy';
$hack_description = "If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site.";
get_header(); ?>
<div class="header-pad"></div>

<div id="main" class="page-detail">
<div class="container">
<div class="pad"></div><ol class="breadcrumb hidden-xs"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo site_url() ?>"><span itemprop="title"><i class="fa fa-home"></i> Home</span></a></li><li class="active"><span>Movies</span></li></ol>


<div class="block_title title_cat">
<div class="filter-toggle"><i class="fa fa-sort mr5"></i>Filter</div>
<h1 class="title">Privacy </h1>
<p>Privacy Policy . . <a href="<?php echo site_url() ?>" title="Watch movies online - <?php echo site_path() ?>">Watch movies online - <?php echo config('sitename') ?></a> Content is updated Daily and always free!</p>
</div>

<div class="page-detail">

                <div class="panel-heading">
                        <h1 itemprop="title" class="title">Privacy Policy</h1>
                <hr>
                </div>

                <div itemprop="description" class="panel-body">
                        <p> If you require any more information or have any questions about our privacy policy, please feel free to contact us by email at info@<?php echo $hostname;?>. </p> 
                        <p> At <?php echo $hostname;?>, the privacy of our visitors is of extreme importance to us. This privacy policy document outlines the types of personal information is received and collected by <?php echo $hostname;?> and how it is used. </p> 
                        <p> <b>Log Files</b><br> Like many other Web sites, <?php echo $hostname;?> makes use of log files. The information inside the log files includes internet protocol ( IP ) addresses, type of browser, Internet Service Provider ( ISP ), date/time stamp, referring/exit pages, and number of clicks to analyze trends, administer the site, track users movement around the site, and gather demographic information. IP addresses, and other such information are not linked to any information that is personally identifiable. </p> 
                        <p> <b>Cookies and Web Beacons</b><br> <?php echo $hostname;?> does use cookies to store information about visitors preferences, record user-specific information on which pages the user access or visit, customize Web page content based on visitors browser type or other information that the visitor sends via their browser. </p> 
                        <b>DoubleClick DART Cookie</b><br> 
                        <p> 
.:: Google, as a third party vendor, uses cookies to serve ads on <?php echo $hostname;?>.<br> 
.:: Google's use of the DART cookie enables it to serve ads to your users based on their visit to <?php echo $hostname;?> and other sites on the Internet. <br> 
.:: Users may opt out of the use of the DART cookie by visiting the Google ad and content network privacy policy at the following URL - http://www.google.com/privacy_ads.html </p> 
                        <p> Some of our advertising partners may use cookies and web beacons on our site. Our advertising partners include ....... <br> Google Adsense
                        <br></p> 
                        <p>These third-party ad servers or ad networks use technology to the advertisements and links that appear on <?php echo $hostname;?> send directly to your browsers. They automatically receive your IP address when this occurs. Other technologies ( such as cookies, JavaScript, or Web Beacons ) may also be used by the third-party ad networks to measure the effectiveness of their advertisements and / or to personalize the advertising content that you see. </p> 
                        <p><?php echo $hostname;?> has no access to or control over these cookies that are used by third-party advertisers. </p> 
                        <p>You should consult the respective privacy policies of these third-party ad servers for more detailed information on their practices as well as for instructions about how to opt-out of certain practices. <?php echo $hostname;?>'s privacy policy does not apply to, and we cannot control the activities of, such other advertisers or web sites. </p> 
                        <p>If you wish to disable cookies, you may do so through your individual browser options. More detailed information about cookie management with specific web browsers can be found at the browsers' respective websites. </p>
                </div>
        </div><!-- panel-body -->
<div style="margin-bottom:15px;">

</div>

</div>
</div>
<?php get_footer(); ?>