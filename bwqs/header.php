
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> <!--for responsive -->

       <!--for wp development (main stylesheet)-->
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
		
		<!-- call google fonts  -->
<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
	 
	 <!-- font-awesome call from server -->
<link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.css" rel="stylesheet">
		
			<!-- call bootstrap from cdn -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css" />

<!-- call bootstrap Optional theme from cdn -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap-theme.min.css" />
				
		<!--[if IE]>
				<script src="<?php echo get_template_directory_uri(); ?>/js/respond.js"></script>
		<![endif]-->
		 
		
		<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<?php global $woocommerce; ?>		
		
<?php wp_head(); ?>
		
    </head>
     <body <?php body_class(); ?>>
	
	<nav role="navigation" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="<?php echo site_url(); ?>" class="navbar-brand"><?php bloginfo('name'); ?></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
	
								<?php
				if (function_exists('wp_nav_menu')) {
					wp_nav_menu(array('theme_location'    => 'main_menu',
                'depth'             => 2,
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb' => 'bwqs_quickstart_default_menu',
                'walker'            => new wp_bootstrap_navwalker()
					
					));
				}
				else {
					bwqs_quickstart_default_menu();
				}
				?>
	
     <form role="search" class="navbar-form navbar-left" method="get" id="searchform" action="<?php echo esc_url( home_url( '/'  ) ); ?>">
		
         <div class="input-group">
			
				 <input type="text" class="form-control" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="<?php _e( 'Search for products', 'woocommerce' ); ?>">
				
				<div class="input-group-btn">
                        <button id="searchsubmit" class="btn btn-default" value="<?php echo esc_attr__( 'Search' ); ?>" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                    </div>
				<input type="hidden" name="post_type" value="product" />
			</div>
      </form>
     
	<!-- for log in log out menu -->
	  
	  
	
	<?php if (is_user_logged_in() ): ?>
	
	<ul class="nav navbar-nav navbar-right">
 <li class="dropdown">
	      <a href="#" data-toggle="dropdown">
		                       <i class="glyphicon glyphicon-user"></i>
					<span class="caret"></span>
	      </a>
					
				  
	   <ul class="dropdown-menu">
	    <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">My Account</a></li>
	    <li><a href="<?php echo get_permalink( get_option('yith_wcwl_wishlist_page_id') ); ?>">Wishlist</a></li>
	   </ul></li>
	 <li class="dropdown">
	        <a href="#" data-toggle="dropdown">
		                      <i class="glyphicon glyphicon-shopping-cart"></i> 
					<span class="sr-only">Shopping Cart: </span>
					<span class="cart-contents"> - <span class="amount"></span></span>
		     		<span class="caret"></span>
	      </a>
	  <ul class="dropdown-menu">
	      <li><a href="<?php echo get_permalink( get_option('woocommerce_cart_page_id') ); ?>">Cart</a></li>
	    <li><a href="<?php echo get_permalink( get_option('woocommerce_checkout_page_id') ); ?>">Checkout</a></li>
	  </ul>
	   </li>
	   </ul>
       <?php else: ?> 
	 <ul class="nav navbar-nav navbar-right">
 <li class="dropdown">
	      <a href="#" data-toggle="dropdown">
		                       <i class="glyphicon glyphicon-user"></i>
					<span class="caret"></span>
	      </a>
					
				  
	   <ul class="dropdown-menu">
	    <li><a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>">My Account</a></li>
	    <li><a href="<?php echo get_permalink( get_option('yith_wcwl_wishlist_page_id') ); ?>">Wishlist</a></li>
	   </ul></li>
	 <li class="dropdown">
	        <a href="#" data-toggle="dropdown">
		                      <i class="glyphicon glyphicon-shopping-cart"></i> 
					<span class="sr-only">Shopping Cart: </span>
					<span class="cart-contents"> - <span class="amount"></span></span>
		     		<span class="caret"></span>
	      </a>
	  <ul class="dropdown-menu">
	      <li><a href="<?php echo get_permalink( get_option('woocommerce_cart_page_id') ); ?>">Cart</a></li>
	    <li><a href="<?php echo get_permalink( get_option('woocommerce_checkout_page_id') ); ?>">Checkout</a></li>
	  </ul>
	   </li>
	   </ul>
       <ul class="nav navbar-nav navbar-right">
 <li><a href="<?php bloginfo('home'); ?>/wp-login.php">login</a></li>
 <li><a href="<?php bloginfo('home'); ?>/wp-login.php?action=register">Register</a></li>
	   
	   </ul><!-- login nei -->

	<?php endif ?>	
	   
<!-- wordpress e settings > genarel > Membership 	
> Anyone can register chake -->
		

      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>