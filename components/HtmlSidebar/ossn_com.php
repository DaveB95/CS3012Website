<?php
/**
 * Open Source Social Network
 *
 * @packageOpen Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
define('__HTML_SIDEBAR__', ossn_route()->com . 'HtmlSidebar/');

/**
 * Home sidebar initlize the component
 * 
 * return void
 */
function html_sidebar(){
	ossn_add_hook('newsfeed', "sidebar:right", 'html_widget');
	ossn_register_com_panel('HtmlSidebar', 'settings');	
    if (ossn_isAdminLoggedin()) {
        ossn_register_action('html/sidebar/save', __HTML_SIDEBAR__ . 'actions/save.php');
    }	
}
/**
 * Show a html on sidebar
 * 
 * return array
 */
function html_widget($hook, $tye, $return){
	$return[] = ossn_plugin_view('htmlsidebar/contents');
	return $return;
}
/**
 * Convert save data into html code
 *
 * @param string $text encoded html code.
 *
 * return void|string
 */
function html_sidebar_output($text = ''){
	if(!empty($text)){
		return html_entity_decode($text, ENT_COMPAT, 'utf-8');
	}
}
ossn_register_callback('ossn', 'init', 'html_sidebar');
