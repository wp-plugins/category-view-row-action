<?php
/*
Plugin Name: Category View Row Action
Plugin URI: http://aizatto.com
Description: Adds a 'view' to the category row action, allowing you to quickly see all posts by that category
Author: Ezwan Aizat Bin Abdullah Faiz
Author URI: http://aizatto.com
Version: 0.1
License: LGPLv2
*/

function category_view_row_action($actions, $tag) {
	$actions['view'] = '<a href="' . get_term_link($tag, $tag->taxonomy) . '" >View</a>';

	return $actions;
}

add_filter('tag_row_actions', 'category_view_row_action', 10, 2);
