<?php
/*
 * $Id: privacy.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

include_once("init.php");
include(DIR_CONF.FILE_DB);

if($Authorization->logStatus() == FALSE) {
$Transfer->setColourAlert('Access Denied', 'redColour');	
$Transfer->redirectLink("../login_i.php");
} else if (isset($_POST['loadN'])){
$Transfer->loadLink(DIR_VWS.FILE_NUMBER_VIEW);	
} else {	
$Transfer->loadLink(DIR_VWS.FILE_PRIVACY_VIEW);	
}