<?php if ( have_rows( 'highlight_block' ) ) : ?>
	<?php while ( have_rows( 'highlight_block' ) ) : the_row(); ?>
	<h1 style="text-align: center;"><?php the_sub_field( 'highlight_block_title' ); ?></h1>
	
		<ul class="highlight-row">
			<?php if ( have_rows( 'highlight_block_item' ) ) : ?>
				<?php while ( have_rows( 'highlight_block_item' ) ) : the_row(); ?>
					<li><img src="<?php the_sub_field( 'highlight_block_item_image' ); ?>" />
				
					<h2><?php the_sub_field( 'highlight_block_item_title' ); ?></h2>
					<p><?php the_sub_field( 'highlight_block_item_description' ); ?></p></li>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'highlight_block_item_center' ) ) : ?>
				<?php while ( have_rows( 'highlight_block_item_center' ) ) : the_row(); ?>
				
					<li><img src="<?php the_sub_field( 'highlight_block_item_image' ); ?>" />
				<h2><?php the_sub_field( 'highlight_block_item_title' ); ?></h2>
				<p><?php the_sub_field( 'highlight_block_item_description' ); ?></p></li>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if ( have_rows( 'highlight_block_item_right' ) ) : ?>
			<?php while ( have_rows( 'highlight_block_item_right' ) ) : the_row(); ?>
			
				<li><img src="<?php the_sub_field( 'highlight_block_item_image' ); ?>" />
				<h2><?php the_sub_field( 'highlight_block_item_title' ); ?></h2>
				<p><?php the_sub_field( 'highlight_block_item_description' ); ?></p></li>
			<?php endwhile; ?>
		<?php endif; ?></ul>
	<?php endwhile; ?>
<?php endif; ?>