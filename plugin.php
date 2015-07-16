<?php
/*
Plugin Name: WordPress SEO - ACF Content Analysis
Plugin URI: http://y-designs.com/
Description: This plugin ensures that Yoast's WordPress SEO analysize all ACF content including FlexiContent and Repeaters
Version: 0.1
Author: Ryuhei Yokokawa
Author URI: http://y-designs.com
License: GPL
*/

require 'wpseocontent.php';

function add_all_content_to_yoast( $content ) {
	global $post;
	$pid = isset($_GET['post']) ? $_GET['post'] : $post->ID;
	$fields = get_fields($pid);
	$wpseo_content = new WPSEOcontent;
	$data = $wpseo_content->getFieldData($fields);
	$content = $content.' '.$data;


	return $content;
}
add_filter('wpseo_pre_analysis_post_content', 'add_all_content_to_yoast', 10, 2);