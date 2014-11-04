<?php
/*
 * $Id: login_v.php, v 1.0
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */
?>

<title>Enter the number</title>  
<meta charset="<?php echo CHARSET; ?>">
<link rel="stylesheet" type="text/css" href="/public/css/style.css" />
    
<div class="main">
	<p align="center"><?php echo '<span class="textBrown">' . LOGIN . '</span>'; ?></p>

		<form action="" method="post" id="login">
           
            <div class="main" align="center">
            	
            	<table class="inmain" border="0" width="100%" cellspacing="0" cellpadding="2">
						<tr>
						   	<td class="" align="left" width="30%"><label for="username"><span class=""><?php echo '<span class="textGreyLog">' . LOGIN . '</span>'; ?></span></label></td>
		                	<td class="" align="left" width="70%"><input type="text"  name="username" id="username" class="num" value="<?php echo $this->getInfo('user'); ?>" /></td>
		                </tr>
		                <tr>
		                    <td class="" align="left"><label for="password"><span><?php echo '<span class="textGreyLog">' . PASSWORD . '</span>'; ?></span></label></td>
		                    <td class="" align="left"><input type="password"  name="password" id="password" class="num" value="<?php echo $this->getInfo('pass'); ?>" /></td>
		                </tr>
		               
		                <td>
                			<input type="submit"  name="logSubmit" class="logSubmit" value="<?php echo LOGIN; ?>"/>
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
    