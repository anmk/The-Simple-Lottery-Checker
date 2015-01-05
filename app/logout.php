<?php
/*
 * $Id: logout.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

$Authorization->logoff();
$Transfer->setColourAlert(LOGOUT, 'greenColour');
$Transfer->redirectLink(FILE_LOGIN_INIT);
