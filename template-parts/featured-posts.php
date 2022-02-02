<?php if ( have_rows( 'featured_posts_block' ) ) : ?>
	
	<?php while ( have_rows( 'featured_posts_block' ) ) : the_row(); ?>
		<h1 style="text-align: center;"><?php the_sub_field( 'featured_posts_block_title' ); ?></h1>
		
		<ul class="featured-posts-row">
		<?php $featured_posts_block_item = get_sub_field( 'featured_posts_block_item' ); ?>
		<?php if ( $featured_posts_block_item ) : ?>
			<?php $post = $featured_posts_block_item; ?>
			<?php setup_postdata( $post ); ?> 
			<li><?php the_post_thumbnail();?><p><?php the_date();?></p> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php the_excerpt();?></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $featured_posts_block_item_center = get_sub_field( 'featured_posts_block_item_center' ); ?>
		<?php if ( $featured_posts_block_item_center ) : ?>
			<?php $post = $featured_posts_block_item_center; ?>
			<?php setup_postdata( $post ); ?> 
			<li><?php the_post_thumbnail();?><p><?php the_date();?></p> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php the_excerpt();?></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $featured_posts_block_item_right = get_sub_field( 'featured_posts_block_item_right' ); ?>
		<?php if ( $featured_posts_block_item_right ) : ?>
			<?php $post = $featured_posts_block_item_right; ?>
			<?php setup_postdata( $post ); ?> 
			<li><?php the_post_thumbnail();?><p><?php the_date();?></p> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> <?php the_excerpt();?></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
        </ul>
	<?php endwhile; ?>
<?php endif; ?>