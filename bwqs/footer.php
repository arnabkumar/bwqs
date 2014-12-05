 <footer class="footer_area">
		  <div class="footer container">
		  
		  <div class="row">
			   <?php if ( ! dynamic_sidebar('footer_widgets_left') ) : ?>
		      <div class="col-sm-4">
			
			  <div class="well well-lg">
                    <h2>Blog Categories</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
		      </div>
		      <?php endif; ?>
		      <?php if ( ! dynamic_sidebar('footer_widgets_middle') ) : ?>
		      <div class="col-sm-4">
			  <div class="well well-lg">
                    <h2>Blog Categories</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
		      </div>
		      <?php endif; ?>
		      <?php if ( ! dynamic_sidebar('footer_widgets_right') ) : ?>
		      <div class="col-sm-4">
			  <div class="well well-lg">
                    <h2>Blog Categories</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, perspiciatis adipisci accusamus laudantium odit aliquam repellat tempore quos aspernatur vero.</p>
                </div>
		      </div>
		       <?php endif; ?>
			</div>
		     
		     <div class="row">
			 <div class="col-sm-6">
			  <p><a href="http://wordpress.org/"><?php _e('Proudly powered by WordPress', 'wp_quickstart'); ?></a> | <?php _e('Theme design by', 'wp_quickstart'); ?> <a href="http://arnabportfolio.blogspot.in/">arnabportfolio</a></p>
			 </div>
			 <div class="col-sm-6">
			  <p>&copy; <?php echo date('Y');?> <a href="<?php echo home_url(''); ?>/" title="<?php bloginfo('name');?>" ><?php bloginfo('name');?></a></p>
			 </div>
			</div>
		    
		  </div>
		</footer>
		
		<!-- call bootstrap js from cdn  -->
		
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>


      <?php wp_footer(); ?>

    </body>
</html>
    