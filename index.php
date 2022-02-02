<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Aquastore
 */

get_header();
?>
<?php if ( have_rows( 'site_branding' ) ) : ?>
	<div class="site-branding" style="background-image: url('<?php echo $background_image;?>'')">
	<?php while ( have_rows( 'site_branding' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'background_image' ) ) : ?>
			<?php $background_image = the_sub_field( 'background_image' ); ?>
		<?php endif ?>
		<?php if ( have_rows( 'header_contact_bar' ) ) : ?>
			<div class="header-contact-bar">
			<?php while ( have_rows( 'header_contact_bar' ) ) : the_row(); ?>
				<ul>
					<li>
						<?php the_sub_field( 'header_contact_bar_left' ); ?></li>
					<li><?php the_sub_field( 'header_contact_bar_center' ); ?></li>
					<li><?php the_sub_field( 'header_contact_bar_right' ); ?></li>
				</ul>
			<?php endwhile; ?>
		</div>
		<?php endif; ?>
	<?php endwhile; ?>
		</div>
<?php endif; ?>

		
		
		
		<div class="social"></div>
		<div class="header-contact-bar">
		
		</div>
		
	</div><!-- .site-branding -->


	<main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
