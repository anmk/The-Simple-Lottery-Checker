<?php
/*
 * $Id: login_v.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */
?>

<div class="container-fluid">
	<form action="" method="post" id="login" role="form" class="form-horizontal">		
		<section class="row tCnt">
			<div class="hidden-lg col-md-1 col-sm-2 col-xs-2">
			</div>

			<div class="col-lg-12 col-md-10 col-sm-8 col-xs-8">
				<div class="emptySpaceXH"></div>
				
				<div class="row">
					<div class="form-group">
						<label for="username" class="col-lg-3 col-md-3 col-sm-3 control-label"><span class="greyLogText tL"><?php $Languages = new Languages_m($_SESSION['lng']); echo '<span class="textGreyLog">' . $Languages->translator('LOGIN') . '</span>'; ?></span></label>
						<div class="col-lg-9 col-md-9 col-sm-9">
							<input type="text"  name="username" id="username" class="form-control fieldText" placeholder="<?php echo $Languages->translator('LOG'); ?>" value="<?php echo $this->getInfo('user'); ?>" />
						</div>
					</div>
				</div>

				<div class="row">
					<div class="form-group">
						<label for="password" class="col-lg-3 col-md-3 col-sm-3 control-label"><span class="greyLogText tL"><?php echo '<span class="textGreyLog">' . $Languages->translator('PASSWORD') . '</span>'; ?></span></label>
						<div class="col-lg-9 col-md-9 col-sm-9">
							<input type="password"  name="password" id="password" class="form-control fieldText" placeholder="<?php echo $Languages->translator('PASSWORD'); ?>" value="<?php echo $this->getInfo('pass'); ?>" />
						</div>
					</div>
				</div>

				<div clas="row">
					<div id="buttons" class="form-group">
						<div class="col-lg-3 col-md-3 col-sm-3 control-label"></div>
						<div class="col-lg-9 col-md-9 col-sm-9">
							<button type="submit" name="logSubmit" class="btn btn-default btn-lg btn-block" data-toggle="tooltip" data-placement="bottom" title="<?php echo $Languages->translator('CHECK_NUMBER'); ?>"><?php echo '<span class="textGrey">' . $Languages->translator('LOG_IN') . '</span>'; ?></button>
						</div>
					</div>  
				</div>	

			</div>

			<div class="hidden-lg col-md-1 col-sm-2 col-xs-2">
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
	<div class="tCnt visible-xs"><span class="glyphicon glyphicon-phone"></span></div>
</div>
