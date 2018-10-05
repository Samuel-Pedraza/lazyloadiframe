<?php 
/*
Plugin Name: iframeloader
Description:  Lazy Load Your Iframes
Version:      0.0.1
Author:       Sam Pedraza
*/

function iframeloader_js(){
	wp_register_script('iframeJS', '/wp-content/plugins/iframeloader/js/iframe.js');
	wp_enqueue_script('iframeJS');		
}

function rewritedatasrc_js(){
	wp_register_script('rewriteJS', '/wp-content/plugins/iframeloader/js/rewrite.js');
	wp_enqueue_script('rewriteJS');			
}

function iframeloader(){ 
	rewritedatasrc_js(); ?>
	<div>
		<h3>Iframe Lazy Load</h3>
	</div>
	<div>
			<input type="text" name="iframe-rewrite">
			<input type="submit" value="Update" id="rewrite">
	</div>
	<?php
}

function iframeloader_addMenu(){
	add_menu_page("iFrame Loader", "iFrame Loader", 4, "iframe-loader", "iframeloader");
}

add_action("admin_menu", "iframeloader_addMenu");
add_action("wp_footer", 'iframeloader_js');