
<?php
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <nav class="navCat">
            <ul>

                 <?php
                 global $post, $product;
                 // $allCat = wc_get_product_category_list();
                 // var_dump($allCat);

             // echo wc_get_product_category_list(', ', '<span class="posted_in">' . _n('Category:', 'Categories:', 'woocommerce') . ' ', '</span>');



                  ?>
                  <?php
                  $title        = '';
                  $args = array(
                         'taxonomy'     => 'product_cat',
                         'orderby'      => 'name',
                         'title_li'     => $title,
                  );
                 $all_categories = get_categories( $args );

                 foreach ($all_categories as $cat) {

                    if($cat->category_parent == 0) {
                        $category_id = $cat->term_id;
                        echo '<li><a href="'. get_term_link($cat->slug, 'product_cat') .'">'. $cat->name .'</a></li>';
                    }
                }
                ?>

            </ul>
            <a href="#"> All Categories</a>
        </nav>
        <section class="shopSection">
            <?php
            // woocommerce_content();

            $args = array( 'post_type' => 'product', 'posts_per_page' => 6,);
            $the_query = new WP_Query($args);
            // The Loop
            if ( $the_query->have_posts() ):?>
            <ul class="products">
            <?php
            	while ( $the_query->have_posts() ) :?>
                <?php
            		$the_query->the_post();
                    // var_dump($the_query->the_post())

                    $_product = wc_get_product( $the_query->post->ID );

                    ?>
                    <li class="product">

                        <a class="woocommerce-LoopProduct-link woocommerce-loop-product__link" href="http://wordpress-woocommerce01/index.php/product/<?php echo $the_query->post->post_name?>/">
                            <?php if ($_product->get_sale_price()): ?>
                            <span class="onsale">Sale!</span>
                            <?php echo woocommerce_get_product_thumbnail()?>
                            <?php else : ?>
                            <?php echo woocommerce_get_product_thumbnail()?>

                            <?php endif; ?>
                            <h2><?php echo get_the_title() ?></h2>
                            <span class="price">
                            <?php if ($_product->get_sale_price()): ?>

                                <del>
                                <span class="woocommerce-Price-amount amount"><?php echo $_product->get_regular_price(); ?>
                                    <span class="woocommerce-Price-currencySymbol">€</span>
                                </span>
                            </del>
                            <ins>
                                <span class="woocommerce-Price-amount amount"><?php echo $_product->get_sale_price(); ?>
                                    <span class="woocommerce-Price-currencySymbol">€</span>
                                </span>
                            </ins>
                    <?php else : ?>
                        <span class="woocommerce-Price-amount amount"><?php echo $_product->get_regular_price(); ?>
                            <span class="woocommerce-Price-currencySymbol">€</span>
                        </span>
                    <?php endif; ?>
                </span>

                        </a>
                    </li>
                <?php endwhile ?>
            </ul>
                <?php

            	/* Restore original Post Data */
            	wp_reset_postdata();
            endif;


            ?>

        </section>
    </main><!-- .site-main -->
    </div><!-- .content-area -->

<?php
get_footer();
 ?>
