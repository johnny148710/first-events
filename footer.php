<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<!-- <div class="wrapper" id="wrapper-footer">
	<footer class="site-footer" id="colophon">
		<div class="site-info">
			<?php // understrap_site_info(); ?>
		</div><!-- .site-info
	</footer><!-- #colophon
</div>wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

