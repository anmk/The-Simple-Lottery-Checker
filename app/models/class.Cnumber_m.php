<?php
/*
 * $Id: class.Cnumber_m.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

class Cnumber_m {
	
	public $cNumber1;
    public $cNumber2;
    public $cNumber3;
	public $cNumber4;
    public $cNumber5;
    public $cNumber6;
 
    public function __construct($cNumber1, $cNumber2, $cNumber3, $cNumber4, $cNumber5, $cNumber6) {
    
	    $this->cNumber1 = $cNumber1;
        $this->cNumber2 = $cNumber2;
        $this->cNumber3 = $cNumber3;
		$this->cNumber4 = $cNumber4;
        $this->cNumber5 = $cNumber5;
        $this->cNumber6 = $cNumber6;
    }
		
}
