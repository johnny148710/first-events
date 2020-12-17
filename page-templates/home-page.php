<?php
/**
 * Template Name: Home page
 *
 * This template can be used to override the default template and sidebar setup
 *
 * @package UnderStrap
 */


// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="home-wrapper">
<?php get_template_part('partials/_home-hero'); ?>

	<div class="container" id="content" tabindex="-1">
        <main class="site-main" id="main">
            <?php
                while ( have_posts() ) {
                    the_post();
                    // the_title();
                    //get_template_part( 'loop-templates/content', 'page' );
                }
            ?>

        </main>
	</div><!-- #content -->
</div><!-- #page-wrapper -->
<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register for a seat</h5>
        <a href="#" type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[user_registration_form id="5"]'); ?>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
