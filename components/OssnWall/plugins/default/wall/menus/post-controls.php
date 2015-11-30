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
$postcontrols = $params['menu'];
if($postcontrols){
?>
<div class="ossn-wall-post-controls" onclick="Ossn.PostMenu(this);">
    <div class="drop-down-arrow"></div>
    <div class="post-menu">
        <div class="menu-links">
            <?php
            if (!empty($postcontrols)) {
                foreach ($postcontrols as $menu) {
                    foreach ($menu as $link) {
					 	$class = "post-control-".$link['name'];
					 	if(isset($link['class'])){
							$link['class'] = $class.' '.$link['class'];	
						} else {
							$link['class'] = $class;
						}						
						unset($link['name']);
						$link = ossn_plugin_view('output/url', $link);						
                        ?>
                        <li><?php echo $link; ?></li>
                    <?php
                    }
                }
            }?>
        </div>
    </div>

</div>
<?php 
}
