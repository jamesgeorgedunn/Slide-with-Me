<?php
/**
* Plugin Name: Slide with me
* Plugin URI: http://www.jamesgeorgedunn.com
* Description: Allows the update button to follow the user as they scroll when editing a page.
* Version: 1.0
* Author: James George Dunn
* Author URI: http://www.jamesgeorgedunn.com
* License: GNU GPL
*/

function slide_with_me() {
	echo '<style>
		#major-publishing-actions #publishing-action {
			position: fixed !important;
			z-index: 100;
			bottom: 15px;
		}
		
		#publish {
			width: 260px;
		}
	';
		
}

add_action('admin_head', 'slide_with_me');

?>