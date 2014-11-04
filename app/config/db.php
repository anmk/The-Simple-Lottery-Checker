<?php
/*
 * $Id: db.php, v 1.0$
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */
 
$server = 'localhost';
$user = 'lotek';
$pass = '1BQ2xe21';
$db = 'lottery';
$database = new mysqli($server,$user,$pass,$db);

