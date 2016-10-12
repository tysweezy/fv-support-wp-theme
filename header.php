<?php
/**
 * The template for displaying the header
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">

		<header id="masthead" class="main-header" role="banner">
				<?php

					if ( is_front_page() && is_home() ) : ?>
						<div class="brand"><a href="/"><img src="http://support.dev/wp-content/uploads/2016/10/focusvision.png" alt="FocusVision"></a></div>
					<?php else : ?>
						<div class="brand"><a href="/"><img src="http://support.dev/wp-content/uploads/2016/10/focusvision.png" alt="FocusVision"></a></div>
					<?php endif;

			
				?>

		</header><!-- .site-header -->



	<div class="content">
