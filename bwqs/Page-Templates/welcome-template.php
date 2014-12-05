<?Php /* Template Name: welcome-template.php */ ?>

<?php get_header(); ?>
<div class="container sections_content">
    <div class="row">
	<div class="col-sm-12">
	    <div class="slider">
		<img class="img-responsive"src="<?php echo get_template_directory_uri(); ?>/images/slider.jpg" alt="" />
	    </div>
	</div>
    </div>
    <div class="header">
	    <h2>Features One Categories</h2>
	</div>
    
    	

    <ul class="products row">
            <?php
                global $post;
                // Setup your custom query
                 $args = array('posts_per_page' => 3,'post_type' => 'product',
                //add category
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => 'Clothing' //example : ‘term’ => ‘red-shoes’, ‘books’, ‘fiction-books’.
                    )
                 ),
                 'orderby' => 'title',
                 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
               
               
                 <li class="col-sm-4">
                    <div class="shop_product_inner">  <!-- shop_single here woocommerce img id you can ise usr won crop id  -->
                    <a href="<?php the_permalink() ?>">
                        <?php if ( has_post_thumbnail( get_the_ID() ) ) {
                             the_post_thumbnail('shop_single', array('class' => 'img-responsive project-image')); 
                        } else {
                  echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />';
                        } ?>
                        <div class="shop_product_inner_caption">
                            <h2><?php the_title(); ?></h2>
     
                            <p><?php echo $product->get_price_html(); ?></p>
                            <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
                        </div>
                    </a>
                </div>
     
                </li>
               
                <?php endforeach; ?>
            </ul>


	
    <div class="header">
	    <h2>Features Two Categories</h2>
	</div>
    <div class="row features">
	
	<ul class="products row">
            <?php
                global $post;
                // Setup your custom query
                 $args = array('posts_per_page' => 3,'post_type' => 'product',
                //add category
                'tax_query' => array(
                'relation' => 'AND',
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => 'Hoodies' //example : ‘term’ => ‘red-shoes’, ‘books’, ‘fiction-books’.
                    )
                 ),
                 'orderby' => 'title',
                 );
                $myposts = get_posts( $args );
                foreach( $myposts as $post ) : setup_postdata($post); ?>
               
               
                 <li class="col-sm-4">
                    <div class="shop_product_inner">  <!-- shop_single here woocommerce img id you can ise usr won crop id  -->
                    <a href="<?php the_permalink() ?>">
                        <?php if ( has_post_thumbnail( get_the_ID() ) ) {
                             the_post_thumbnail('shop_single', array('class' => 'img-responsive project-image')); 
                        } else {
                  echo '<img src="' . woocommerce_placeholder_img_src() . '" alt="Placeholder" />';
                        } ?>
                        <div class="shop_product_inner_caption">
                            <h2><?php the_title(); ?></h2>
     
                            <p><?php echo $product->get_price_html(); ?></p>
                            <?php woocommerce_template_loop_add_to_cart(); //ouptput the woocommerce loop add to cart button ?>
                        </div>
                    </a>
                </div>
     
                </li>
               
                <?php endforeach; ?>
            </ul>
    </div>
    
</div>
		
<?php get_footer(); ?>