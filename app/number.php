<?php

/*
 * $Id: number.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

include_once('init.php');
include(DIR_CONF.FILE_DB);

if (isset($_POST['loadNumbers'])){
$Transfer->setInfo('loadNumb', $_POST['loadNumbers']);
$AccountSpace->loadNumbers($Transfer->getInfo('loadNumb'));

$Transfer->setInfo('cNumber1', $AccountSpace->numbersWhenId[0]);
$Transfer->setInfo('cNumber2', $AccountSpace->numbersWhenId[1]);
$Transfer->setInfo('cNumber3', $AccountSpace->numbersWhenId[2]);
$Transfer->setInfo('cNumber4', $AccountSpace->numbersWhenId[3]);
$Transfer->setInfo('cNumber5', $AccountSpace->numbersWhenId[4]);
$Transfer->setInfo('cNumber6', $AccountSpace->numbersWhenId[5]);

if (!isset($_SESSION['visibility'])) $_SESSION['visibility'] = '';
	$_SESSION['visibility'] = false;

} else {
	
if (!isset($_SESSION['visibility'])) $_SESSION['visibility'] = '';
	$_SESSION['visibility'] = true;
}

if(isset($_POST['numSubmit'])){

$Transfer->setInfo('cNumber1', $_POST['chosenNumber1']);
$Transfer->setInfo('cNumber2', $_POST['chosenNumber2']);
$Transfer->setInfo('cNumber3', $_POST['chosenNumber3']);
$Transfer->setInfo('cNumber4', $_POST['chosenNumber4']);
$Transfer->setInfo('cNumber5', $_POST['chosenNumber5']);
$Transfer->setInfo('cNumber6', $_POST['chosenNumber6']);

$Transfer->setInfo('dNumber1', $_POST['drawnNumber1']);
$Transfer->setInfo('dNumber2', $_POST['drawnNumber2']);
$Transfer->setInfo('dNumber3', $_POST['drawnNumber3']);
$Transfer->setInfo('dNumber4', $_POST['drawnNumber4']);
$Transfer->setInfo('dNumber5', $_POST['drawnNumber5']);
$Transfer->setInfo('dNumber6', $_POST['drawnNumber6']);

$Transfer->setInfo('numberId', '');

if($Authorization->logStatus() == TRUE) {
	$Transfer->setInfo('chNumberName', $_POST['chosenNumberName']);
}
if (!isset($userId)) $userId = '';
if (!isset($numberId)) $numberId = '';
if (!isset($devices)) $devices = '';

    if($_POST['chosenNumber1'] == '' || $_POST['chosenNumber2'] == '' || $_POST['chosenNumber3'] == '' || $_POST['chosenNumber4'] == '' || $_POST['chosenNumber5'] == '' || $_POST['chosenNumber6'] == ''){
	        $Transfer->setColourAlert(ENTER_ALL_NUMBER,'redColour');
	        $Transfer->loadLink("views/number_v.php");
		 
		}else if($_POST['drawnNumber1'] == '' || $_POST['drawnNumber2'] == '' || $_POST['drawnNumber3'] == '' || $_POST['drawnNumber4'] == '' || $_POST['drawnNumber5'] == '' || $_POST['drawnNumber6'] == ''){
	        $Transfer->setColourAlert(ENTER_ALL_NUMBER,'redColour');
	        $Transfer->loadLink("views/number_v.php");
		 
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('cNumber1'))){
	        $Transfer->setColourAlert(CORRECT_FIRST_CHOSEN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
		 
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('cNumber2'))){
	        $Transfer->setColourAlert(CORRECT_SECOND_CHOSEN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
			
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('cNumber3'))){
	        $Transfer->setColourAlert(CORRECT_THIRD_CHOSEN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
			
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('cNumber4'))){
	        $Transfer->setColourAlert(CORRECT_FOURTH_CHOSEN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
			
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('cNumber5'))){
	        $Transfer->setColourAlert(CORRECT_FIFTH_CHOSEN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
			
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('cNumber6'))){
	        $Transfer->setColourAlert(CORRECT_SIXTH_CHOSEN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
		
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('dNumber1'))){
	        $Transfer->setColourAlert(CORRECT_FIRST_DRAWN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
		 
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('dNumber2'))){
	        $Transfer->setColourAlert(CORRECT_SECOND_DRAWN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
			
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('dNumber3'))){
	        $Transfer->setColourAlert(CORRECT_THIRD_DRAWN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
			
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('dNumber4'))){
	        $Transfer->setColourAlert(CORRECT_FOURTH_DRAWN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
			
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('dNumber5'))){
	        $Transfer->setColourAlert(CORRECT_FIFTH_DRAWN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");
			
		} else if (!preg_match('^[0-9]{1,}$^', $Transfer->getInfo('dNumber6'))){
	        $Transfer->setColourAlert(CORRECT_SIXTH_DRAWN_NUMBER,'redColour');        
	        $Transfer->loadLink("views/number_v.php");

		} else if (($Authorization->logStatus() == TRUE) && ($_POST['chosenNumberName'] != '')) {
			$AccountSpace->remember($Transfer->getInfo('numberId'), $Transfer->getInfo('chNumberName'), $Transfer->getInfo('cNumber1'), $Transfer->getInfo('cNumber2'), $Transfer->getInfo('cNumber3'), $Transfer->getInfo('cNumber4'), $Transfer->getInfo('cNumber5'), $Transfer->getInfo('cNumber6'));
			$Transfer->setColourAlert(NAME_SAVED,'greenColour');
			$Transfer->setInfo('chNumberName', '');
			$AccountSpace->numbersToUsers($AccountSpace->numberId, $AccountSpace->usersId($userId));
	    	$Transfer->loadLink("views/number_v.php");	
		
		} else {
							
			$cNumbers = array($Transfer->getInfo('cNumber1'), $Transfer->getInfo('cNumber2'), $Transfer->getInfo('cNumber3'), $Transfer->getInfo('cNumber4'), $Transfer->getInfo('cNumber5'), $Transfer->getInfo('cNumber6'));
			$dNumbers = array($Transfer->getInfo('dNumber1'), $Transfer->getInfo('dNumber2'), $Transfer->getInfo('dNumber3'), $Transfer->getInfo('dNumber4'), $Transfer->getInfo('dNumber5'), $Transfer->getInfo('dNumber6'));
		
		echo '<div class="main_n">'; 
		echo '<table align="center"><td align="left"><br>';	
			foreach ($cNumbers as $cNumber => $cValue) {
    			echo $cNumber+1 . CHOSEN_NUMBER . '<span class="textBrown">' . $cValue . '</span>' . '<br/>';	
			}
			echo '</td><td>&nbsp</td>';
			
			echo '<td align="left"><br>';		
			foreach ($dNumbers as $dNumber => $dValue) {
    			echo $dNumber+1 . DRAWN_NUMBER . '<span class="textGreen">' . $dValue . '</span>' . '<br/>';	
			}	
		echo '</td></table>';
		
		echo '<table align="center"><td align="center"><br>';		
			$outcome = array();
			$guessFactor = 0;	
			foreach ($cNumbers as $cNumber => $cValue) {
				foreach ($dNumbers as $dNumber => $dValue) {
					if ($cValue == $dValue){
						array_push($outcome, $cValue);
						$guessFactor++;
					}
				}
			}
			
		echo '<br><align="center">' . SORT_LUCKY_NUMBERS . '<br><br>';
			$sortOutcome = array();
			$sortOutcome = $outcome;
			sort($sortOutcome);
		
			foreach($sortOutcome as $sortcValue){
				echo '&nbsp' . '<span class="textRed">' . $sortcValue . '</span>' . '&nbsp'; //sorted outcome
			}	
			
		echo '<p>' . YOU_HAVE . '<span class="textOrange">' . $guessFactor . '</span>' . GUESS . '</p>';
			
		echo '</td></table>';	
		
	    }
    
	} else {
     $Transfer->loadLink("views/number_v.php");
	}
