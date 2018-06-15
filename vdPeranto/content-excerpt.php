<?php
/**
 * @package vdPeranto
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<!-- Remove link on static frontpage -->
		<?php
			if ( is_front_page() && is_home() ) {
						the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); 	
			}  
			elseif ( is_front_page() ){
	
				the_title( '<h4 class="entry-title">', '</h4>' );
			}
		?>
		
	</header><!-- .entry-header -->
	<!-- Show full content on static frontpage -->
	

	<?php
			if ( is_front_page() && is_home() ) { ?>
						<div class="entry-content">
							<?php the_excerpt(); ?>
								<?php
									wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'vdperanto' ),
									'after'  => '</div>',
									) );
								?>
						</div><!-- .entry-content -->
			<?php }  
			elseif ( is_front_page() ){ ?>
						<div class="entry-content">
							<?php the_content(); ?>
								<?php
									wp_link_pages( array(
									'before' => '<div class="page-links">' . __( 'Pages:', 'vdperanto' ),
									'after'  => '</div>',
									) );
								?>
						</div><!-- .entry-content -->
			<?php }
	?>
	
	

	<footer class="entry-footer">
		<?php vdperanto_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
