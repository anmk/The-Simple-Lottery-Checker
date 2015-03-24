<?php
/*
 * $Id: register.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

include(DIR_CONF.FILE_DB);

if(isset($_POST['regSubmit'])){

	$Transfer->setInfo('user', $_POST['username']);
	$Transfer->setInfo('pass', $_POST['password']);
	$Transfer->setInfo('pass2', $_POST['password2']);

	if($_POST['username'] == '' || $_POST['password'] == '' || $_POST['password2'] == ''){
		$Transfer->setColourAlert($Languages->translator('FILL_FIELDS'),'redColour');
		$Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);

	} else if ($Authorization->filter($Transfer->getInfo('user')) == FALSE){
		$Transfer->setColourAlert($Languages->translator('LOGIN_EXISTS'),'redColour');        
		$Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);

	} else if (!preg_match('/^(?=[a-zA-Z0-9]*?[A-Z])(?=[a-zA-Z0-9]*?[a-z])(?=[a-zA-Z0-9]*?[0-9])[a-zA-Z0-9]{7,}$/', $Transfer->getInfo('pass'))){
		$Transfer->setColourAlert($Languages->translator('PASSWORD_REQUIREMENTS'),'redColour');        
		$Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);

	} else if ($Transfer->getInfo('pass') != $Transfer->getInfo('pass2')){
		$Transfer->setColourAlert($Languages->translator('PASSWORD_NOT_SAME'),'redColour');        
		$Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);

	} else {
		$Authorization->register($Transfer->getInfo('user'), $Transfer->getInfo('pass'));
		$_SESSION['username'] = $Transfer->getInfo('user');
		$_SESSION['login'] = TRUE;
		$Transfer->setColourAlert($Languages->translator('WELCOME') . '&nbsp' . $Transfer->getInfo('user') . '&nbsp' . $Languages->translator('ACCOUNT_CREATED'), 'greenColour');
		$Transfer->redirectLink(FILE_PRIVACY_INIT);
	}

} else {
	$Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);
}