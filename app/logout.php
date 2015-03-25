<?php
/*
 * $Id: logout.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

$Authorization->logoff();
$Transfer->setColourAlert($Languages->translator('LOGOUT'), 'greenColour');
$Transfer->redirectLink(FILE_LOGIN_INIT);
