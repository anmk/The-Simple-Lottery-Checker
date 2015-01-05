<?php
/*
 * $Id: register.php, v 1.1
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
        $Transfer->setColourAlert('Proszę uzupełnić wymagane pola','redColour');
        $Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);
	 
	} else if ($Authorization->filter($Transfer->getInfo('user')) == FALSE){
        $Transfer->setColourAlert('podany login już istnieje','redColour');        
        $Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);

	} else if (!preg_match('/^(?=[a-zA-Z0-9]*?[A-Z])(?=[a-zA-Z0-9]*?[a-z])(?=[a-zA-Z0-9]*?[0-9])[a-zA-Z0-9]{7,}$/', $Transfer->getInfo('pass'))){
        $Transfer->setColourAlert('Hasło musi zawierać minimum 8 znaków w tym co najmniej jedną cyfrę, jedną małą oraz jedną dużą literę','redColour');        
        $Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);

	} else if ($Transfer->getInfo('pass') != $Transfer->getInfo('pass2')){
        $Transfer->setColourAlert('Podane hasła nie są identyczne','redColour');        
        $Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);

	} else {		
		$Authorization->register($Transfer->getInfo('user'), $Transfer->getInfo('pass'));
        $_SESSION['username'] = $Transfer->getInfo('user');
        $_SESSION['login'] = TRUE;
        $Transfer->setColourAlert('Witaj ' . $Transfer->getInfo('user') . ' Twoje konto zostało utworzone', 'greenColour');
		$Transfer->redirectLink(FILE_PRIVACY_INIT);
    }

} else {
 $Transfer->loadLink(DIR_VWS.FILE_REGISTER_VIEW);
}
