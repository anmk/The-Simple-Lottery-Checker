<?php
/*
 * $Id: number_v.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */
?>

<!DOCTYPE html>
<title>Enter the number</title>  
<meta charset="utf-8" />
<link rel="stylesheet" href="/public/css/style.css" />
    
<div class="main">
	<header>
		<p class ="textBrown"><?php echo CHECK; ?></p>
	</header>
	
	<section class="main"> 
		
		<form action="" method="post" id="numSubmit">	
			<article> <?php //Chosen ?>
			<?php if ($_SESSION['visibility'] == true) { ?>
				<span class="textGrey"><?php echo ENTER_CHOSEN_NUMBER; ?></span>
				<table class="numberTable">
			<?php } else if ($_SESSION['visibility'] == false) { ?>
				<span class="textMiniGreen"><?php echo SAVED_CHOSEN_NUMBER; ?></span>	
				<table class="savedChosenNumber">
			<?php } ?>
            
            		<tr>
			        	<td class="numberText"><label for="chosenNumber1"><?php echo FIRST_CHOSEN_NUMBER; ?></label></td>
						<td class="numberText"><label for="chosenNumber2"><?php echo SECOND_CHOSEN_NUMBER; ?></label></td>
			          	<td class="numberText"><label for="chosenNumber3"><?php echo THIRD_CHOSEN_NUMBER; ?></label></td>
			        	<td class="numberText"><label for="chosenNumber4"><?php echo FOURTH_CHOSEN_NUMBER; ?></label></td>
			         	<td class="numberText"><label for="chosenNumber5"><?php echo FIFTH_CHOSEN_NUMBER; ?></label></td>
			         	<td class="numberText"><label for="chosenNumber6"><?php echo SIXTH_CHOSEN_NUMBER; ?></label></td>
		        	</tr>
         
		            <tr>
			            <td><input type="text" name="chosenNumber1" id="chosenNumber1" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber1'); ?>" /></td>
			            <td><input type="text" name="chosenNumber2" id="chosenNumber2" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber2'); ?>" /></td>
			            <td><input type="text" name="chosenNumber3" id="chosenNumber3" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber3'); ?>" /></td>
			            <td><input type="text" name="chosenNumber4" id="chosenNumber4" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber4'); ?>" /></td>
			            <td><input type="text" name="chosenNumber5" id="chosenNumber5" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber5'); ?>" /></td>
			            <td><input type="text" name="chosenNumber6" id="chosenNumber6" size="2"  class="numberWindow" value="<?php echo $this->getInfo('cNumber6'); ?>" /></td>
			        </tr>
        		</table><br>
        	</article>
        	
       		<article> <?php //Drawn ?> 
        	<span class="textGrey"><?php echo ENTER_DRAWN_NUMBER; ?></span>     
    			<table class="numberTable">
    				
    				<tr>
	        			<td class="numberText"><label for="drawnNumber1"><?php echo FIRST_DRAWN_NUMBER; ?></label></td>  
	        			<td class="numberText"><label for="drawnNumber1"><?php echo SECOND_DRAWN_NUMBER; ?></label></td>
	        			<td class="numberText"><label for="drawnNumber1"><?php echo THIRD_DRAWN_NUMBER; ?></label></td>
	        			<td class="numberText"><label for="drawnNumber1"><?php echo FOURTH_DRAWN_NUMBER; ?></label></td>
	        			<td class="numberText"><label for="drawnNumber1"><?php echo FIFTH_DRAWN_NUMBER; ?></label></td>
	        			<td class="numberText"><label for="drawnNumber1"><?php echo SIXTH_DRAWN_NUMBER; ?></label></td>      	
	        		</tr>
    	
        			<tr>
			            <td><input type="text" name="drawnNumber1" id="drawnNumber1" size="2" class="numberWindow" value="<?php echo $this->getInfo('dNumber1'); ?>" /></td>
			            <td><input type="text" name="drawnNumber2" id="drawnNumber2" size="2" class="numberWindow" value="<?php echo $this->getInfo('dNumber2'); ?>" /></td>
			            <td><input type="text" name="drawnNumber3" id="drawnNumber3" size="2" class="numberWindow" value="<?php echo $this->getInfo('dNumber3'); ?>" /></td>
			            <td><input type="text" name="drawnNumber4" id="drawnNumber4" size="2" class="numberWindow" value="<?php echo $this->getInfo('dNumber4'); ?>" /></td>
			            <td><input type="text" name="drawnNumber5" id="drawnNumber5" size="2" class="numberWindow" value="<?php echo $this->getInfo('dNumber5'); ?>" /></td>
			            <td><input type="text" name="drawnNumber6" id="drawnNumber6" size="2" class="numberWindow" value="<?php echo $this->getInfo('dNumber6'); ?>" /></td>
			        </tr>
			   
				</table><br>
			</article>	 
		
			<article> 
				<table>
					<input type="hidden" name="numSubmit">
					<input type="image" class="button" src="/public/img/proceedPl.png"></br>
					<?php 
						$Authorization = new Authorization_m();
						if($Authorization->logStatus() == TRUE)
					{ ?>	
					<label for="chosenNumberCheckbox"><span class="textSaveNumbers" align="left"><?php echo SAVE_CHOSEN_NUMBER; ?></span></label><br>
					<input type="text" name="chosenNumberName" id="chosenNumberName" size="20" class="fieldNumberName" value="<?php echo $this->getInfo('chNumberName'); ?>" />
					<?php } else { ?>
						<span class="textSaveNumbers"><?php echo CHECK_NUMBER; ?></span>
					<?php } ?>
				</table>
			</article>
		</form>
			
			<table align="center">
				<td><?php $ColourAlert = $this->getColourAlert();
					if($ColourAlert != '') {echo '<span class="ColourAlert">' . $ColourAlert . '</span>';}?>
				</td>
			</table>
		
	</section>
			 			
</div>
    