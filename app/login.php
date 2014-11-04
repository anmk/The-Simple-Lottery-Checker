<?php
/*
 * $Id: login.php, v 1.0
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */

include_once('init.php');
include(DIR_CONF.'db.php');

if(isset($_POST['logSubmit'])){
    
    $Transfer->setInfo('user', $_POST['username']);
    $Transfer->setInfo('pass', $_POST['password']);
	
    if($_POST['username'] == '' || $_POST['password'] == ''){
        $Transfer->setColourAlert('Proszę uzupełnić wymagane pola','redColour');
        $Transfer->loadLink(DIR_VWS.FILE_LOGIN_VIEW);
		
    } else if (
    $Authorization->logGuard($Transfer->getInfo('user'), $Transfer->getInfo('pass')) == FALSE)
    {
        $Transfer->setColourAlert('Nieznany login lub hasło','redColour');
        
        $Transfer->loadLink(DIR_VWS.FILE_LOGIN_VIEW);
    } else {
        $_SESSION['username'] = $Transfer->getInfo('user');
        $_SESSION['login'] = TRUE;
		$Transfer->setColourAlert(WELCOME . $Transfer->getInfo('user') . CHECK_YOUR_OUTCOME, 'greenColour');
		$Transfer->redirectLink(FILE_PRIVACY_INIT);
    }
    
} else {
     $Transfer->loadLink(DIR_VWS.FILE_LOGIN_VIEW);
}
