<?php
/*
 * $Id: main.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

function loader($class){
    include 'class.' . $class . '.php';
}

spl_autoload_register('loader');

session_start();

$Transfer = new Transfer_m();
$Authorization = new Authorization_m();
$cNumbers = new Cnumber_m('cNumber1', 'cNumber2', 'cNumber3', 'cNumber4', 'cNumber5', 'cNumber6');
$dNumbers = new Dnumber_m('dNumber1', 'dNumber2', 'dNumber3', 'dNumber4', 'dNumber5', 'dNumber6');
$AccountSpace = new AccountSpace_m();
$Languages = new Languages_m($lang);