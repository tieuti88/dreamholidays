<?php 
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage Dreamholidays
 * @since Dreamholidays 1.0
 */

get_header(); 
?>
      <div class="container-fluid no-padding">
            <div id="full-width-video">
               <div class="full-width-video-text">
                  <h1>A better way to see <span class="no-wrap">the world</span><sup style="font-size:16px;position:relative;top:-17px;">®</sup>.</h1>
                  <p class="lead" style="color:white;">Dreamholidays<span style="font-size:16px;position:relative;top:-3px;">™</span> Signature Experiences empowers travelers to expand their horizons, seek out new destinations, and see their world in new and unexpected ways.</p>
                  <p class="btn-contain">
                     <a href="<?=get_site_url()?>/destinations" class="btn btn-lg btn-primary">Explore Destinations</a>
                     <a href="<?=get_site_url()?>/vacation-ideas" class="btn btn-lg btn-primary green">Get Inspired</a>
                  </p>
               </div>
               <div class="full-width-video-overlay"></div>
               <div id="desktopVideo" class="video-container" style="display: block;">
                  <div style="position: absolute; width: 100%; height: 100%">
                     <video id="homepageVideo" class="video-js" style="position: absolute; width: 100%; height: 100%" controls="false" loop="true" autoplay="true" poster="https://vistana-web-static.s3.amazonaws.com/vistana-web/assets/video/homepage/vistana_ambient_new_poster.png">
                        <source id="openingVideo" src="https://player.vimeo.com/external/161775450.hd.mp4?s=553a4e339920109ab61834c942dd7acfc0ff6bb3&amp;profile_id=119" type="video/mp4">
                     </video>
                  </div>
               </div>
            </div>
         </div>
         <div class="container features">
            <div class="row">
               <div class="col-sm-4 one">
                  <div class="feature-block">
                     <div>
                        <img src="<?=get_site_url()?>/wp-content/uploads/2017/01/newsbanner-new.png">
                        <h2>News</h2>
                        <h4>DREAMHOLIDAYS RESORTS WIN TRIPADVISOR<sup>®</sup> AWARD</h4>
                        <p>The "world's largest travel site" has recognized 16 Sheraton<sup>®</sup> Vacation Club and Westin<sup>®</sup> Vacation Club villa resorts with its Certificate of Excellence award.</p>
                     </div>
                     <a href="<?=get_site_url()?>/news" class="btn btn-primary">Learn More</a>
                  </div>
               </div>
               <div class="col-sm-4 two">
                  <div class="feature-block">
                     <div>
                        <img src="<?=get_site_url()?>/wp-content/uploads/2017/01/16-WCRO-1157_Pick-Win-Go-Banner_Vistana-HP_Banner_v1.png">
                        <h2>Featured Sweepstakes</h2>
                        <h4>Pick. Win. Go! Vacation Sweepstakes</h4>
                        <p>Enter to win a 5-day, 4-night vacation at your choice of 7 great villa vacation resorts, or 50,000 Starpoints <sup>®</sup> from the Starwood Preferred Guest <sup>®</sup> program.</p>
                     </div>
                     <a href="<?=get_site_url()?>/sweepstakes/pick-win-go?it&amp;it_placement=Overview_Page_HP" class="btn btn-primary">Enter Now</a>
                  </div>
               </div>
               <div class="col-sm-4 three">
                  <div class="feature-block">
                     <div>
                        <img src="<?=get_site_url()?>/wp-content/uploads/2017/01/16-ooc-1527_vi_whale_banner.png">
                        <h2>Featured Vacation Idea</h2>
                        <h4>Swim with Whale Sharks in Cancún</h4>
                        <p>Staying at The Westin Lagunamar Ocean Resort creates the perfect opportunity to swim side-by-side with these gentle giants. </p>
                     </div>
                     <a href="<?=get_site_url()?>/vacation-ideas/swim-whale-sharks-cancun" class="btn btn-primary">Learn More</a>
                  </div>
               </div>
            </div>
         </div>
         <div id="desktopDevice" style="display: block;">
            <div class="container-fluid brand-section no-padding">
               <div class="container brands">
                  <div class="row">
                     <div class="col-md-12">
                        <div class="intro">
                           <h1>Iconic Brands. Unforgettable Experiences.</h1>
                           <p><span style="color: #fff;">Through an exclusive relationship with Sheraton and Westin, and as an authorized SPG<sup>®</sup> partner, Dreamholidays<sup>™</sup> Signature Experiences offers a world of inspiring travel options.</span></p>
                        </div>
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-4 no-padding">
                        <div class="brand sheraton">
                           <div class="col-md-12">
                              <div class="brand-logo">
                                 <div class="brand-logo-image">
                                    <img src="<?=get_site_url()?>/wp-content/uploads/2017/01/logo-sheraton-white.png">
                                 </div>
                              </div>
                              <div class="brand-hero">
                                 <img src="<?=get_site_url()?>/wp-content/uploads/2017/01/home-back-sheraton.png">
                              </div>
                              <div class="brand-text">
                                 <h3>Vacation<br>Your&nbsp;Way</h3>
                                 <p>From family fun in sunny Orlando, to relaxing at a poolside oasis in Arizona, to skiing in and out of your snowy Colorado retreat, Sheraton Vacation Club villa resorts are your home away from home, empowering you to reboot, recharge and get the most out of your&nbsp;stay.</p>
                              </div>
                              <div class="brand-link">
                                 <a href="<?=get_site_url()?>/sheraton-vacation-club" class="btn btm-primary">Learn More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 no-padding">
                        <div class="brand westin">
                           <div class="col-md-12">
                              <div class="brand-logo">
                                 <div class="brand-logo-image">
                                    <img src="<?=get_site_url()?>/wp-content/uploads/2017/01/logo-westin-white.png">
                                 </div>
                              </div>
                              <div class="brand-hero">
                                 <img src="<?=get_site_url()?>/wp-content/uploads/2017/01/home-back-westin.jpg">
                              </div>
                              <div class="brand-text">
                                 <h3>A World of Well&nbsp;Being</h3>
                                 <p>Whether exploring the island paradise of Hawai‘i, golfing breathtaking courses in sunny California, or relaxing on sandy Cancún beaches, Westin Vacation Club villa resorts give you a world of experiences designed with your well being in&nbsp;mind.</p>
                              </div>
                              <div class="brand-link">
                                 <a href="<?=get_site_url()?>/westin-vacation-club" class="btn btm-primary">Learn More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-4 no-padding">
                        <div class="brand spg">
                           <div class="col-md-12">
                              <div class="brand-logo">
                                 <div class="brand-logo-image">
                                    <img src="<?=get_site_url()?>/wp-content/uploads/2017/01/logo-spg.png">
                                 </div>
                              </div>
                              <div class="brand-hero">
                                 <img src="<?=get_site_url()?>/wp-content/uploads/2017/01/home-back-spg.png">
                              </div>
                              <div class="brand-text">
                                 <h3>Travel Inside the<br>World of SPG<sup>®</sup></h3>
                                 <p>As the industry's most honored loyalty program with unlimited flexibility and unmatched access, the Starwood Preferred Guest<sup>®</sup> program creates a world of rich rewards and extraordinary experiences. Nearly 100 countries. 1,200 hotels worldwide. 11 distinctive brands. 1&nbsp;SPG.</p>
                              </div>
                              <div class="brand-link">
                                 <a href="<?=get_site_url()?>/spg" class="btn btm-primary">Learn More</a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="container vacation-life text-center">
            <h1>Living Life on Vacation</h1>
            <p>See the world through the eyes of our Owners and Guests. Experience their travel adventures through shared photos, videos and stories in our Gallery. <a href="<?=get_site_url()?>/gallery">Click to View Gallery <i class="fa fa-angle-right"></i></a></p>
         </div>

		<?php echo photo_gallery(8); ?>
		<div class="container homepage-bottom-ads">
            <div class="row">
               <h2 class="col-md-12">Featured Vacation Ideas and Offers</h2>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-4">
                  <div class="widgets-article" style="background-image:url(<?=get_site_url()?>/wp-content/uploads/2017/01/shutterstock_311856734.jpg);background-position:center center;">
                     <div class="content-type-icon">    <i class="fa fa-file-text-o"></i>  </div>
                     <a href="<?=get_site_url()?>/vacation-ideas/mlb-spring-training-getaway">
                        <h3>MLB Spring Training Getaway</h3>
                     </a>
                  </div>
               </div>
               <div class="col-md-4 col-sm-4">
                  <div class="featured-content-ad">	<a title="audience rewards" href="https://www.audiencerewards.com/SPGonBroadway/index.cfm?&amp;utm_source=SVN&amp;utm_medium=email&amp;utm_campaign=SVNbanner" target="_blank"><img class="wp-image-20328 img-responsive" alt="audience rewards" src="<?=get_site_url()?>/wp-content/uploads/2017/01/SPGAudienceAwards-740x416.png"></a></div>
               </div>
               <div class="col-md-4 col-sm-4">
                  <div class="featured-content-ad">	<a title="Request Information" href="<?=get_site_url()?>/vacation-ownership" target="_blank"><img class="wp-image-20328 img-responsive" alt="Request Information" src="<?=get_site_url()?>/wp-content/uploads/2017/01/Transform-740x406.png"></a></div>
               </div>
            </div>
         </div>
<?php get_footer(); ?>
