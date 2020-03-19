<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600%7CUbuntu:300,400,500,700" rel="stylesheet"> 

	<!-- CSS -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/jquery.mCustomScrollbar.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/nouislider.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/plyr.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/photoswipe.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/default-skin.css">
	<link rel="stylesheet" href="<?php echo base_url();?>css/main.css">

	<!-- Favicons -->
	<link rel="icon" type="image/png" href="<?php echo base_url();?>icon/digivive.png" sizes="32x32">
	<link rel="apple-touch-icon" href="<?php echo base_url();?>icon/digivive.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url();?>icon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url();?>icon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url();?>icon/apple-touch-icon-144x144.png">

	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="Dmitry Volkov">
	<title>Onboarding Entertainment Solution</title>

</head>
<body class="body">

	<div class="sign section--bg">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="sign__content">
						<!-- authorization form -->
						<form action="<?php echo base_url();?>user/login" method="post" class="sign__form">
							<a href="<?php echo base_url();?>user/signup" class="sign__logo">
								<img src="<?php echo base_url();?>img/oes-logo.svg" alt="" class="img-logo">
							</a>

							<div class="sign__group">
								<input type="text" class="sign__input" placeholder="Username" name="username" id="username" required>
							</div>

							<div class="sign__group">
								<input type="password" class="sign__input" placeholder="Password"name="password" id="password" required >
							</div>

							<div class="sign__group sign__group--checkbox">
								<input id="remember" name="remember" type="checkbox" checked="checked">
								<label for="remember">Remember Me</label>
							</div>
							
							<button class="sign__btn" type="submit">Sign in</a></button>

							<span class="sign__text">Don't have an account? <a href="<?php echo base_url();?>user/signup">Sign up!</a></span>

							<span class="sign__text"><a href="#">Forgot password?</a></span>
						</form>
						<!-- end authorization form -->
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- JS -->
	<script src="<?php echo base_url();?>js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.bundle.min.js"></script>
	<script src="<?php echo base_url();?>js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.mousewheel.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.mCustomScrollbar.min.js"></script>
	<script src="<?php echo base_url();?>js/wNumb.js"></script>
	<script src="<?php echo base_url();?>js/nouislider.min.js"></script>
	<script src="<?php echo base_url();?>js/plyr.min.js"></script>
	<script src="<?php echo base_url();?>js/jquery.morelines.min.js"></script>
	<script src="<?php echo base_url();?>js/photoswipe.min.js"></script>
	<script src="<?php echo base_url();?>js/photoswipe-ui-default.min.js"></script>
	<script src="<?php echo base_url();?>js/main.js"></script>
</body>

</html>