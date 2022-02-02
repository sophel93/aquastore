<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquastore
 */

get_header();
?>


<?php get_template_part("template-parts/hero-block")?>

	<main id="primary" class="site-main">

		<?php get_template_part('template-parts/content-block')?>

		<?php if (is_page(14)) :
			get_template_part('template-parts/item-container-block');
		endif;?>

		<?php if (is_page() && $post -> post_parent):
			get_template_part('template-parts/additional-content-block');
		endif;?>

		<?php if (is_page(10)) :
			get_template_part('template-parts/highlight-block-products');
		endif;?>

	</main><!-- #main -->

<?php
get_footer();
