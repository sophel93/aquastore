<?php if ( have_rows( 'hero_block' ) ) : ?>
    
	<?php while ( have_rows( 'hero_block' ) ) : the_row(); ?>
		
		<?php if ( get_sub_field( 'hero_block_background_image' ) ) : ?>
        <div class="site-branding" style="background-image: url('<?php the_sub_field('hero_block_background_image');?>')">
		    <div><h1><?php the_sub_field( 'hero_block_title' ); ?></h1>
			<?php if (get_sub_field('hero_block_cta')) : ?>
				<a href="<?php the_sub_field( 'hero_block_cta' ); ?>">Siirry verkkokauppaan</a>
			<?php endif;?></div>
        </div>
		<?php endif ?>
	<?php endwhile; ?>
<?php endif; ?>