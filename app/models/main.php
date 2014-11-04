<?php
/*
 * $Id: main.php, v 1.0
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */

function loader($class){
    include 'class.' . $class . '.php';
}

spl_autoload_register('loader');

$Transfer = new Transfer_m();
$Authorization = new Authorization_m();
$cNumbers = new Cnumber_m('cNumber1', 'cNumber2', 'cNumber3', 'cNumber4', 'cNumber5', 'cNumber6');
$dNumbers = new Dnumber_m('dNumber1', 'dNumber2', 'dNumber3', 'dNumber4', 'dNumber5', 'dNumber6');
