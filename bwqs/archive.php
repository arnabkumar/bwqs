<?php get_header(); ?>


<div class="container sections_content">
		    <div class="row">
			<div class="primary col-md-8 col-sm-12 col-xs-12">
			 <h2 class="archive_t"><?php the_title(); ?> &nbsp;
<?php if (have_posts()) : ?>
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>
<?php _e('Archive for the', 'bilanti'); ?> '<?php echo single_cat_title(); ?>' <?php _e('Category', 'bilanti'); ?>	
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<?php _e('Archive for the', 'bilanti'); ?> <?php single_tag_title(); ?> Tag
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<?php _e('Archive for', 'bilanti'); ?> <?php the_time('F jS, Y'); ?>	
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<?php _e('Archive for', 'bilanti'); ?> <?php the_time('F, Y'); ?>	
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<?php _e('Archive for', 'bilanti'); ?> <?php the_time('Y'); ?>	
<?php /* If this is a search */ } elseif (is_search()) { ?>
<?php _e('Search Results', 'bilanti'); ?>	
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<?php _e('Author Archive', 'bilanti'); ?>	
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<?php _e('Blog Archives', 'bilanti'); ?>	
<?php } ?>
</h2>
<?php else : ?>
<?php get_template_part('inc/not-found'); ?>
<?php endif; ?>

               <?php get_template_part( 'post-excerpt' ); ?>
			  
<?php if (function_exists('wp_pagenavi')) { wp_pagenavi(); } else { include('navigation.php'); } ?>

                
			</div>
			<?php get_sidebar(); ?>
		   </div>
		 </div>
		

					


<?php get_footer(); ?>