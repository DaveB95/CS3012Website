<?php
/**
 * Open Source Social Network
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.org>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$menus = $params['menu'];
foreach($menus as $menu) {
		foreach($menu as $link) {
				$class = "menu-footer-" . $link['name'];
				if(isset($link['class'])) {
						$link['class'] = $class . ' ' . $link['class'];
				} else {
						$link['class'] = $class;
				}
				unset($link['name']);
				
				echo ossn_plugin_view('output/url', $link);
		}
}
