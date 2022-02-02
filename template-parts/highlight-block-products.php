<?php if ( have_rows( 'highlight_block_products' ) ) : ?>
	<?php while ( have_rows( 'highlight_block_products' ) ) : the_row(); ?>
		<ul class="highlight-column">
			<?php if ( have_rows( 'highlight_block_item' ) ) : ?>
				<?php while ( have_rows( 'highlight_block_item' ) ) : the_row(); ?>
					<li><img src="<?php the_sub_field( 'highlight_block_item_image' ); ?>" />
				
					<div><h2><?php the_sub_field( 'highlight_block_item_title' ); ?></h2>
					<p><?php the_sub_field( 'highlight_block_item_description' ); ?></p>
                <a href="<?php the_sub_field( 'highlight_block_item_url' ); ?>">verkkokauppaan</a></div></li>
				<?php endwhile; ?>
			<?php endif; ?>
			<?php if ( have_rows( 'highlight_block_item_center' ) ) : ?>
				<?php while ( have_rows( 'highlight_block_item_center' ) ) : the_row(); ?>
				
					<li><img src="<?php the_sub_field( 'highlight_block_item_image' ); ?>" />
                    <div><h2><?php the_sub_field( 'highlight_block_item_title' ); ?></h2>
				<p><?php the_sub_field( 'highlight_block_item_description' ); ?></p>
                <a href="<?php the_sub_field( 'highlight_block_item_url' ); ?>">verkkokauppaan</a></div></li>
			<?php endwhile; ?>
		<?php endif; ?>
		<?php if ( have_rows( 'highlight_block_item_right' ) ) : ?>
			<?php while ( have_rows( 'highlight_block_item_right' ) ) : the_row(); ?>
			
				<li><img src="<?php the_sub_field( 'highlight_block_item_image' ); ?>" />
				<div><h2><?php the_sub_field( 'highlight_block_item_title' ); ?></h2>
				<p><?php the_sub_field( 'highlight_block_item_description' ); ?></p>
                <a href="<?php the_sub_field( 'highlight_block_item_url' ); ?>">verkkokauppaan</a></div></li>
			<?php endwhile; ?>
		<?php endif; ?></ul>
	<?php endwhile; ?>
<?php endif; ?>