<?php 
include_once 'coustom_post.php';
function agency()	
{	wp_enqueue_style( 'font', get_stylesheet_directory_uri().'/css/font-awesome.min.css', array(), '1', 'all' );
	wp_enqueue_style( 'carosol', get_stylesheet_directory_uri().'/css/owl.carousel.min.css', array(), '1', 'all' );
	wp_enqueue_style( 'defult-carosol', get_stylesheet_directory_uri().'/css/owl.theme.default.min.css', array(), '1', 'all' );
	wp_enqueue_style( 'boothtrap', get_stylesheet_directory_uri().'/css/bootstrap.css', array(),'1', 'all' );
	wp_enqueue_style( 'ageny', get_stylesheet_uri() );
	wp_enqueue_style( 'ageny',  get_stylesheet_directory_uri().'/responsive.css' );




	wp_enqueue_script( 'bootstrap', get_theme_file_uri( '/js/bootstrap.min.js' ), array('jquery'), '1.1', true );
	wp_enqueue_script( 'owl-carosol', get_theme_file_uri( '/js/owl.carousel.min.js' ), array('jquery')	, '1', true );
	wp_enqueue_script( 'active', get_theme_file_uri( '/js/active.js' ), array('jquery')	, '1',true );
}
add_action( 'wp_enqueue_scripts','agency');

register_nav_menus(array(
	'header_menu'=>'heder menu',
	'footer_menu'=>'Footer menu'
));
add_theme_support('post-thumbnails' );

add_filter( 'use_block_editor_for_post', '__return_false', 10 );
function side_bar()
{
	register_sidebar ( array(
		'name'          => __( 'footer1', 'agency' ),
		'id'            => 'footer1',
		'description'   => 'footer',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single"> ',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	));register_sidebar ( array(
		'name'          => __( 'footer2', 'agency' ),
		'id'            => 'footer2',
		'description'   => 'footer',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single"> ',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	));register_sidebar ( array(
		'name'          => __( 'footer3', 'agency' ),
		'id'            => 'footer3',
		'description'   => 'footer',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single"> ',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	));register_sidebar ( array(
		'name'          => __( 'footer4', 'agency' ),
		'id'            => 'footer4',
		'description'   => 'footer',
		'class'         => '',
		'before_widget' => '<div id="%1$s" class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="footer-text-single"> ',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>',
	));
	
	
}
add_action('widgets_init','side_bar');
?>


<?php 

function empt($var,$icon2){
 if (!empty($var)) {
                                            # code...
                                            ?>
                                            <a href="<?php  echo $var ?>"><i class="<?php echo $icon2 ?>" aria-hidden="true"></i></a>
                                            <?php
                                        }

	 }

 add_theme_support( 'big-logo',array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' )));
 add_image_size( 'big-size', 220, 180 );

 add_theme_support( 'custom-logo',array(
 'height'      => 100,
 'width'       => 400,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' )));
 add_image_size( 'custom-size', 220, 180 ); // 220 pixels wide by 180 pixels tall, soft proportional crop mode