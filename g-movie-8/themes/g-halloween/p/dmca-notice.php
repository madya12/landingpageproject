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
<body>

 <div class="header-pad"></div>

<div id="main" class="page-detail">
    <div class="container">
    
        <div class="pad"></div>
        <div class="pad"></div>
        <div class="main-content main-detail">
            <div id="bread">
                <ol class="breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">DMCA</li>
                </ol>
            </div>
            <div class="infopage">
                <div class="infopage-head">DMCA</div>
                <div class="content"><p>Digital Millennium Copyright Act (DMCA) Notice</p>
<p>
				<p> <?php echo site_path() ?> respects the intellectual property of others.  <?php echo site_path() ?> takes matters of Intellectual Property very seriously and is committed to meeting the needs of content owners while helping them manage publication of their content online.</p>

<p>It should be noted that <a title=" <?php echo site_path() ?>" href="<?php echo site_url() ?>"> <?php echo site_path() ?></a> is a simple search engine of videos available at a wide variety of third party websites.</p>


<p>If you believe that your copyrighted work has been copied in a way that constitutes copyright infringement and is accessible on this site, you may notify our copyright agent, as set forth in the Digital Millennium Copyright Act of 1998 (DMCA). For your complaint to be valid under the DMCA, you must provide the following information when providing notice of the claimed copyright infringement:</p>
 <ul>
 <p><li>A physical or electronic signature of a person authorized to act on behalf of the copyright owner Identification of the copyrighted work claimed to have been infringed</li></p>
   <p> <li>Identification of the material that is claimed to be infringing or to be the subject of the infringing activity and that is to be removed</li></p>
    <p><li>Information reasonably sufficient to permit the service provider to contact the complaining party, such as an address, telephone number, and, if available, an electronic mail address</li></p>
    <p><li>A statement that the complaining party "in good faith believes that use of the material in the manner complained of is not authorized by the copyright owner, its agent, or law"</li></p>
    <p><li>A statement that the "information in the notification is accurate", and "under penalty of perjury, the complaining party is authorized to act on behalf of the owner of an exclusive right that is allegedly infringed"</li></p>
    </ul>

<p>The above information must be submitted as a written, faxed or emailed notification to the following Designated Agent:</p>

<p>Attn: DMCA Office</p>
				<table>
                                        <tr>
                                                <td>Contact Page</td>
                                                <td width="1">&nbsp;:&nbsp; </td>
                                                <td><a href="<?php echo view_page( 'contact-us' );?>">Contact US</a></td>
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
                                </table><br />
				<p>
				WE CAUTION YOU THAT UNDER FEDERAL LAW, IF YOU KNOWINGLY MISREPRESENT THAT ONLINE MATERIAL IS INFRINGING, YOU MAY BE SUBJECT TO HEAVY CIVIL PENALTIES. THESE INCLUDE MONETARY DAMAGES, COURT COSTS, AND ATTORNEYS' FEES INCURRED BY US, BY ANY COPYRIGHT OWNER, OR BY ANY COPYRIGHT OWNER'S LICENSEE THAT IS INJURED AS A RESULT OF OUR RELYING UPON YOUR MISREPRESENTATION. YOU MAY ALSO BE SUBJECT TO CRIMINAL PROSECUTION FOR PERJURY.
				</p>
				<p>
				This information should not be construed as legal advice, for further details on the information required for valid DMCA notifications, see 17 U.S.C. 512(c)(3).
				</p>
                </div>
            </div>
        </div>
 
 </div>
        </div>
 

<?php get_footer(); ?>