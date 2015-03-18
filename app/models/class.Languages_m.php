<?php
/*
 * $Id: class.Languages_m.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

class Languages_m {

    private $lang = null;

    function __construct($lang) {
		$this->lang = parse_ini_file("app/languages/"."{$lang}.ini");
    }

    function translator($str){
		try {
			if(!isset($this->lang[$str]))
			throw new Exception("Expected string not found: $str");
		} catch (Exception $e) {
			echo $e->getMessage();
		}
		return $this->lang[$str];
	}

	function selectLanguage() {
		$allLanguages = array('Pl', 'En');
		if (in_array($_GET['lng'], $allLanguages)) {
		    $_SESSION['lng'] = $_GET['lng'];
		}
		foreach($allLanguages as $oneLanguage) {
		    echo '&nbsp<a class="lang-control" href="?lng='.$oneLanguage.'">'.$oneLanguage.'</a>&nbsp';
		}
	}

}