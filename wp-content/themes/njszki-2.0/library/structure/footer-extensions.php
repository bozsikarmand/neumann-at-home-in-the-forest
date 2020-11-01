<?php
/**
 * Adds footer structures.
 *
 */

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_footer_widget_area', 10 );
/**
 * Displays the footer widgets
 */
function travelify_footer_widget_area() {
	get_sidebar( 'footer' );
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_open_sitegenerator_div', 20 );
/**
 * Opens the site generator div.
 */
function travelify_open_sitegenerator_div() {
	echo '<div id="site-generator">
				<div class="container">';
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_footer_info', 30 );
/**
 * function to show the footer info, copyright information
 */
function travelify_footer_info() {
   $output = '<div class="copyright">Copyright &copy; 2013-2014 <a href="http://www.neumannazerdoben.hu/">Neumann Otthon az erdőben / At Home in the forest</a> | Készítette: <a href="http://bozsikarmand.hu/">Bozsik Armand Webdesign</a></div><!-- .copyright -->';
   echo do_shortcode( $output );
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_close_sitegenerator_div', 35 );


/**
 * add content to the right side of footer
 */
function travelify_footer_rightinfo() {
		echo '<div class="footer-right">';
		echo get_theme_mod( 'travelify_footer_textbox' );
		echo '</div>';
}
add_action( 'travelify_footer', 'travelify_footer_rightinfo', 30 );

/**
 * Closes the site generator div.
 */
function travelify_close_sitegenerator_div() {
	echo '<div style="clear:both;"></div>
			</div><!-- .container -->
			</div><!-- #site-generator -->';
}

/****************************************************************************************/

add_action( 'travelify_footer', 'travelify_backtotop_html', 40 );
/**
 * Shows the back to top icon to go to top.
 */
function travelify_backtotop_html() {
	echo '<div class="back-to-top"><a href="#branding"></a></div>';
}

?>