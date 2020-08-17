<?php
	if (function_exists('register_sidebar'))
	 {
        register_sidebar(
            array(
                'id' => 'footer',
                'name' => __( 'Footer' ),
                'description' => __( 'Widgets for footer.' ),
                'before_widget' => '<div class="col-md-4">',
                'after_widget' => '</div>',
                'before_title' => '<h3>',
                'after_title' => '</h3>'
            ));
    }
?>