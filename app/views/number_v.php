<?php
/*
 * $Id: number_v.php, v 1.0
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */
?>

    <title>Enter the number</title>  
    <meta charset="<?php echo CHARSET; ?>">
    <link rel="stylesheet" type="text/css" href="/public/css/style.css" />
    
	<div class="main">
	<p align="center"><?php echo '<span class="textBrown">' . CHECK . '</span>'; ?></p>
	
		<form action="" method="post" id="number">         	
  				<?php //<!--Selected--> ?>
  				<span class="textGrey" align="center"><?php echo ENTER_CHOOSED_NUMBER; ?></span>
  			
	            	<table align="center">
	            
	            		<tr align="left">
				        	<td class="textGrey" align="left"><label for="choosedNumber1"><?php echo FIRST_CHOOSED_NUMBER; ?></label></td>
				            <td class="textGrey" align="left"><label for="choosedNumber2"><?php echo SECOND_CHOOSED_NUMBER; ?></label></td>
				          	<td class="textGrey" align="left"><label for="choosedNumber3"><?php echo THIRD_CHOOSED_NUMBER; ?></label></td>
				        	<td class="textGrey" align="left"><label for="choosedNumber4"><?php echo FOURTH_CHOOSED_NUMBER; ?></label></td>
				         	<td class="textGrey" align="left"><label for="choosedNumber5"><?php echo FIFTH_CHOOSED_NUMBER; ?></label></td>
				         	<td class="textGrey" align="left"><label for="choosedNumber6"><?php echo SIXTH_CHOOSED_NUMBER; ?></label></td>
			        	</tr>
             
			            <tr align="left">
				            <td><input type="textGrey"  name="choosedNumber1" id="choosedNumber1" size="2" align="left" class="num" value="<?php echo $this->getInfo('cNumber1'); ?>" /></td>
				            <td><input type="textGrey"  name="choosedNumber2" id="choosedNumber2" size="2" align="left" class="num" value="<?php echo $this->getInfo('cNumber2'); ?>" /></td>
				            <td><input type="textGrey"  name="choosedNumber3" id="choosedNumber3" size="2" align="left" class="num" value="<?php echo $this->getInfo('cNumber3'); ?>" /></td>
				            <td><input type="textGrey"  name="choosedNumber4" id="choosedNumber4" size="2" align="left" class="num" value="<?php echo $this->getInfo('cNumber4'); ?>" /></td>
				            <td><input type="textGrey"  name="choosedNumber5" id="choosedNumber5" size="2" align="left" class="num" value="<?php echo $this->getInfo('cNumber5'); ?>" /></td>
				            <td><input type="textGrey"  name="choosedNumber6" id="choosedNumber6" size="2" align="left" class="num" value="<?php echo $this->getInfo('cNumber6'); ?>" /></td>
				        </tr>
            		</table><br>
            
            	<?php //<!--Randomized--> ?> 
            	<span class="textGrey"><?php echo ENTER_DRAWN_NUMBER; ?></span>     
        			
        			<table align="center">
        				
        				<tr align="left">
		        			<td class="textGrey" align="left"><label for="drawnNumber1"><?php echo FIRST_DRAWN_NUMBER; ?></label></td>  
		        			<td class="textGrey" align="left"><label for="drawnNumber1"><?php echo SECOND_DRAWN_NUMBER; ?></label></td>
		        			<td class="textGrey" align="left"><label for="drawnNumber1"><?php echo THIRD_DRAWN_NUMBER; ?></label></td>
		        			<td class="textGrey" align="left"><label for="drawnNumber1"><?php echo FOURTH_DRAWN_NUMBER; ?></label></td>
		        			<td class="textGrey" align="left"><label for="drawnNumber1"><?php echo FIFTH_DRAWN_NUMBER; ?></label></td>
		        			<td class="textGrey" align="left"><label for="drawnNumber1"><?php echo SIXTH_DRAWN_NUMBER; ?></label></td>      	
		        		</tr>
        	
            			<tr align="left">
				            <td><input type="textGrey"  name="drawnNumber1" id="drawnNumber1" size="2" align="left" class="num" value="<?php echo $this->getInfo('dNumber1'); ?>" /></td>
				            <td><input type="textGrey"  name="drawnNumber2" id="drawnNumber2" size="2" align="left" class="num" value="<?php echo $this->getInfo('dNumber2'); ?>" /></td>
				            <td><input type="textGrey"  name="drawnNumber3" id="drawnNumber3" size="2" align="left" class="num" value="<?php echo $this->getInfo('dNumber3'); ?>" /></td>
				            <td><input type="textGrey"  name="drawnNumber4" id="drawnNumber4" size="2" align="left" class="num" value="<?php echo $this->getInfo('dNumber4'); ?>" /></td>
				            <td><input type="textGrey"  name="drawnNumber5" id="drawnNumber5" size="2" align="left" class="num" value="<?php echo $this->getInfo('dNumber5'); ?>" /></td>
				            <td><input type="textGrey"  name="drawnNumber6" id="drawnNumber6" size="2" align="left" class="num" value="<?php echo $this->getInfo('dNumber6'); ?>" /></td>
				        </tr>
				    </table>
			
            			<tr><p><input type="submit"  name="numSubmit" class="button" value="<?php echo CHECK; ?>"/></p></tr>
            			<tr><td><?php $ColourAlert = $this->getColourAlert();
								if($ColourAlert != '') {echo '<span class="ColourAlert">' . $ColourAlert . '</span>';}?></td></tr>
            			
        </form>	 
 
    </div>
    