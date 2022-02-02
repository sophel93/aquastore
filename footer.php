<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Aquastore
 */

?>

	<footer id="colophon" class="site-footer">
	<?php if ( have_rows( 'logo_container' ) ) : ?>
		<div class="logo-container">
	<?php while ( have_rows( 'logo_container' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'logo_container_item_left' ) ) : ?>
			<img src="<?php the_sub_field( 'logo_container_item_left' ); ?>" />
		<?php endif ?>
		<?php if ( get_sub_field( 'logo_container_item_right' ) ) : ?>
			<img src="<?php the_sub_field( 'logo_container_item_right' ); ?>" />
		<?php endif ?>
	<?php endwhile; ?>
	</div>
<?php endif; ?>
		
<?php if ( have_rows( 'site_info_block' ) ) : ?>
	<div class="site-info">
	<?php while ( have_rows( 'site_info_block' ) ) : the_row(); ?>
		<?php if ( get_sub_field( 'site_info_logo_container' ) ) : ?>
			<img src="<?php the_sub_field( 'site_info_logo_container' ); ?>" />
		<?php endif ?>
		<div class="content-container"><?php the_sub_field( 'site_info_content_container' ); ?></div>
		<?php if ( have_rows( 'site_info_social_container' ) ) : ?>
			<ul class="site-info-social-row">
			<?php while ( have_rows( 'site_info_social_container' ) ) : the_row(); ?>
				<?php if ( have_rows( 'site_info_social_item' ) ) : ?>
					<li>
					<?php while ( have_rows( 'site_info_social_item' ) ) : the_row(); ?>
						<a href="<?php the_sub_field( 'site_info_social_item_url' ); ?>">
						<?php the_sub_field('site_info_social_item_icon');?></a>
						
					<?php endwhile; ?>
					</li>
				<?php endif; ?>
				<?php if ( have_rows( 'site_info_social_item_second' ) ) : ?>
					<li>
					<?php while ( have_rows( 'site_info_social_item_second' ) ) : the_row(); ?>
						<a href="<?php the_sub_field( 'site_info_social_item_url' ); ?>">
						<?php the_sub_field('site_info_social_item_icon');?>
				</a>
					<?php endwhile; ?>
				</li>
				<?php endif; ?>
				<?php if ( have_rows( 'site_info_social_item_third' ) ) : ?>
					<li>
					<?php while ( have_rows( 'site_info_social_item_third' ) ) : the_row(); ?>
						
						<a href="<?php the_sub_field( 'site_info_social_item_url' ); ?>">
						<?php the_sub_field('site_info_social_item_icon');?></a>
					<?php endwhile; ?>
				</li>
				<?php endif; ?>
				<?php if ( have_rows( 'site_info_social_item_fourth' ) ) : ?>
					<li>
					<?php while ( have_rows( 'site_info_social_item_fourth' ) ) : the_row(); ?>
					<a href="<?php the_sub_field( 'site_info_social_item_url' ); ?>">
					<?php the_sub_field('site_info_social_item_icon');?></a>
						
						
					<?php endwhile; ?>
					<li>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>
	</div><!-- .site-info -->
<?php endif; ?>
		
			
		
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
