<?php
/*
 * $Id: privacy_v.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */
?>

<!DOCTYPE html>
<title>Privacy</title>
<meta charset="utf-8" />
<link rel = "stylesheet" href = "/public/css/style.css" />
<link rel = "stylesheet" href = "/app/init.php" />		
	
<div class="main">
	<header>
		<p class ="textBrown"><?php echo MY_ACCOUNT . " - " . $_SESSION['username']; ?></p>
	</header>
	
		<section class="main">			
			<form action="../number_i.php" name="loadNumbers" id="loadNumbers" method="post">	
				<article>
					<table>	
						<?php
						$AccountSpace = new AccountSpace_m();
						$Transfer = new Transfer_m();
						if (!isset($userId)) $userId = '';
						$AccountSpace->numbersId($AccountSpace->usersId($userId));
						$AccountSpace->readNumbers();
						
						for($x = 0; $x <= $AccountSpace->lineFactor-1; $x++) {	
							for($y = 0; $y <= 7; $y++) {
								if ($y < 1) {								
									echo '<span class="privLeftN" >' . $AccountSpace->namesAndNumbers['n'.$y][$x] . '</span>&nbsp';
								} else if ($y > 0 && $y < 7) {
									echo '<span class="privLeft" >' . $AccountSpace->namesAndNumbers['n'.$y][$x] . '</span>&nbsp';
								} else if ($y > 6) {
									$Transfer->setInfo('loadNumbers', $AccountSpace->namesAndNumbers['n'.$y][$x]); 
						?>
					<input type="radio" name="loadNumbers" id="loadNumbers" class="privRight" value="<?php print $Transfer->getInfo('loadNumbers'); ?>" /><br>
						<?php						
								}
							}
						}						
						?>
					<input type="image" src="/public/img/enterNumberPl.png" class="buttonPrivacy" />	       	
					</table>
				</article> 	          	
			</form>
        		
				<div>
		            <?php
	   					$ColourAlert = $this->getColourAlert();
	   					if($ColourAlert != '') {
	   					echo '<span class="ColourAlert">' . $ColourAlert . '</span>';
	   					}
					?>
				</div>
  				           	
		</section>
            
</div>
    