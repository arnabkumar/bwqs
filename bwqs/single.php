
<?php get_header(); ?>
<div class="container sections_content">
	    <div class="row">
		<div class="primary col-md-8 col-sm-12 col-xs-12">
<?php if(have_posts()) : ?>
	<?php while (have_posts()) : the_post(); ?>
<section class="latest section">
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
                                    <?php the_content(); ?>
                                </div><!--//desc-->         
                                                
                            </div><!--//item-->
                            <hr class="divider">
                       
               
                  
                            
                        </div><!--//content-->  
                    </div><!--//section-inner-->                 
                </section>
		    
				<?php endwhile; ?>

<?php else : ?>
						
					<?php get_template_part('inc/not-found'); ?>
						
					<?php endif; ?>
		   <?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>	
		    
 </div>
		<?php get_sidebar(); ?>
	    </div>
	</div>	

<?php get_footer(); ?>