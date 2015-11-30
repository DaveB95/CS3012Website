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
echo ossn_view_form('user/resetpassword', array(
    'id' => 'ossn-login',
    'action' => ossn_site_url('action/resetpassword'),
    'method' => 'post',
    'class' => 'ossn-reset-login',
));
?>
