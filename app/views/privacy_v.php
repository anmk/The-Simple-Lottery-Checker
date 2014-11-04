<?php
/*
 * $Id: privacy_v.php, v 1.0
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */
?>

<title>Privacy</title>
<meta charset="utf-8">
<link rel = "stylesheet" type = "text/css" href = "/public/css/style.css" />
			
	<div class="main">
	<p align="center"><?php echo '<span class="textBrown">' . MY_ACCOUNT . '</span>'; ?></p>

		<form action="" method="post" id="login">
           
            <div class="main" align="center">
            	
            	<table class="inmain" border="0" width="100%" cellspacing="0" cellpadding="2">
						
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
                  
</body>
</html>

