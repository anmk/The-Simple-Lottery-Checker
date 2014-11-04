<?php
/*
 * $Id: logout.php, v 1.0
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */

$Authorization->logoff();
$Transfer->setColourAlert(LOGOUT, 'greenColour');
$Transfer->redirectLink(FILE_LOGIN_INIT);
