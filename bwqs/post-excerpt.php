<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<section id="post-<?php the_ID(); ?>" <?php post_class('latest section'); ?>>

                    <div class="section-inner">
                       
                        <div class="content">    
                                               
                            <div class="item featured text-center">
                                <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p class="summary">by <a href="<?php the_permalink(); ?>"><?php the_author_posts_link(); ?></a>&nbsp;in&nbsp;<a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></p>
                                <div class="featured-image">   
<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail('blog_postp_p_f_image', array('class' => 'img-responsive project-image')); ?>
                </a>  			                                    
                                    <div class="ribbon">
                                        <div class="text">App</div>
                                        </div>
                                    </div>
                                    
                                <div class="desc text-left">                                    
                                    <p><?php the_excerpt(); ?></p>
                                </div><!--//desc-->         
                                <a href="<?php the_permalink(); ?>"class="btn btn-cta-secondary"><i class="fa fa-thumbs-o-up"></i> Read More</a>                 
                            </div><!--//item-->
                            <hr class="divider">
                       
               
                  
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section>
				<?php endwhile; ?>

<?php else : ?>
						
					<?php get_template_part('inc/not-found'); ?>
						
					<?php endif; ?>	