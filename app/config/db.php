<?php
/*
 * $Id: db.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */
 
$server = 'localhost';
$user = 'lotek';
$pass = '';
$db = 'lottery';
$database = new mysqli($server,$user,$pass,$db);

