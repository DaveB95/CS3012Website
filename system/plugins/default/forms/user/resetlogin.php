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
?>
<h2> <?php echo ossn_print('reset:password'); ?> </h2>
<div class="reset-notice"><?php echo ossn_print('enter:emai:reset:pwd'); ?></div>
<input type="text" name="email"/>
<input type="submit" value="<?php echo ossn_print('reset'); ?>"/>