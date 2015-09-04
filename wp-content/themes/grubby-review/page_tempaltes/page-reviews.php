<?php
/*
	Template Name: Review App
*/


?> 
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<meta property="fb:app_id" content="<?php $appid = get_post_meta($post->ID, 'appid', TRUE); ?><?php if($appid) { ?><?php echo $appid; ?><?php } ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php wp_title(''); ?></title>

<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	
	<div class="header-wrap">
		<div class="inner-wrap clearfix">
			<div class="logo">
				<img src="<?php bloginfo('template_url') ?>/images/logo.png" alt="logo">
			</div><!-- .logo -->
			<div class="back-link">
				<a href="http://eatgrubbys.com/"><img src="<?php bloginfo('template_url') ?>/images/back-to-site.png" alt="back-to-site" width="236" height="26"></a>
			</div><!-- .back-link -->
		</div><!-- .inner-wrap -->
	</div><!-- .header-wrap -->
	
	<div class="hero-banner">
		<div class="cta vertically-align">
			<h1>How are we doing?<br> Your feedback is important to us!</h1>
					<div class="review-module">
								
			<div class="stars_wrap">

				<div class="stars">
					<input type="radio"  id="choice_1star" value="1star" class="star-1 star">
					<label id="label_1star" class="star-1"></label>
					
					<input type="radio"  id="choice_2star" value="2star" class="star-2 star">
					<label id="label_2star" class="star-2"></label>
					
					<input type="radio"  id="choice_3star" value="3star" class="star-3 star">
					<label id="label_3star" class="star-3"></label>
					
					<input type="radio"  id="choice_4star" value="4star" class="star-4 star">
					<label id="label_4star" class="star-4"></label>
					
					<input type="radio"  id="choice_5star" value="5star" class="star-5 star">
					<label id="label_5star" class="star-5"></label>
					<span></span>
				</div> <!-- .stars -->
			</div><!-- .stars_wrap -->
			
			<div class="review-form" style="display: none">
				<p>I'm sorry to hear that you did not have a pleasant dining experience at Rubicon Deli. Our goal is to provide you with the finest customer service and leave you with a memorable experience. We would love to hear your feedback, and we will do everything that we can to resolve any issues. We value your comments and feedback.<br>
			- Management </p>
				<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); //review contact form ?>
			</div>
								
			<div class="review-sites" style="display: none">
				<div class="cta">Please pick your review site of choice and take a quick moment to write us a review. Tell us about your experience or about your favorite roll, drink, or waiter/waitress! We appreciate and value your feedback.</div>
				<?php
					if ( get_field('location_facebook_link')){
						 	echo ('<a href="'.get_field('location_facebook_link').'" class="social-icon facebook"></a>'); 
					} else {
							echo('<a href="https://www.facebook.com/RubiconDeli" class="social-icon facebook"></a>');
					}
					?>
					
				<?php
					if ( get_field('location_google_plus_link')){
						 	echo ('<a href="'.get_field('location_google_plus_link').'" class="social-icon google"></a>'); 
					} else {
							echo('<a href="https://plus.google.com/117426444200055406259/about" class="social-icon google"></a>');
					}
					?>
					
				<?php
					if ( get_field('location_yelp_link')){
						 	echo ('<a href="'.get_field('location_yelp_link').'" class="social-icon yelp"></a>'); 
					} else {
							echo('<a href="http://www.yelp.com/biz/rubicon-deli-san-diego" class="social-icon yelp"></a>');
					}
					?>
			</div><!-- .review-sites -->
								
		</div><!-- .review-module -->

		</div>
		
	</div>

