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
if (!isset($params['background'])) {
    $params['background'] = '';
}
if ($params['background'] !== false) {
    echo '<style>body { background:#E9EAED; }</style>';
}
echo '<div class="ossn-layout-contents">';
echo $params['content'];
echo '</div>';
