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
 * @package signcan
 */

get_header();
?>

	<main id="primary" class="site-main mainView">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<div class="generalHeader bottomBorderDark centeredText">
        			<h2>Blog</h2>
    			</div>
				<div class="loopAllCategory">
				<?php
				$categories = get_terms( array(
					'taxonomy' => 'category',
					'hide_empty' => true,
					'exclude'=>array('1')
				) );
				foreach($categories as $category) {
				echo '<a class="generalButton" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
				}
				?>
				</div>

				<?php
			endif;
			echo '<div class="archiveParent">';
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'archive' );

			endwhile;

			// the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
// get_sidebar();
get_footer();
