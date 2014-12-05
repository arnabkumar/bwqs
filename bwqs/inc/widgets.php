<?php 

function bwqs_widget_areas() {

  
	register_sidebar( array(
		'name' => __( 'Footer Widget Left'),
		'id' => 'footer_widgets_left',
		'description'   => 'This is widgets',
                'class'         => '',
		'before_widget' => '<div id="%1$s" class="col-sm-4 widget %2$s"><div class="well well-lg">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
   
       register_sidebar( array(
		'name' => __( 'Footer Widget Middle'),
		'id' => 'footer_widgets_middle',
		'description'   => 'This is widgets',
                'class'         => '',
		'before_widget' => '<div id="%1$s" class="col-sm-4 widget %2$s"><div class="well well-lg">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

       
         register_sidebar( array(
		'name' => __( 'Footer Widget Right'),
		'id' => 'footer_widgets_right',
		'description'   => 'This is widgets',
                'class'         => '',
		'before_widget' => '<div id="%1$s" class="col-sm-4 widget %2$s"><div class="well well-lg">',
		'after_widget' => '</div></div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	 
	 
	 //sidebar
	 
	    register_sidebar( array(
		'name' => __( 'Right Sidebar'),
		'id' => 'right_sidebar_w',
		'description'   => 'This is widgets',
                'class'         => '',
		'before_widget' => ' <aside id="%1$s" class="info aside section widget %2$s"><div class="section-inner">',
		'after_widget' => '</div></aside>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	 
}
add_action('widgets_init', 'bwqs_widget_areas');

?>