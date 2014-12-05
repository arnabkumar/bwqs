<?php get_header(); ?>
		   
	<div class="container sections_content">
	    <div class="row">
		<div class="primary col-md-8 col-sm-12 col-xs-12">
              <?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>	
	  <section class="latest section">
                    <div class="section-inner">
              <a href="<?php the_permalink(); ?>"><h2 class="heading"><?php the_title(); ?></h2></a>
                      <div class="content">    
                                               
                            <div class="item featured text-center">
                               
                                <div class="featured-image">  
				    <a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('blog_postp_p_f_image', array('class' => 'img-responsive project-image')); ?>
                </a>                                   
                                    <div class="ribbon">
                                        <div class="text">App</div>
                                        </div>
                                    </div>
                                    
                                <div class="desc text-left">                                    
                                    <?php the_content(); ?>
                                </div><!--//desc-->         
                                                 
                            </div><!--//item-->
                            <hr class="divider">
                       
                            
                         
                            
                        
                            
                        </div><!--//content--> 
                    </div><!--//section-inner-->                 
                </section><!--//section-->
						
					</div><!--features_items-->
					<?php endwhile; ?>	

<?php else : ?>
						
					<?php get_template_part('inc/not-found'); ?>
						
					<?php endif; ?>	
                
                
                   <?php get_sidebar(); ?>         
            </div>
		
	    </div>
	

   <?php get_footer(); ?>