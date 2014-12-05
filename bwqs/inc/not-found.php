						<div class="four_zero_four">
							<div class="four_zero_message">
								<h1>404 <span>not found</span></h1>
								
							</div>
							
							
							<div class="four_zero_searchform">
								<p>The resource are you looking, not found. Try searching form below or look links below!</p>
								<form action="<?php echo site_url(); ?>" class="searchform" id="searchform" method="get" role="search">
									<div>
										<input type="text" id="s" name="s" value="" placeholder="Type your keyword">
										<input type="submit" value="Search" id="searchsubmit">
									</div>
								</form>							
							</div>
							
							
							<div class="four_zero_resources">
								<div class="row">
									<div class="col-md-6">
										<h2>Recent Pages</h2>
										<ol>
											<?php
											global $post;
											$args = array( 'posts_per_page' => 10, 'post_type'=> 'page' );
											$myposts = get_posts( $args );
											foreach( $myposts as $post ) : setup_postdata($post); ?>
												<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											<?php endforeach; ?>	
										</ol>									
									</div>
									<div class="col-md-6">
										<h2>Recent Posts</h2>
										<ol>
											<?php
											global $post;
											$args = array( 'posts_per_page' => 10, 'post_type'=> 'post' );
											$myposts = get_posts( $args );
											foreach( $myposts as $post ) : setup_postdata($post); ?>
												<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
											<?php endforeach; ?>	
										</ol>									
										
									</div>
								</div>
							</div>
						</div>