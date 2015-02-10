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
		<meta charset="utf-8" />
		<title>The Simple Lottery Checker</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
		<meta name="description" content="The Simple Lottery Checker" />
		<meta name="author" content="Andrzej Kałowski" />
		<!-- CSS files -->
		<link rel="stylesheet" href="public/css/bootstrap.min.css" />
		<link rel="stylesheet" href="public/css/animate.css" />
		<link rel="stylesheet" href="public/css/style.css" />
		<link rel="stylesheet" href="public/css/responsive.css" />
		<!-- Andika font -->
		<link href="http://fonts.googleapis.com/css?family=Andika&subset=latin,latin-ext" rel="stylesheet" type="text/css">
	</head>

	<body id="number_i">
		<div class="container-fluid">		
		
			<header id="hdr">
		    	<h4 class="textGreen animated fadeInDown"><?php echo CHECK_OUTCOME; ?></h4>
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
		                               <li class="active" id="number-i"><a href="number_i.php"><?php echo CHECK_M; ?></a></li>
									    <?php if($Authorization->logStatus() == TRUE)
									    { ?>
									    <li id="privacy-i"><a href="privacy_i.php"><?php echo MY_ACCOUNT_M; ?></a></li>	
									    <li id="logout-i"><a href="logout_i.php"><?php echo LOGOUT_M; ?></a></li>
									    <?php } else { ?>
										<li id="login-i"><a href="login_i.php"><?php echo LOGIN_M; ?></a></li>
										<li id="register-i"><a href="register_i.php"><?php echo REGISTER_M; ?></a></li>
										<?php } ?>
		                            </ul>
		                        </div>
		                    </div>
		                </nav>
		            </div>
		        </div>
				<ol class="breadcrumb">
					<li class="active"><a href="number_i.php" class="breadcrumb" data-toggle="tooltip" data-placement="right" title="<?php echo CHECK_NUMBERS; ?>"><span class="glyphicon glyphicon-check"></span><?php echo '&nbsp' . CHECK; ?></a></li>
				</ol>
		    </header>
		
			<section class="row">
				<div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">
					<p align="left"></p>
				</div>

				<div class="col-lg-6 col-md-8 col-sm-10 col-xs-12 tCnt">
					<?php include_once(APP_PATH.FILE_NUMBER); ?>
				</div>
		
				<div class="col-lg-3 col-md-2 col-sm-1 hidden-xs">
					<p align="right"></p>
				</div>
			</section>

			<footer id="footer">	
				<p class="footerLightGreyText"><?php echo INFO;?></p>
				<p class="footerLightGreyText"><?php echo ERRORS;?></p>
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
