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

		</div>
		<img src="<?php bloginfo('template_url') ?>/images/hero-banner.png" alt="hero-banner" >
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



<?php wp_footer(); ?>
</body>
</html>