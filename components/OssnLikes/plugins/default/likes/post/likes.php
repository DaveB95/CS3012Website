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

$OssnLikes = new OssnLikes;

$object = $params->guid;
$count = $OssnLikes->CountLikes($object);

$user_liked = '';
if (ossn_isLoggedIn()) { 
            if ($OssnLikes->isLiked($object, ossn_loggedin_user()->guid)) {
                $user_liked = true;
            }
}
/* Likes and comments don't show for nonlogged in users */ 
if ($OssnLikes->CountLikes($object)) { ?>
    <div class="like_share">
        <div class="ossn-like-icon"></div>
        <?php if ($user_liked == true && $count == 1) { ?>
            <?php echo ossn_print("ossn:liked:you"); ?>
        <?php
        } elseif ($user_liked == true && $count > 1) {
            $count = $count - 1;
            $total = 'person';
            if ($count > 1) {
                $total = 'people';
            }
            $link['onclick'] = "Ossn.ViewLikes({$object});";
            $link['href'] = '#';
            $link['text'] = ossn_print("ossn:like:{$total}", array($count));
            $link = ossn_plugin_view('output/url', $link);
            echo ossn_print("ossn:like:you:and:this", array($link));
        } elseif (!$user_liked) {
            $total = 'person';
            if ($count > 1) {
                $total = 'people';
            }
            $link['onclick'] = "Ossn.ViewLikes({$object});";
            $link['href'] = '#';
            $link['text'] = ossn_print("ossn:like:{$total}", array($count));
            $link = ossn_plugin_view('output/url', $link);
            echo ossn_print("ossn:like:this", array($link));
        }?>
    </div>
<?php } ?>
