<?php
/*
 * $Id: privacy_i.php, v 1.1
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */
 ?>

<?php include_once("app/init.php"); ?>
<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>The Simple Lottery Checker</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width; initial-scale=1.0" />
		<meta name="description" content="The Simple Lottery Checker" />
		<meta name="author" content="Andrzej Kałowski" />
		<link rel="stylesheet" href="public/css/style.css" />
	</head>

<body id="privacy_i">

	<div id="wrap">
		
		<header>
			<p class ="textGreen"><?php echo CHECK_OUTCOME; ?></p>
			<nav>
			    <table border="0" cellspacing="0" cellpadding="0" align="center">
			        <td width="100%" align="center">
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
			        </td>
			    </table>
		    </nav>       
		</header>
			
		<section id="main-body">
			<article id="content">
				<aside id="box">
					<?php include_once(APP_PATH.FILE_PRIVACY); ?>
				</aside>
			</article>
		</section> <?php // main-body end ?>
	
		<footer id="footer">	
			<p class="textLightGrey"><?php echo INFO;?></p>
			<p class="textLightGrey"><?php echo ERRORS;?></p>
		</footer>
 	
	</div> <?php // wrap end ?>
 		
</body>
</html>
