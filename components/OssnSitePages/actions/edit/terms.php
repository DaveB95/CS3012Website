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
$save = new OssnSitePages;
$save->pagename = 'terms';
$save->pagebody = input('pagebody');
if ($save->SaveSitePage()) {
    ossn_trigger_message(ossn_print('page:saved'), 'success');
    redirect(REF);
} else {
    ossn_trigger_message(ossn_print('page:save:error'), 'error');
    redirect(REF);
}

