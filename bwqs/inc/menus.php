
<?php
//menu 1 fallback menu register (1st simple menu then fallback code)

register_nav_menu( 'main_menu', __( 'Main Menu', 'arnab' ) );

//fallback code
/* menu fallback code */
	function bwqs_quickstart_default_menu() {
		echo '<ul class="nav navbar-nav">';   /* ul id r bodole div/class id hote pare html jamon thakbe */
		if ('page' != get_option('show_on_front')) {
		echo '<li><a href="'. home_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
		
	}
	
	







?>