<?php
/*
 * $Id: number_v.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */
?>

<title>Enter the number</title>  
<meta charset="<?php echo CHARSET; ?>">
<link rel="stylesheet" type="text/css" href="/public/css/style.css" />
    
<div class="main">
	<p align="center"><?php echo '<span class="textBrown">' . CHECK . '</span>'; ?></p>
	
		<form action="" method="post" id="numSubmit">
			     	
  				<?php //Choosed ?>
  				<?php if ($_SESSION['visibility'] == true) { ?>
  					<span class="textGrey"><?php echo ENTER_CHOOSED_NUMBER; ?></span>
  					<table class="numberTable">
  				<?php } else if ($_SESSION['visibility'] == false) { ?>
  					<span class="textMiniGreen"><?php echo SAVED_CHOOSED_NUMBER; ?></span>	
  					<table class="savedChoosedNumber">
  				<?php } ?>
	            
	            		<tr>
				        	<td class="numberText"><label for="choosedNumber1"><?php echo FIRST_CHOOSED_NUMBER; ?></label></td>
							<td class="numberText"><label for="choosedNumber2"><?php echo SECOND_CHOOSED_NUMBER; ?></label></td>
				          	<td class="numberText"><label for="choosedNumber3"><?php echo THIRD_CHOOSED_NUMBER; ?></label></td>
				        	<td class="numberText"><label for="choosedNumber4"><?php echo FOURTH_CHOOSED_NUMBER; ?></label></td>
				         	<td class="numberText"><label for="choosedNumber5"><?php echo FIFTH_CHOOSED_NUMBER; ?></label></td>
				         	<td class="numberText"><label for="choosedNumber6"><?php echo SIXTH_CHOOSED_NUMBER; ?></label></td>
			        	</tr>
             
			            <tr>
				            <td><input type="text" name="choosedNumber1" id="choosedNumber1" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber1'); ?>" /></td>
				            <td><input type="text" name="choosedNumber2" id="choosedNumber2" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber2'); ?>" /></td>
				            <td><input type="text" name="choosedNumber3" id="choosedNumber3" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber3'); ?>" /></td>
				            <td><input type="text" name="choosedNumber4" id="choosedNumber4" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber4'); ?>" /></td>
				            <td><input type="text" name="choosedNumber5" id="choosedNumber5" size="2" class="numberWindow" value="<?php echo $this->getInfo('cNumber5'); ?>" /></td>
				            <td><input type="text" name="choosedNumber6" id="choosedNumber6" size="2"  class="numberWindow" value="<?php echo $this->getInfo('cNumber6'); ?>" /></td>
				        </tr>
            		</table><br>
            
            	<?php //Drawn ?> 
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
				 
					<table align="center">
						<input type="hidden" name="numSubmit">
						<input type="image" class="button" src="/public/img/proceedPl.png"></br>
						<?php 
							$Authorization = new Authorization_m();
							if($Authorization->logStatus() == TRUE)
						{ ?>	
						<label for="choosedNumberCheckbox"><span class="textSaveNumbers" align="left"><?php echo SAVE_CHOOSED_NUMBER; ?></span></label><br>
						<input type="text" name="choosedNumberName" id="choosedNumberName" size="20" class="fieldNumberName" value="<?php echo $this->getInfo('chNumberName'); ?>" />
						<?php } else { ?>
							<span class="textSaveNumbers"><?php echo CHECK_NUMBER; ?></span>
						<?php } ?>
						<td><?php $ColourAlert = $this->getColourAlert();
							if($ColourAlert != '') {echo '<span class="ColourAlert">' . $ColourAlert . '</span>';}?>
						</td>
					</table>
                			
		</form>	 
 
</div>
    