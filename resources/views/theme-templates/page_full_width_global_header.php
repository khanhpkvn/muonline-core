<?php
/**
 * Template Name: Custom theme template: page_full_width_global_header
 *
 * @see https://developer.wordpress.org/themes/classic-themes/templates/page-template-files/
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

get_header('header');
?>
<div class="content-area">
	<main class="site-main">
        <?php
        echo do_shortcode('[block id="pages-global-header"]');
        ?>

		<?php
		while (have_posts()) : the_post();
			the_content();
		endwhile;
		?>
	</main>
</div>

<?php
get_footer();
?>