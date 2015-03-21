<?php
/*
 * $Id: privacy_v.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */
?>

<header>
	<h5><?php $Languages = new Languages_m($_SESSION['lng']); echo $Languages->translator('MY_ACCOUNT') . " - " . $_SESSION['username']; ?></h5>
</header>

<div class="container-fluid">
	<form action="../number_i.php" name="loadNumbers" id="loadNumbers" method="post">
	<section class="row">
		<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs">
		</div>

		<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
			<div class="emptySpaceH"></div>
			<?php
				$AccountSpace = new AccountSpace_m(); $Transfer = new Transfer_m(); if (!isset($userId)) $userId = '';
				$AccountSpace->numbersId($AccountSpace->usersId($userId));
				$AccountSpace->readNumbers();
				for($x = 0; $x <= $AccountSpace->lineFactor-1; $x++) {	
					for($y = 0; $y <= 7; $y++) {
						if ($y < 1) {
						echo '<span class="privLeftN hidden-xs">' . $AccountSpace->namesAndNumbers['n'.$y][$x] . '</span>';
						echo '<span class="privLeftNXs visible-xs">' . $AccountSpace->namesAndNumbers['n'.$y][$x] . '</span>';
						echo '<div class="emptySpace visible-xs"></div>';
					} else if ($y > 0 && $y < 7) {
						echo '<span class="privLeft hidden-xs" >' . $AccountSpace->namesAndNumbers['n'.$y][$x] . '</span>';
						echo '<span class="privLeftXs visible-xs" >' . $AccountSpace->namesAndNumbers['n'.$y][$x] . '</span>';
					} else if ($y > 6) {
						$Transfer->setInfo('loadNumbers', $AccountSpace->namesAndNumbers['n'.$y][$x]); 
			?>
			<input type="radio" name="loadNumbers" id="loadNumbers" class="tCtn" value="<?php print $Transfer->getInfo('loadNumbers'); ?>" />
			<div class="emptySpaceH"></div>
			<?php
					}
				}
			}
			?>
		</div>

		<div class="col-lg-1 col-md-1 col-sm-1 hidden-xs"></div>
	</section>

	<section class="row">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>

			<div id="buttons" class="col-lg-10 col-md-10 col-sm-10 col-xs-10 emptySpaceH">
				<input type="submit" class="btn btn-default btn-lg btn-block" data-toggle="tooltip" data-placement="bottom" title="<?php echo $Languages->translator('RESULT_DESCRIPTION'); ?>" value="<?php echo $Languages->translator('LOAD_NUMBERS'); ?>" />
			</div>

			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
	</section>
	</form>
		
	<div class="emptySpaceH">
		<?php
			$ColourAlert = $this->getColourAlert();
			if($ColourAlert != '') {
			echo '<span class="ColourAlert">' . $ColourAlert . '</span>';
			}
		?>
	</div>
</div>
