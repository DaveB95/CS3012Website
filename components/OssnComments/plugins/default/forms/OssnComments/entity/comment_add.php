<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Social Website Core Team <info@informatikon.com>
 * @copyright 2014 iNFORMATIKON TECHNOLOGIES
 * @license   General Public Licence http://www.opensource-socialnetwork.org/licence
 * @link      http://www.opensource-socialnetwork.org/licence
 */
$object = $params['object'];
?>
<div class="ossn-comment-attach-photo" onclick="Ossn.Clk('#ossn-comment-image-file-<?php echo $object; ?>');"></div>
<input type="text" name="comment" id="comment-box-<?php echo $object; ?>" class="comment-box"
       placeholder="<?php echo ossn_print('write:comment'); ?>"/>
<input type="hidden" name="entity" value="<?php echo $object; ?>"/>
<input type="hidden" name="comment-attachment"/>
          
      