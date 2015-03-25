<?php
/*
 * $Id: logout_i.php, v 1.2
 * The Simple Lottery Checker
 * @author Andrzej Kałowski
 * @link http://lotek.kalowski.com
 */

include_once("app/init.php");
if (!isset($_SESSION['lng'])) $_SESSION['lng'] = 'Pl';
?>

<!DOCTYPE html>
<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<title>The Simple Lottery Checker</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="description" content="The Simple Lottery Checker" />
		<meta name="author" content="Andrzej Kałowski" />
		<!-- CSS files -->
		<link rel="stylesheet" href="public/css/bootstrap.min.css" media="screen" />
		<link rel="stylesheet" href="public/css/animate.css" media="screen" />
		<link rel="stylesheet" href="public/css/style.css" media="screen" />
		<link rel="stylesheet" href="public/css/responsive.css" media="screen" />
		<!-- Andika font -->
		<link href="http://fonts.googleapis.com/css?family=Andika&subset=latin,latin-ext" rel="stylesheet" type="text/css">
	</head>

	<body id="logout_i">
		<div id ="ln">
			<span class="emptySpaceW"></span><span class=lang-control><?php $Languages->selectLanguage(); ?></span><span class="emptySpaceW"></span>
			<span class="glyphicon glyphicon-flag lang-control"></span><span class="lang-control"><?php echo '&nbsp' . $_SESSION['lng']; ?></span>
		</div>
		<h4 class="textGreen animated fadeInDown"><?php $Languages = new Languages_m($_SESSION['lng']); echo $Languages->translator('CHECK_OUTCOME'); ?></h4>

		<div class="container-fluid">
			<header id="hdr">
				<div id="menu" class="navbar-fixed-top container-fluid">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<nav class="navbar navbar-default" role="navigation">
							<div class="container-fluid">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#imp">
										<span class="sr-only">navi</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse" id="imp">
									<ul class="nav navbar-nav">
										<li id="number-i"><a href="number_i.php"><?php echo $Languages->translator('CHECK_M'); ?></a></li>
										<?php if($Authorization->logStatus() == TRUE)
										{ ?>
										<li id="privacy-i"><a href="privacy_i.php"><?php echo $Languages->translator('MY_ACCOUNT_M'); ?></a></li>	
										<li class="active" id="logout-i"><a href="logout_i.php"><?php echo $Languages->translator('LOGOUT_M'); ?></a></li>
										<?php } else { ?>
										<li id="login-i"><a href="login_i.php"><?php echo $Languages->translator('LOGIN_M'); ?></a></li>
										<li id="register-i"><a href="register_i.php"><?php echo $Languages->translator('REGISTER_M'); ?></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
				<ol class="breadcrumb">
					<li class="active">
						<a href="logout_i.php" class="breadcrumb"><span class="glyphicon glyphicon-log-out"></span><?php echo $Languages->translator('LOGOUT_M'); ?></a>
					</li>
				</ol>
			</header>
	
			<section class="row">
				<div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">
					<p align="left"></p>
				</div>

				<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 tCnt">
				<?php include(APP_PATH.FILE_LOGOUT); ?>
			</div>
		
				<div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">
					<p align="right"></p>
				</div>
			</section>

			<footer id="footer">	
				<p class="footerLightGreyText"><?php echo $Languages->translator('INFO');?></p>
				<p class="footerLightGreyText"><?php echo $Languages->translator('ERRORS');?></p>
			</footer>
		</div>

		<!-- javascript -->
		<script src="public/js/jquery-1.11.2.min.js"></script>
		<script src="public/js/bootstrap.min.js"></script>

		<script>
			$(function () {
			$('[data-toggle="tooltip"]').tooltip()
			})
		</script>

	</body>
</html>