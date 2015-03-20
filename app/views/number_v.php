<?php
/*
 * $Id: number_v.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */
?>

<div id="number_v" class="container-fluid">
	<form action="" method="post" id="numSubmit">
		<!-- Chosen Numbers-->
		<div class="emptySpaceH"></div>
		<?php $Languages = new Languages_m($_SESSION['lng']); if ($_SESSION['visibility'] == true) { ?>
			<h5><?php echo $Languages->translator('ENTER_CHOSEN_NUMBER'); ?></h5>
		<?php } else if ($_SESSION['visibility'] == false) { ?>
			<h5 class="numberLoadGreenText"><?php echo $Languages->translator('SAVED_CHOSEN_NUMBER'); ?></h5>
		<?php } ?>
			<div class="emptySpaceH"></div>
				<section class="form-group row">	
						
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">	
						<div class="numberText"><label for="chosenNumber1"><?php echo $Languages->translator('FIRST_CHOSEN_NUMBER'); ?></label></div>
						<div><input type="text" name="chosenNumber1" id="chosenNumber1" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('I_Chosen'); ?>" value="<?php echo $this->getInfo('cNumber1'); ?>" /></div>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="chosenNumber2"><?php echo $Languages->translator('SECOND_CHOSEN_NUMBER'); ?></label></div>
						<div><input type="text" name="chosenNumber2" id="chosenNumber2" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('II_Chosen'); ?>" value="<?php echo $this->getInfo('cNumber2'); ?>" /></div>
					</div>
					
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="chosenNumber3"><?php echo $Languages->translator('THIRD_CHOSEN_NUMBER'); ?></label></div>
						<div><input type="text" name="chosenNumber3" id="chosenNumber3" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('III_Chosen'); ?>" value="<?php echo $this->getInfo('cNumber3'); ?>" /></div>
					</div>

					<div class="visible-xs emptySpaceH"></div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="chosenNumber4"><?php echo $Languages->translator('FOURTH_CHOSEN_NUMBER'); ?></label></div>
						<div><input type="text" name="chosenNumber4" id="chosenNumber4" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('IV_Chosen'); ?>" value="<?php echo $this->getInfo('cNumber4'); ?>" /></div>
					</div>
					
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="chosenNumber5"><?php echo $Languages->translator('FIFTH_CHOSEN_NUMBER'); ?></label></div>
						<div><input type="text" name="chosenNumber5" id="chosenNumber5" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('V_Chosen'); ?>" value="<?php echo $this->getInfo('cNumber5'); ?>" /></div>
					</div>
					
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="chosenNumber6"><?php echo $Languages->translator('SIXTH_CHOSEN_NUMBER'); ?></label></div>
						<div><input type="text" name="chosenNumber6" id="chosenNumber6"  class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('VI_Chosen'); ?>" value="<?php echo $this->getInfo('cNumber6'); ?>" /></div>
					</div>
				</section>

			<!-- Drawn Numbers -->
			<div class="emptySpaceH"></div>
			
			<h5><?php echo $Languages->translator('ENTER_DRAWN_NUMBER'); ?></h5>
			<div class="emptySpaceH"></div>    
				<section class="row">
					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="drawnNumber1"><?php echo $Languages->translator('FIRST_DRAWN_NUMBER'); ?></label></div>
						<div><input type="text" name="drawnNumber1" id="drawnNumber1" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('I_Drawn'); ?>" value="<?php echo $this->getInfo('dNumber1'); ?>" /></div> 
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="drawnNumber1"><?php echo $Languages->translator('SECOND_DRAWN_NUMBER'); ?></label></div>
						<div><input type="text" name="drawnNumber2" id="drawnNumber2" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('II_Drawn'); ?>" value="<?php echo $this->getInfo('dNumber2'); ?>" /></div>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="drawnNumber1"><?php echo $Languages->translator('THIRD_DRAWN_NUMBER'); ?></label></div>
						<div><input type="text" name="drawnNumber3" id="drawnNumber3" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('III_Drawn'); ?>" value="<?php echo $this->getInfo('dNumber3'); ?>" /></div>
					</div>

					<div class="visible-xs emptySpaceH"></div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="drawnNumber1"><?php echo $Languages->translator('FOURTH_DRAWN_NUMBER'); ?></label></div>
						<div><input type="text" name="drawnNumber4" id="drawnNumber4" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('IV_Drawn'); ?>" value="<?php echo $this->getInfo('dNumber4'); ?>" /></div>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="drawnNumber1"><?php echo $Languages->translator('FIFTH_DRAWN_NUMBER'); ?></label></div>
						<div><input type="text" name="drawnNumber5" id="drawnNumber5" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('V_Drawn'); ?>" value="<?php echo $this->getInfo('dNumber5'); ?>" /></div>
					</div>

					<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4">
						<div class="numberText"><label for="drawnNumber1"><?php echo $Languages->translator('SIXTH_DRAWN_NUMBER'); ?></label></div>
						<div><input type="text" name="drawnNumber6" id="drawnNumber6" class="form-control numberFieldText" placeholder="<?php echo $Languages->translator('VI_Drawn'); ?>" value="<?php echo $this->getInfo('dNumber6'); ?>" /></div>     	
					</div>
				</section>
			
				<div class="emptySpaceH"></div>

				<section id="checkNumbers" class="row">		
						<div id="buttons">
							<?php 
								$Authorization = new Authorization_m();
								if($Authorization->logStatus() == TRUE)
							{ ?>
								<button type="submit" name="numSubmit" class="btn btn-default btn-lg btn-block" data-toggle="tooltip" data-placement="bottom" title="<?php echo $Languages->translator('VIEW_RESULT'); ?>"><?php echo '<span class="">' . $Languages->translator('PROCEED') . '</span>'; ?></button>
							<?php } else { ?>
								<button type="submit" name="numSubmit" class="btn btn-default btn-lg btn-block" data-toggle="tooltip" data-placement="bottom" title="<?php echo $Languages->translator('VIEW_RESULT_LOG'); ?>"><?php echo '<span class="">' . $Languages->translator('PROCEED') . '</span>'; ?></button>
							<?php } ?>
						</div>
						
						<div class="emptySpaceH"></div>

						<div class="form-group">
							<?php 
								if($Authorization->logStatus() == TRUE)
							{ ?>

								<div class="emptySpaceH"></div>
									<label for="chosenNumberCheckbox"><h5 class="numberSaveText"><?php echo $Languages->translator('SAVE_CHOSEN_NUMBER'); ?></h5></label>
								<div class="emptySpaceH"></div>

								<div class="col-xl-2 col-md-2 col-sm-2 hidden-xs">
								</div>

								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
									<input type="text" name="chosenNumberName" id="chosenNumberName" class="form-control numberSaveText" placeholder="<?php echo $Languages->translator('SAVE_CHOSEN_NUMBER_HERE'); ?>" value="<?php echo $this->getInfo('chNumberName'); ?>" />
								</div>
								
								<div class="col-xl-2 col-md-2 col-sm-2 hidden-xs">
								</div>

							<?php } else { ?>
								<div class="visible-xs emptySpaceH">
									<span class="numberSaveText"><?php echo $Languages->translator('CHECK_NUMBER'); ?></span>
								</div>	
							<?php } ?>	
						</div>
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
	<div class="tCnt visible-xs emptySpace"><span class="glyphicon glyphicon-phone"></span></div>
</div>
