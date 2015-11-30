<?php
/**
 *    OpenSource-SocialNetwork
 *
 * @package   (Informatikon.com).ossn
 * @author    OSSN Core Team <info@opensource-socialnetwork.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://opensource-socialnetwork.com/licence
 * @link      http://www.opensource-socialnetwork.com/licence
 */
?>
<div class="tabs-input">
    <div class="wall-tabs">
        <div class="item">
            <div class="ossn-wall-status"></div>
            <div class="text"><?php echo ossn_print('post'); ?></div>
        </div>
    </div>
    <textarea placeholder="<?php echo ossn_print('wall:post:container'); ?>" name="post"></textarea>

    <div id="ossn-wall-location" style="display:none;">
        <input type="text" placeholder="<?php echo ossn_print('enter:location'); ?>" name="location"
               id="ossn-wall-location-input"/>
    </div>
    <div id="ossn-wall-photo" style="display:none;">
        <input type="file" name="ossn_photo"/>
    </div>
</div>
<div class="controls">
    <li>
        <div class="ossn-wall-location"></div>
    </li>
    <li>
        <div class="ossn-wall-photo"></div>
    </li>
    <div style="float:right;">
        <input type="hidden" value="<?php echo $params['group']['group']->guid; ?>" name="wallowner"/>
     	<div class="ossn-loading ossn-hidden"></div>       
        <input class="ossn-button-submit-b ossn-wall-post" type="submit" value="<?php echo ossn_print('post'); ?>"/>
    </div>
</div>