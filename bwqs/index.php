<?php get_header(); ?>
		   
	<div class="container sections_content">
	    <div class="row">
		<div class="primary col-md-8 col-sm-12 col-xs-12">
                <?php get_template_part('post-excerpt'); ?> 
		    <?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { include('navigation.php'); } ?>
            </div>
		<?php get_sidebar(); ?>
	    </div>
	</div>
   <?php get_footer(); ?>