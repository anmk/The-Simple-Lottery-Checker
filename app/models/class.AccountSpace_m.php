<?php
/*
 * $Id: class.AccountSpace_m.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

class AccountSpace_m {
		
	private $user;
	private $userId;
	private $numberId;
	private $numberName;	
	public $n1;
    public $n2;
    public $n3;
	public $n4;
    public $n5;
    public $n6;
	public $n7;
	public $lineFactor;
	public $numbersIdArray = array();
	public $namesAndNumbers = array (
			    	"n0" => array(),
			    	"n1" => array(),
			    	"n2" => array(),
			    	"n3" => array(),
			    	"n4" => array(),
			    	"n5" => array(),
			    	"n6" => array(),
			    	"n7" => array(),
					);
	public $numbersWhenId = array();
	
	function __construct(){
    }
	
	function logName($user){
		if(isset($_SESSION['username'])){
			$user = $_SESSION['username'];
			return $user;
        } else {
        	$user = 'logedOff';
			return $user;
        }
    }
	
	function usersId($userId){
		global $database;
		 	if($stmt = $database->prepare("SELECT user_id FROM users WHERE username = ?")){
				$stmt->bind_param("s", $_SESSION['username']);
				$stmt->execute();
				$stmt->bind_result($userId);
				$stmt->fetch();
					return $userId;
					$stmt->close();	
			} else {
			$stmt->close();	
			return FALSE;
			}
	 }
	
	function numbersId($userId){
	  	global $database;
		if($stmt = $database->prepare("SELECT number_id FROM numbers_to_users WHERE  user_id = ?")){
			$stmt->bind_param("i", $userId);
			$stmt->execute();
			$stmt->bind_result($numberId);
			$num = array();
				while ($stmt->fetch()) {
					array_push($this->numbersIdArray, $numberId);
				}
			$stmt->close();	
		} else {
		die();
		}
	 }
	
	function readNumbers(){
	  	global $database;
			$stmt = $database->prepare("SELECT number_name, n1, n2, n3, n4, n5, n6, number_id FROM numbers WHERE number_id = ?");
				$this->lineFactor = 0;
				foreach($this->numbersIdArray as $n => $value){
					$stmt->bind_param('i', $value);
					$stmt->execute();
					$stmt->bind_result($numberName, $n1, $n2, $n3, $n4, $n5, $n6, $numberId);
					while ($stmt->fetch()) {
						array_push($this->namesAndNumbers["n0"],$numberName);
						array_push($this->namesAndNumbers["n1"],$n1);
						array_push($this->namesAndNumbers["n2"],$n2);
						array_push($this->namesAndNumbers["n3"],$n3);
						array_push($this->namesAndNumbers["n4"],$n4);
						array_push($this->namesAndNumbers["n5"],$n5);
						array_push($this->namesAndNumbers["n6"],$n6);
						array_push($this->namesAndNumbers["n7"],$numberId);														
					}
					$this->lineFactor++;
				}
			$stmt->close();
	}

	function loadNumbers($numberId){
	  	global $database;
			$stmt = $database->prepare("SELECT n1, n2, n3, n4, n5, n6 FROM numbers WHERE number_id = ?");
					$stmt->bind_param('i', $numberId);
					$stmt->execute();
					$stmt->bind_result($n1, $n2, $n3, $n4, $n5, $n6);
					$stmt->fetch();
					$stmt->close();
						array_push($this->numbersWhenId,$n1);
						array_push($this->numbersWhenId,$n2);
						array_push($this->numbersWhenId,$n3);
						array_push($this->numbersWhenId,$n4);
						array_push($this->numbersWhenId,$n5);
						array_push($this->numbersWhenId,$n6);
					return $this->numbersWhenId;
	}

	function remember($numberId, $numberName, $n1, $n2, $n3, $n4, $n5, $n6){
		global $database;
		$query = "INSERT INTO numbers (number_name, n1, n2, n3, n4, n5, n6) VALUES(?, ?, ?, ?, ?, ?, ?)";
		if ($stmt = $database->prepare($query)){
			$stmt->bind_param('siiiiii', $numberName, $n1, $n2, $n3, $n4, $n5, $n6);
			if($stmt->execute()){
		    	$this->numberId = $stmt->insert_id;
				return $numberId;
				$stmt->close();	
			}else{
				$stmt->close();
				return FALSE;
			}
		}else{
			$stmt->close();
			return FALSE;
		}
	}
	
	function numbersToUsers($numberId, $userId){
		global $database;
		$query = "INSERT INTO numbers_to_users (number_id, user_id) VALUES(?, ?)";
			if ($stmt = $database->prepare($query)){
				$stmt->bind_param('ii', $this->numberId, $this->usersId($userId));
				$stmt->execute();
				$stmt->fetch();
				$stmt->close();
				return TRUE;
			}else{
				$stmt->close();
				return FALSE;
			}
	}
	
}