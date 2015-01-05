<?php
/*
 * $Id: register_v.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */
?>

<title>Enter the number</title>  
<meta charset="<?php echo CHARSET; ?>">
<link rel="stylesheet" type="text/css" href="/public/css/style.css" />

<div class="main">
		
	<p align="center"><?php echo '<span class="textBrown">' . REGISTER . '</span>'; ?></p>

		<form action="" method="post" id="register">
            
			<div align="center">

				<table class="inmain" border="0" width="100%" cellspacing="0" cellpadding="2">
					<tr>
						<td width="40%"><label for="username" class="leftMain"><?php echo '<span class="textGreyLog">' . USER_NAME . '</span>'; ?></label></td>
						<td width="60%"><input type="text" name="username" id="username" class="num" value="<?php echo $this->getInfo('user'); ?>" /></td>
					</tr>
					<tr>
						<td width="40%"><label for="password" class="leftMain"><?php echo '<span class="textGreyLog">' . PASSWORD . '</span>'; ?></label></td>
						<td width="60%"><input type="password" name="password" id="password" class="num" value="<?php echo $this->getInfo('pass'); ?>" /></td>
					</tr>
					<tr>
						<td width="40%"><label for="password2" class="leftMain"><?php echo '<span class="textGreyLog">' . CONFIRM_PASSWORD . '</span>'; ?></label></td>
						<td width="60%"><input type="password" name="password2" id="password2" class="num" value="<?php echo $this->getInfo('pass2'); ?>" /></td>
					</tr>
					<td>
						<input type="hidden" name="regSubmit">
						<input type="image" class="regSubmit" src="/public/img/registerPl.png">	
					</td>
				</table>
            
				<div>    
					<?php
						$ColourAlert = $this->getColourAlert();
						if($ColourAlert != '') {
						echo '<span class="ColourAlert">' . $ColourAlert . '</span>';
						}
					?>
				</div>
            
			</div>
            
		</form>	 

</div>
    