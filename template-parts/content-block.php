<?php if ( have_rows( 'content_block' ) ) : ?>
    <div class="content-block">
	<?php while ( have_rows( 'content_block' ) ) : the_row(); ?>
		<?php the_sub_field( 'content_block_content_container' ); ?>
	<?php endwhile; ?>
</div>
<?php endif; ?>