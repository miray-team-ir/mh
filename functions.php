<?php
if ( function_exists( 'add_theme_support' ) ) {
    // thumbnail
    add_theme_support( 'post-thumbnails' );
    add_post_type_support( 'support', 'thumbnail' );
    // thumbnail for support post type
};
// $args = array(
// 	'name'          => sprintf( __( 'Sidebar %d' ), $i ),
// 	'id'            => "sidebar-$i",
// 	'description'   => '',
// 	'class'         => '',
// 	'before_widget' => '<li id="%1$s" class="widget %2$s">',
// 	'after_widget'  => "</li>\n",
// 	'before_title'  => '<h2 class="widgettitle">',
// 	'after_title'   => "</h2>\n",
// );

if ( function_exists( 'register_sidebar' ) ) {

    // ......................navbar....................
    register_sidebar( array(
        'name'        =>  "نوبار",
        'id'          => "navbar",
        'description' => "قسمت بالایی سایت  ",
        'before_widget' => '  ',
        'after_widget'  => " ",
        'before_title'  => '<h2 class="widgettitle d-none">',
        'after_title'   => "</h2>",
    ) );
}
 ?>
