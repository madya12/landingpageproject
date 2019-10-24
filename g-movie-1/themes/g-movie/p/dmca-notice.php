<?php 
/**
 * The template for displaying page dmca
 *
 * @package www.g-silvers.website
 * @subpackage tmdbtwo
 * @since TMDB Two 1.0
 */
$hack_title = 'DMCA Notice';
$hack_description = "If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site.";
get_header(); ?>
<div class="header-pad"></div>

<div id="main" class="page-detail">
<div class="container">
<div class="pad"></div><ol class="breadcrumb hidden-xs"><li itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb"><a itemprop="url" href="<?php echo site_url() ?>"><span itemprop="title"><i class="fa fa-home"></i> Home</span></a></li><li class="active"><span>Movies</span></li></ol>


<div class="block_title title_cat">
<div class="filter-toggle"><i class="fa fa-sort mr5"></i>Filter</div>
<h1 class="title">DMCA </h1>
<p>DMCA . . <a href="<?php echo site_url() ?>" title="Watch movies online - <?php echo site_path() ?>">Watch movies online - <?php echo config('sitename') ?></a> Content is updated Daily and always free!</p>
</div>

<div class="page-detail">

                <div class="panel-heading">
                        <h1 itemprop="title" class="title">DMCA Notice</h1>
                <hr>
                </div>

                <div itemprop="description" class="panel-body">

                        <p><?php echo site_path() ?> respects the intellectual property rights of all content creators, whether their work is affiliated with our site or not. </p>

                        <p>If you have reason to suspect that your intellectual property rights have been infringed in any way that connects to our site, we strongly advise that you contact our copyright agent with a complaint as soon as possible. We take all violations of the Digital Millennium Copyright Act of 1998 extremely seriously. In order to ensure your complaint remains legitimate under the DCMA, please ensure your copyright complaint contains all of the following information:</p> 

                        <ul style="text-align: left;">
				<li>A signature, electronic or physical, of an individual who has been authorized to represent you, the copyright holder</li>
				<li>Clear identification of the copyrighted item(s) in question, as well as identification of the work(s) infringing on the copyright holder’s intellectual property rights</li>
				<li>Contact information for you, the copyright holder, that <?php echo site_path() ?> can use to contact you, including your full name, telephone number, physical address and e-mail address</li>
				<li>A written letter stating that you, the copyright holder, “in good faith believes that the use of the material in the manner complained of is not authorized by the copyright owner, its agent or the law”</li>
				<li>A statement that the "information in the notification is accurate", and "under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed"</li>
                        </ul>

                        <p>The statement of complaint that you provide us, containing all of the above information, should be sent to our Designated Copyright Agent by post, fax or email to one of the respective contact addresses below:</p>
                        <p>
                                <table>
                                        <tr>
                                                <td>Contact Page</td>
                                                <td width="1">&nbsp;:&nbsp; </td>
                                                <td><a href="<?php echo view_page( 'contact-us' );?>"><?php echo view_page( 'contact-us' ) ?></a></td>
                                        </tr>
                                        <tr>
                                                <td>FAX </td>
                                                <td>&nbsp;:&nbsp; </td>
                                                <td>+1-800-585-7265</td>
                                        </tr>
                                        <tr>
                                                <td>Email </td>
                                                <td>&nbsp;:&nbsp; </td>
                                                <td><?php echo 'dmca@'.site_path() ?></td>
                                        </tr>
                                </table>
                        </p>

                        <p>PLEASE REMEMBER THAT IF YOU CHOOSE TO MISREPRESENT ANY OF THE DETAILS REGARDING AN ALLEGED COPYRIGHT INFRINGEMENT, YOU WILL BE SUBJECT TO SERIOUS CIVIL PENALTIES UNDER FEDERAL LAW, INCLUDING ANY MONETARY DAMAGES, COURT COSTS AND LAWYERS FEES ACCRUED BY US, AND ANY COPYRIGHT HOLDERS OR COPYRIGHT HOLDER’S LICENSEES WHO ARE INJURED IN ANY CAPACITY FOLLOWING OUR RELIANCE ON THE VERACITY OF YOUR REPRESENTATION. YOU COULD ALSO BE CRIMINALLY PROSECUTED FOR ACTS OF PERJURY. </p>

                        <p>Do not take anything outlined in this document as formal legal advice. For further information on the details required to lodge a formal DMCA notification, please refer to 17 U.S.C. 512(c)(3).</p> 
                </div>
        </div><!-- panel-body -->
<div style="margin-bottom:15px;">

</div>

</div>
</div>
<?php get_footer(); ?>