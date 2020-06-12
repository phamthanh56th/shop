<?php 
	/*
		Template Name: Home Template
	*/ 
?>
<?php get_header(); ?>
<?php the_post(); ?>
    <!-- Start slider -->
    <section id="aa-slider">
        <div class="aa-slider-area">
            <div id="sequence" class="seq">
                <div class="seq-screen">
                    <ul class="seq-canvas">
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?php echo bloginfo('template_directory');?>/img/slider/1.jpg" alt="Men slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Men Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?php echo bloginfo('template_directory');?>/img/slider/3.jpg" alt="Women Jeans slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Jeans Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?php echo bloginfo('template_directory');?>/img/slider/4.jpg" alt="Shoes slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 75% Off</span>
                                <h2 data-seq>Exclusive Shoes</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                        <!-- single slide item -->
                        <li>
                            <div class="seq-model">
                                <img data-seq src="<?php echo bloginfo('template_directory');?>/img/slider/5.jpg" alt="Male Female slide img" />
                            </div>
                            <div class="seq-title">
                                <span data-seq>Save Up to 50% Off</span>
                                <h2 data-seq>Best Collection</h2>
                                <p data-seq>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus, illum.</p>
                                <a data-seq href="#" class="aa-shop-now-btn aa-secondary-btn">SHOP NOW</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- slider navigation btn -->
                <fieldset class="seq-nav" aria-controls="sequence" aria-label="Slider buttons">
                    <a type="button" class="seq-prev" aria-label="Previous"><span class="fa fa-angle-left"></span></a>
                    <a type="button" class="seq-next" aria-label="Next"><span class="fa fa-angle-right"></span></a>
                </fieldset>
            </div>
        </div>
    </section>
    <!-- / slider -->
    <!-- Start Promo section -->
    <section id="aa-promo">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-promo-area">
                        <div class="row">
                            <!-- promo left -->
                            <div class="col-md-5 no-padding">
                                <div class="aa-promo-left">
                                    <div class="aa-promo-banner">
                                        <img src="<?php echo bloginfo('template_directory');?>/img/promo-banner-1.jpg" alt="img">
                                        <div class="aa-prom-content">
                                            <span>75% Off</span>
                                            <h4><a href="#">For Women</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- promo right -->
                            <div class="col-md-7 no-padding">
                                <div class="aa-promo-right">
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="<?php echo bloginfo('template_directory');?>/img/promo-banner-3.jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>Exclusive Item</span>
                                                <h4><a href="#">For Men</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="<?php echo bloginfo('template_directory');?>/img/promo-banner-2.jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>Sale Off</span>
                                                <h4><a href="#">On Shoes</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="<?php echo bloginfo('template_directory');?>/img/promo-banner-4.jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>New Arrivals</span>
                                                <h4><a href="#">For Kids</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="aa-single-promo-right">
                                        <div class="aa-promo-banner">
                                            <img src="<?php echo bloginfo('template_directory');?>/img/promo-banner-5.jpg" alt="img">
                                            <div class="aa-prom-content">
                                                <span>25% Off</span>
                                                <h4><a href="#">For Bags</a></h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- / Promo section -->
    <!-- Products section -->
    <section id="aa-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="aa-product-area">
                            <div class="aa-product-inner">
                                <!-- start prduct navigation -->
                                <ul class="nav nav-tabs aa-products-tab">
                                <?php
                                    $taxonomy = 'product_cat';
                                    $term_args = array(
                                        'post_type' => "product",
                                        'hide_empty' => true,
                                        'orderby' => 'slug',
                                        'order' => 'ASC',
                                        'taxonomy' => $taxonomy,
                                        'parent' => 0,
                                        // 'child_of' => 68
                                        // 'pad_counts' => true
                                    );
                                    $tax_terms = get_terms($taxonomy, $term_args);
                                    foreach ($tax_terms as $key => $term) { ?>
                                    <li class="<?php if( $key == 0 ) echo 'active'; ?>"><a href="#<?php echo $term->slug; ?>" data-toggle="tab"><?php echo $term->name; ?></a></li>
                                <?php } ?>
                                </ul>
                                <!-- Tab panes -->
                                <div class="tab-content">
                                    <?php
                                    $taxonomy = 'product_cat';
                                    $term_args = array(
                                        'post_type' => "product",
                                        'hide_empty' => true,
                                        'orderby' => 'slug',
                                        'order' => 'ASC',
                                        'taxonomy' => $taxonomy,
                                        'parent' => 0,
                                        // 'child_of' => 68
                                        // 'pad_counts' => true
                                    );
                                    $tax_terms = get_terms($taxonomy, $term_args);
                                    foreach ($tax_terms as $key => $term) { ?>
                                    <div class="tab-pane fade <?php  if($key == 0) echo 'in active'; ?>" id="<?php echo $term->slug; ?>">
                                        <ul class="aa-product-catg">
                                            <?php
                                                $args_post = array(
                                                'post_type' => 'product',
                                                'posts_per_page' => -1,
                                                'orderby'=> 'date',
                                                'order' => 'ASC',
                                                'child_of'     => 0,
                                                'parent'       => 0,
                                                'tax_query' => array(
                                                    array(
                                                        'taxonomy' => $taxonomy,
                                                        'field' => 'id',
                                                        'terms' => $term->term_id,
                                                        'include_children' => false
                                                     )
                                                  )
                                                );
                                                $query = new WP_Query( $args_post );
                                                if ( $query->have_posts() ):
                                                while ( $query->have_posts() ) : $query->the_post();
                                                    $price = get_post_meta( get_the_ID(), '_regular_price', true);
                                            ?>
                                            <li>
                                                <figure>
                                                    <a class="aa-product-img" href="<?php echo get_the_permalink(); ?>"><img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>"></a>
                                                    <a  class="aa-add-card-btn single_add_to_cart_button button product_type_simple add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo esc_attr( $product->get_id() ); ?>" data-product_sku=""  aria-label="Add “Product 1” to your cart" href="?add-to-cart=<?php echo esc_attr( $product->get_id() )?>"><span class="fa fa-shopping-cart"></span>Add To Cart</a>
                                                    <figcaption>
                                                        <h4 class="aa-product-title"><a href="<?php echo get_the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                        <span class="aa-product-price"><?php echo  $price; ?></span>
                                                    </figcaption>
                                                </figure>
                                              <!--   <div class="aa-product-hvr-content">
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Add to Wishlist"><span class="fa fa-heart-o"></span></a>
                                                    <a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><span class="fa fa-exchange"></span></a>
                                                    <a href="#" data-toggle2="tooltip" data-placement="top" title="Quick View" data-toggle="modal" data-target="#quick-view-modal"><span class="fa fa-search"></span></a>
                                                </div> -->
                                                <!-- product badge -->
                                                <!-- <span class="aa-badge aa-sale" href="#">SALE!</span> -->
                                            </li>
                                            <?php endwhile; wp_reset_postdata(); endif; ?>
                                        </ul>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>