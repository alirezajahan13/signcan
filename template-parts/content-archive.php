<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package signcan
 */

$taxonomy = 'category'; 
$primary_cat_id=get_post_meta(get_the_id(),'_yoast_wpseo_primary_' . $taxonomy, true);
if($primary_cat_id){
    $primary_cat = get_term($primary_cat_id, $taxonomy);
}
else{
	$primary_cat = get_term(wp_get_post_categories( get_the_id())[0], $taxonomy);
}
get_header();
?>


<a href="<?php echo esc_url(get_permalink()) ?>" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000" data-aos-once="true" id="post-<?php the_ID(); ?>" <?php post_class('generalBoxBorder lowRadius mediumMargined'); ?>>
 	
	<div class="archiveCardImg"><?php the_post_thumbnail() ?></div>
	<div class="archiveCardPadding mediumPadding">
    <span class="archiveCardCategory highRadius generalBoxBorder"><?php echo $primary_cat->name ?></span>
	<header class="entry-header">

		<?php if ( is_home() && ! is_front_page() ){ ?>

			<h2 class="entry-title"><?php echo get_the_title() ?></h2>

		<?php } else{ ?>

			<h3 class="entry-title"><?php echo get_the_title() ?></h3>

		<?php } ?>

	</header><!-- .entry-header -->

	<?php the_excerpt(); ?>

	<div class="archivePostFooter">
		<span class="centerFooter">By</span>
		<span><?php echo get_the_author() ?></span>
		<span class="centerFooter">On</span>
		<span><?php echo get_the_date() ?></span>
	</div>
	</div>
</a><!-- #post-<?php the_ID(); ?> -->