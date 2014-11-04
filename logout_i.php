<?php
/*
 * $Id: logout_i.php, v 1.0
 * The Simple Lottery Checker
 * Copyright (c) 2014 Andrzej Kałowski
 * http://lotek.kalowski.com
 */
 ?>
 
<?php include_once("app/init.php"); ?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title>Lotek</title>
		<meta name="description" content="">
		<meta name="author" content="Andrzej Kałowski">
		<meta name="viewport" content="width=device-width; initial-scale=1.0">
		<link rel="shortcut icon" href="/favicon.ico">
		<link rel="stylesheet" type="text/css" href="public/css/style.css" >
	</head>

<body id="logout_i">

	<div id="wrap">
 	
 			<?php //<!--header--> ?>
  				<div id="header">
   					<div class="pg2">
      					<p align="center"><?php echo '<span class="textGreen">' . CHECK_OUTCOME . '</span>'; ?></p>
   					</div>
  				</div>
  				
  			<?php //start navigation bar ?>
              <table border="0" cellspacing="0" cellpadding="0" align="center">
                <td width="100%" align="center">
					<ul id="nav">
					    <li id="number-i"><a href="number_i.php"><?php echo CHECK_M; ?></a></li>
					    <?php if($Authorization->logStatus() == TRUE)
					    { ?>
					    <li id="logout-i"><a href="logout_i.php"><?php echo LOGOUT_M; ?></a></li>	
					    <li id="privacy-i"><a href="privacy_i.php"><?php echo MY_ACCOUNT_M; ?></a></li>	
					    <?php } else { ?>
						<li id="login-i"><a href="login_i.php"><?php echo LOGIN_M; ?></a></li>
						<li id="register-i"><a href="register_i.php"><?php echo REGISTER_M; ?></a></li>
						<?php } ?>
					</ul>
                </td>
              </table>       
			<?php //end navigation bar ?>

			<?php //<!-- center--> ?>
			<?php //<!-- main-body--> ?>		
  				<div id="main-body">
   					<div id="content">
    					<div id="box">
    						<?php include(APP_PATH.FILE_LOGOUT); ?>
    					</div>
   					</div>
   					
  				</div>
  				<?php //<!-- /main-body end--> ?>
	
  				<div id="footer">
   					<div align="center" id="textGrey">
   						<span class="textLightGrey"><?php echo INFO;?></span>
   						<P class="textLightGrey"><?php echo ERRORS;?></P>
      				<?php //<!--&copy; Copyright by Andrzej Kałowski--> ?>
   					</div>	
  				</div>
 	
 		</div> 
		<?php //<!-- /wrap end--> ?>
	</body>
</html>
