<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package signcan
 */

 $taxonomy = 'category'; 
 $primary_cat_id=get_post_meta(get_the_id(),'_yoast_wpseo_primary_' . $taxonomy, true);
//  if($primary_cat_id){
// 	$primary_cat = get_term($primary_cat_id, $taxonomy);
//  }
?>


<div class="generalSinglePostStyle singleBox">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header generalHeader centeredText">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			
		<?php endif;
		?>
		
		<div class="archivePostFooter">
			<span class="centerFooter">By</span>
			<span><?php echo get_the_author() ?></span>
			<span class="centerFooter">On</span>
			<span><?php echo get_the_date() ?></span>
		</div>
		

	</header><!-- .entry-header -->


	<?php signcan_post_thumbnail(); ?>

	<span class="archiveCardCategory highRadius generalBoxBorder"><?php //echo $primary_cat->name ?></span>
	
	<div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'signcan' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		// wp_link_pages(
		// 	array(
		// 		'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'signcan' ),
		// 		'after'  => '</div>',
		// 	)
		// );
		?>
	</div><!-- .entry-content -->

	<!-- <footer class="entry-footer">
		<?php //signcan_entry_footer(); ?>
	</footer>.entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>