<div class="content-wrap">
	
	<div class="inner-wrap">
		
		<div class="content-title">
			<span>HEAR WHAT OTHERS HAVE TO SAY</span>
		</div>
		
		<div class="review-wrap clearfix">
			<div class="left">
				<div style="display: table-row">
					<div class="review-image">
						<img src="<?php bloginfo('template_url') ?>/images/review-image1.png" alt="review-image1" width="111" height="111">
					</div><!-- .review-image -->
					<div class="review-name-wrap">
						<div>
							<span>DUSTIN ERIMITA</span><br>
							<img src="<?php bloginfo('template_url') ?>/images/5star-review.png" alt="5star-review" width="181" height="37"><img src="<?php bloginfo('template_url') ?>/images/social-icon-facebook.png" alt="social-icon-facebook" width="88" height="28">
						</div>
					</div><!-- r.eview-name-wrap -->
				</div>
				<div class="review-content">
					<p>
						“ Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ”
					</p>
				</div><!-- .review-content -->
			</div><!-- .left -->
			
			<div class="right">
				<div style="display: table-row">
					<div class="review-image">
						<img src="<?php bloginfo('template_url') ?>/images/review-image2.png" alt="review-image1" width="111" height="111">
					</div><!-- .review-image -->
				<div class="review-name-wrap">
					<div>
						<span>DUSTIN ERIMITA</span><br>
						<img src="<?php bloginfo('template_url') ?>/images/5star-review.png" alt="5star-review" width="181" height="37"><img src="<?php bloginfo('template_url') ?>/images/social-icon-yelp.png" alt="social-icon-facebook" width="88" height="28">
					</div>
				</div><!-- r.eview-name-wrap -->
			</div>
			<div class="review-content">
				<p>
					“ Lorem ipsum dolor sit amet, cons ectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ” 
				</p>
			</div><!-- .review-content -->
		</div><!-- .review-wrap -->
		
	</div><!-- .inner-wrap -->

</div><!-- .content-wrap -->

<div class="featured-wrap">
	<div class="inner-wrap">
		<div class="featured-title">
			<img src="<?php bloginfo('template_url') ?>/images/featured-title.png" alt="featured-title" width="292" height="28">
		</div><!-- .featured-title -->
		<div class="featured-image-wrap clearfix">
			<div class="featured-box">
				<img src="<?php bloginfo('template_url') ?>/images/featured-item-1.png"  width="198" height="201">
				<span>LOREM IPSUM</span>
			</div><!-- .featured-box -->
			<div class="featured-box">
				<img src="<?php bloginfo('template_url') ?>/images/featured-item-2.png"  width="198" height="201">
				<span>LOREM IPSUM</span>
			</div><!-- .featured-box -->
			<div class="featured-box">
				<img src="<?php bloginfo('template_url') ?>/images/featured-item-3.png"  width="198" height="201">
				<span>LOREM IPSUM</span>
			</div><!-- .featured-box -->
			<div class="featured-box">
				<img src="<?php bloginfo('template_url') ?>/images/featured-item-4.png"  width="198" height="201">
				<span>LOREM IPSUM</span>
			</div><!-- .featured-box -->
			
		</div><!-- .featured-image-wrap -->
		<div class="footer">
			377 CARLSBAD Village dr. Carlsbad, CA  760.729.6040  HOURS????
		</div>
	</div><!-- .inner-wrap -->
</div><!-- .featured-wrap -->

<script>
				//review star logic
			jQuery("label.star-1").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery(".review-form").fadeIn();
				});
  		});			
	  	jQuery("label.star-2").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery(".review-form").fadeIn();
				});
 			});			
	  	jQuery("label.star-3").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery(".review-form").fadeIn();
				});
  		}); 		
	  	jQuery("label.star-4").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery('.review-sites').fadeIn();
				});
  		});			
	  	jQuery("label.star-5").click(function() {
  		  jQuery(".stars_wrap").fadeOut(function() {
					jQuery('.review-sites').fadeIn();
				});
  		});
  		jQuery(".stars label").click(function() {
	  	 	jQuery(".cta h1").fadeOut();	
	  	})
  		
</script>

<?php wp_footer(); ?>
</body>
</html>