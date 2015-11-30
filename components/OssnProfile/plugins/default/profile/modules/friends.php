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
$friends = $params['user']->getFriends();
echo '<div class="ossn-profile-module-friends">';
if (is_array($friends)) {
    foreach ($params['user']->getFriends() as $friend) {
        $url = $friend->iconURL()->large;
        $profile = $friend->profileURL();
        $user_name = strl($friend->fullname, 11);
        echo "<a href='{$profile}'>
          <div class='user-image'>
            <img src='{$url}' title='{$friend->fullname}'/>
			<div class='user-name'>{$user_name}</div>
		   </div>
       </a>";
    }
} else {
    echo '<h3>' . ossn_print('no:friends') . '</h3>';
}
echo '</div>';