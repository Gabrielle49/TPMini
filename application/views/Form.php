<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact V15</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animate/animate.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/animsition/css/animsition.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.css');?>">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/util.css');?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
<?php echo form_open('home/login'); ?>

	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
			<div class="contact100-form-title" style="background-image: url(images/bg-01.jpg);">
				<span class="contact100-form-title-1">
					Contact Us
				</span>

				<span class="contact100-form-title-2">
					Feel free to drop us a line below!
				</span>
			</div>

			<form class="contact100-form validate-form">
				<div class="wrap-input100 validate-input" data-validate="Name is required">
					<!--<span class="label-input100">Full Name:</span>
					<input class="input100" type="text" name="name" placeholder="Enter full name">
					<span class="focus-input100"></span>-->
				</div>

				<div class="wrap-input100 validate-input" data-validate = "Valid name is required: ex@abc.xyz">
					<span class="label-input100">Username:</span>
					<input class="input100" type="text" name="username" value="Miora" placeholder="Enter username">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input" data-validate="Phone is required">
					<span class="label-input100">Password:</span>
					<input class="input100" type="password" name="password" value="Miora" placeholder="Enter password">
					<span class="focus-input100"></span>
				</div>

				<!--<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<span class="label-input100">Message:</span>
					<textarea class="input100" name="message" placeholder="Your Comment..."></textarea>
					<span class="focus-input100"></span>
				</div>-->

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							Valider
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
				
					<a href="#" style="margin-left:300px">Inscription</a>
				
               
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/animsition/js/animsition.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/popper.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/daterangepicker/moment.min.js');?>"></script>
	<script src="<?php echo base_url('assets/vendor/daterangepicker/daterangepicker.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/vendor/countdowntime/countdowntime.js');?>"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="<?php echo base_url('assets/js/map-custom.js');?>"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url('assets/js/main1.js')?>"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>

</body>
</html>
