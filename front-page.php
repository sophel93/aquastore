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
	
	<?php while ( have_rows( 'site_branding' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'background_image' ) ) : ?>
			<div class="site-branding" style="background-image: url(<?php the_sub_field( 'background_image' ); ?>);">
		<?php endif ?>
		<?php if ( have_rows( 'header_contact_bar' ) ) : ?>
			<ul class="header-contact-bar">
			<?php while ( have_rows( 'header_contact_bar' ) ) : the_row(); ?>
				
					<li>
						<?php the_sub_field( 'header_contact_bar_left' ); ?></li>
					<li><?php the_sub_field( 'header_contact_bar_center' ); ?></li>
					<li><?php the_sub_field( 'header_contact_bar_right' ); ?></li>
				
			<?php endwhile; ?>
        </ul>
		<?php endif; ?>

<?php if ( have_rows( 'social_container' ) ) : ?>
    <ul class="social">
			<?php while ( have_rows( 'social_container' ) ) : the_row(); ?>
				<?php if ( have_rows( 'social_container_item_instagram' ) ) : ?>
					<?php while ( have_rows( 'social_container_item_instagram' ) ) : the_row(); ?>
						<li>
                            <a href="<?php the_sub_field( 'social_container_item_url' ); ?>">
                            <?php the_sub_field('social_container_item_icon');?>
                            </a>
                        </li>
						
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'social_container_item_facebook' ) ) : ?>
					<?php while ( have_rows( 'social_container_item_facebook' ) ) : the_row(); ?>
                    <li>
                            <a href="<?php the_sub_field( 'social_container_item_url' ); ?>">
                            <?php the_sub_field('social_container_item_icon');?>
                            </a>
                        </li>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'social_container_item_twitter' ) ) : ?>
					<?php while ( have_rows( 'social_container_item_twitter' ) ) : the_row(); ?>
                    <li>
                            <a href="<?php the_sub_field( 'social_container_item_url' ); ?>">
                            <?php the_sub_field('social_container_item_icon');?>
                            </a>
                        </li>
					<?php endwhile; ?>
				<?php endif; ?>
				<?php if ( have_rows( 'social_container_item_instagram_linkedin' ) ) : ?>
					<?php while ( have_rows( 'social_container_item_instagram_linkedin' ) ) : the_row(); ?>
                    <li>
                            <a href="<?php the_sub_field( 'social_container_item_url' ); ?>">
                            <?php the_sub_field('social_container_item_icon');?>
                            </a>
                        </li>
					<?php endwhile; ?>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>
                </div>
<?php endif; ?>
		
		
	</div><!-- .site-branding -->


	<main id="primary" class="site-main">

		<?php get_template_part('template-parts/featured-posts'); ?>
        <?php get_template_part('template-parts/content-block');?>
        <?php get_template_part('template-parts/highlight-block');?>


	</main><!-- #main -->

<?php
get_footer();
