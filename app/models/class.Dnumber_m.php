<?php
/*
 * $Id: class.Dnumber_m.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

class Dnumber_m {
	
	public $dNumber1;
    public $dNumber2;
    public $dNumber3;
	public $dNumber4;
    public $dNumber5;
    public $dNumber6;
 
    public function __construct($dNumber1, $dNumber2, $dNumber3, $dNumber4, $dNumber5, $dNumber6) {
		
		$this->dNumber1 = $dNumber1;
        $this->dNumber2 = $dNumber2;
        $this->dNumber3 = $dNumber3;
		$this->dNumber4 = $dNumber4;
        $this->dNumber5 = $dNumber5;
        $this->dNumber6 = $dNumber6;
    }
	
}
