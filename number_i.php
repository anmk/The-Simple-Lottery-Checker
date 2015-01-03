<?php
/*
 * $Id: number_i.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
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
		<link rel="stylesheet" type="text/css" href="/public/css/style.css" >
		
	</head>

<body id="number_i">

<?php // header ?>
<div id="header">
	<p align="center"><?php echo '<span class="textGreen">' . CHECK_OUTCOME . '</span>'; ?></p>
</div>
			
<div id="wrap">
	
	<?php //start navigation bar ?>
	<table border="0" cellspacing="0" cellpadding="0" align="center"><td>
		<ul id="menu">
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
    </td></table>       
	<?php // end navigation bar ?>

	<?php // main-body ?>	
	<div id="main-body">
		<div id="content">
			<div id="box">
				<?php include_once(APP_PATH.FILE_NUMBER); ?>
			</div>
		</div>
	</div>
	<?php // main-body end ?>
</div>
<?php // wrap end ?>

<?php // footer ?>
<div id="footer">
	<div align="center" id="textGrey">
		<span class="textLightGrey"><?php echo INFO;?></span>
		<p class="textLightGrey"><?php echo ERRORS;?></p>
	</div>	
</div>
 	
</body>
</html>
