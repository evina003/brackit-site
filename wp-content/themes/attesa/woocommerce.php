<?php
/**
 * The template for displaying woocommerce pages.
 *
 * @package Attesa
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<?php woocommerce_content(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php 
get_sidebar();
get_footer();
?>
