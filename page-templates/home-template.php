<?php

/*

Template Name: Home Template

*/

get_header();

?>


<div class="homeMainParent">
    <div class="homeMain mainView">
        <div class="generalHeader bottomBorderDark centeredText">
            <h2>PRODUCT CATEGORIES</h2>
        </div>
        <div class="homeProductCatParent flexBoxParent">
            <a href="#"><img src="<?php echo get_template_directory_uri() ?>/img/test.jpg" alt=""></a>
            <?php
                $categories = get_terms( array(
                    'taxonomy' => 'product_cat',
                    'hide_empty' => true,
                    'exclude'=>array('15')
                ) );
                foreach($categories as $category) {
                echo '<a class="categoriesCard highRadius" href="' . get_category_link($category->term_id) . '">';
                echo '<img src="'.get_field('home_cat_mb_image','product_cat_'.$category->term_id)['url'].'">';
                echo '<h3>' . $category->name . '</h3>';
                echo '<div style="background-color: ' .get_field('home_cat_mb_color','product_cat_'.$category->term_id). ';" ></div>';
                echo '</a>';
                }
            ?>
        </div>
    </div>
</div>

<?php get_footer();