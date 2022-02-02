<?php if ( have_rows( 'item_container' ) ) : ?>
	<?php while ( have_rows( 'item_container' ) ) : the_row(); ?>
		<h1><?php the_sub_field( 'item_container_title' ); ?></h1>
		<?php $item_container_item = get_sub_field( 'item_container_item' ); ?>
        <ul class="item-container">
		<?php if ( $item_container_item ) : ?>
			<?php $post = $item_container_item; ?>
			<?php setup_postdata( $post ); ?> 
			<li><span><?php the_title();?></span><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $item_container_item_second = get_sub_field( 'item_container_item_second' ); ?>
		<?php if ( $item_container_item_second ) : ?>
			<?php $post = $item_container_item_second; ?>
			<?php setup_postdata( $post ); ?> 
			<li><span><?php the_title();?></span><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $item_container_item_third = get_sub_field( 'item_container_item_third' ); ?>
		<?php if ( $item_container_item_third ) : ?>
			<?php $post = $item_container_item_third; ?>
			<?php setup_postdata( $post ); ?> 
			<li><span><?php the_title();?></span><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $item_container_item_fourth = get_sub_field( 'item_container_item_fourth' ); ?>
		<?php if ( $item_container_item_fourth ) : ?>
			<?php $post = $item_container_item_fourth; ?>
			<?php setup_postdata( $post ); ?> 
			<li><span><?php the_title();?></span><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
        </ul>
	<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'item_container_secondary' ) ) : ?>
	<?php while ( have_rows( 'item_container_secondary' ) ) : the_row(); ?>
		<h1><?php the_sub_field( 'item_container_title' ); ?></h1>
        <ul class="item-container">
		<?php $item_container_item = get_sub_field( 'item_container_item' ); ?>
		<?php if ( $item_container_item ) : ?>
			<?php $post = $item_container_item; ?>
			<?php setup_postdata( $post ); ?> 
			<li><span><?php the_title();?></span><a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail();?></a></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $item_container_item_second = get_sub_field( 'item_container_item_second' ); ?>
		<?php if ( $item_container_item_second ) : ?>
			<?php $post = $item_container_item_second; ?>
			<?php setup_postdata( $post ); ?> 
			<li><span><?php the_title();?></span><a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail();?></a></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $item_container_item_third = get_sub_field( 'item_container_item_third' ); ?>
		<?php if ( $item_container_item_third ) : ?>
			<?php $post = $item_container_item_third; ?>
			<?php setup_postdata( $post ); ?> 
			<li><span><?php the_title();?></span><a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail();?></a></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		<?php $item_container_item_fourth = get_sub_field( 'item_container_item_fourth' ); ?>
		<?php if ( $item_container_item_fourth ) : ?>
			<?php $post = $item_container_item_fourth; ?>
			<?php setup_postdata( $post ); ?> 
			<li><span><?php the_title();?></span><a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail();?></a></li>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
        </ul>
	<?php endwhile; ?>
<?php endif; ?>