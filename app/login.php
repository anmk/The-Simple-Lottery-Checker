<?php
/*
 * $Id: login.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

include_once('init.php');
include(DIR_CONF.FILE_DB);		

if(isset($_POST['logSubmit'])){

	$Transfer->setInfo('user', $_POST['username']);
	$Transfer->setInfo('pass', $_POST['password']);

	if($_POST['username'] == '' || $_POST['password'] == ''){
		$Transfer->setColourAlert($Languages->translator('FILL_REQUIRED_FIELDS'),'redColour');
		$Transfer->loadLink(DIR_VWS.FILE_LOGIN_VIEW);

	} else if (
	$Authorization->logGuard($Transfer->getInfo('user'), $Transfer->getInfo('pass')) == FALSE)
	{
		$Transfer->setColourAlert($Languages->translator('UNKNOWN_LOGIN_OR_PASSWORD'),'redColour');
		
		$Transfer->loadLink(DIR_VWS.FILE_LOGIN_VIEW);
	} else {
		$_SESSION['username'] = $Transfer->getInfo('user');
		$_SESSION['login'] = TRUE;
		$Transfer->setColourAlert($Languages->translator('WELCOME_AGAIN') . '&nbsp' . $Transfer->getInfo('user') . '&nbsp' . $Languages->translator('CHECK_YOUR_OUTCOME'), 'greenColour');
		$Transfer->redirectLink(FILE_PRIVACY_INIT);
	}

} else {
	$Transfer->loadLink(DIR_VWS.FILE_LOGIN_VIEW);
}