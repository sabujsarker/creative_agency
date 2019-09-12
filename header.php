<?php 
wp_nav_menu( array(
	'theme_location'  => 'header_menu',
	'container'       => 'div',
	'container_class' => 'menu',
	'container_id'    => '',
	'menu_class'      => 'nav navbar-nav',
	'items_wrap'      => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
	'depth'           => 3,
	'walker'          => '',
) );

 ?>