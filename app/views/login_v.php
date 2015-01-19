<?php
/*
 * $Id: login_v.php, v 1.1
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
		<p class ="textBrown"><?php echo LOGIN; ?></p>
	</header>
	
	<section class="main">
		
		<form action="" method="post" id="login"> 
        	<article>
				<table class="inmain" border="0" width="100%" cellspacing="0" cellpadding="2">
					<tr>
						<td width="40%"><label for="username" class="leftMain"><span class=""><?php echo '<span class="textGreyLog">' . LOGIN . '</span>'; ?></span></label></td>
						<td width="60%"><input type="text"  name="username" id="username" class="num" value="<?php echo $this->getInfo('user'); ?>" /></td>
					</tr>
					<tr>
						<td width="40%"><label for="password" class="leftMain"><span><?php echo '<span class="textGreyLog">' . PASSWORD . '</span>'; ?></span></label></td>
						<td width="60%"><input type="password" name="password" id="password" class="num" value="<?php echo $this->getInfo('pass'); ?>" /></td>
					</tr>
	               
					<td>
						<input type="hidden" name="logSubmit">
						<input type="image" class="logSubmit" src="/public/img/loginPl.png">	  
					</td>
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
    