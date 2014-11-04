<?php
/*
 * $Id: privacy.php, v 1.0
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */

include_once("init.php");
if($Authorization->logStatus() == FALSE) {
$Transfer->setColourAlert('Dostęp zastrzeżony', 'redColour');	
$Transfer->redirectLink("../login_i.php");
} else {
$Transfer->loadLink(DIR_VWS.FILE_PRIVACY_VIEW);
}