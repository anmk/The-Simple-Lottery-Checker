<?php
/*
 * $Id: class.Transfer_m.php, v 1.0
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */

class Transfer_m {
	
	private $info;
	private $ColourAlertTypes;

	function __construct(){
    }

	function loadLink($url){
        include(APP_PATH.$url);
    }

    function setInfo($name,$value){
            $this->info[$name] = htmlentities($value, ENT_QUOTES);
    }
	
	function setColourAlertTypes($caTypes){
        $this->setColourAlertTypes = $caTypes;
    }
    
    function setColourAlert($value, $caType){
        $caType == null;
        if($caType == ''){
        	$caType = $this->ColourAlertTypes[0];}
        $_SESSION[$caType][] = $value;
    }
    	
	function getInfo($name){
        if(isset($this->info[$name])){
            return $this->info[$name];
        } else {
            return '';
        }
    }
 
	function getColourAlert(){
        $info = '';
		while (list(, $ColourAlert) = each($this->setColourAlertTypes)) {	
            if(isset($_SESSION[$ColourAlert])){
            	while (list(, $value) = each($_SESSION[$ColourAlert])) {	
                    $info .= '<p class="' . $ColourAlert . '">' . $value . '</p>';
                }
                unset($_SESSION[$ColourAlert]);
            }
        }
        return $info;
    }

	function redirectLink($url){
        header("Location: $url");
    }
	
}

 
