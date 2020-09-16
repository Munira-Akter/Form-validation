<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<style>
		
		.card{
			position: relative;
			background: #0B0101;
			color: #eee;
		}

		.card input{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			color: #fff !important; 
			font-size: 12px;
		}.card input:focus{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}.card textarea{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			width: 450px;
			resize: none;
			color: #fff !important;
			font-size: 12px;
		}.card textarea:focus{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			width: 450px;
			resize: none;
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
		.card input[type="submit"]{
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: #fff;
			padding: 10px 30px;

		}

		.card label{
           background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
           -webkit-text-fill-color : transparent;
           -webkit-background-clip: text;
           text-shadow: 0px 0px 2px rgba(0,0,0,0.5);
           font-weight: lighter;
           font-size:12px;
		}
.card-body h1{
           background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
           -webkit-text-fill-color : transparent;
           -webkit-background-clip: text;
           text-shadow: 0px 0px 2px rgba(0,0,0,0.5);
           font-weight: lighter;
           font-size:12px;
		}

		.card::after{
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			position: absolute;
			top: -2px;
			left: -2px;
			bottom: -2px;
			right: -2px;
			content: '';
			z-index: -2;
			filter: blur(40px);


		}
		.card::before{
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			position: absolute;
			top: -2px;
			left: -2px;
			bottom: -2px;
			right: -2px;
			content: '';
			z-index: -1;
			filter: blur(2px);


		}

	</style>
</head>
<body>
	

	<div class="wrap shadow">
		<div class="card">
			<?php

			 /** 
			 * For isseting 
			 */

			 if (isset($_POST['add'])) {
			 	$name = $_POST['name'];
			 	$email = $_POST['email'];
			 	$age = $_POST['age'];
			 	$cell = $_POST['cell'];
			 	$text = $_POST['text'];
			 	$user = $_POST['user'];
			 	$password = $_POST['password'];
			 	$url = $_POST['url'];
			 	$reg = $_POST['reg'];

			 	/** 
				 * For cell validation
				 */


				$cell_len = strlen($cell);

			 	
				/** 
					 * For password validation
				 */



			 	if (strlen ($password) >= 8) {
			 		$pass_valid = true;
			 	}else{
			 		$pass_valid = false;
			 	}

				/** 
				 * For age validation
				 */



			 	if ($age >= 20 && $age <= 70) {
			 		$age_valid = true;
			 	}else{
			 		$age_valid = false;
			 	}

			 	/** 
				 * For image validation
				 */


			 	$file_name = $_FILES['profile']['name'];
			 	$file_size = $_FILES['profile']['size'];
			 	$file_tmp_name = $_FILES['profile']['tmp_name'];
			 	$file_type = $_FILES['profile']['type'];


			 	/** 
				 * For image unique file name
				 */


			 	$unique_file_name = md5(time() . rand()) . $file_name;

			 	/** 
				 * For image upload in folder
				 */


			 	move_uploaded_file($file_tmp_name, 'photos/' . $unique_file_name);


			 	/** 
				 * For empty and incorrect field
				 */


			 	if (empty($name) || empty($email) || empty($user) || empty($text) || empty($password) || empty($cell) || empty($age)) {

			 		$msg = "<h6 class='alert alert-danger' style='color: #000; font-size:12px;' > Field must be required <button class='close' data-dismiss='alert'>&times;</button></h6>";

			 	}if(filter_var($email, FILTER_VALIDATE_EMAIL) == False){

			 		$email_valid = "<p style='font-size:11px; padding: 5px 0px; color: #f64f59 ;'>Enter a valid Email Address (ex@gmail.com) </p>";

			 	}if($cell_len !=11){

			 		$cell_validation = "<p style='font-size:11px; padding: 5px 0px; color: #f64f59 ;'>Enter  11 digit Phone Number </p>";

			 	}if(filter_var($reg , FILTER_VALIDATE_INT) == false){

			 		$reg_validation = "<p style='font-size:11px; padding: 5px 0px; color: #f64f59 ;'>Enter  your correct Registration number </p>";

			 	}if(filter_var($url , FILTER_VALIDATE_URL) == false){

			 		$url_validation = "<p style='font-size:11px; padding: 5px 0px; color: #f64f59 ;'>Enter your protfolio link  </p>";

			 	}if($pass_valid == false){

			 		$pass_validation = "<p style='font-size:11px; padding: 5px 0px; color: #f64f59 ;'>Enter 8 digit strong password with (A-Z , a-z , 1-9 and symbol)  </p>";

			 	}if($age_valid == false){

			 		$age_validation = "<p style='font-size:11px; padding: 5px 0px; color: #f64f59 ;'>sorry,  your age is not supported</p>";

			 	}else{
			 		$msg = "<h6 class='alert alert-info'> Thanks for submit ! <button class='close' data-dismiss='alert'>&times;</button></h6>";
			 	}
					



			}








			?>
			<div class="card-body">
				<h2>Sign Up</h2>
				<?php

				if (isset($msg)) {
					echo $msg;
				}

				?>
				<form action="" method="post" enctype="multipart/form-data">
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<label for="">Regitration Number</label>
						<input class="form-control" type="text" name="reg">
						<?php

						if (isset($reg_validation)) {
							echo $reg_validation;
						}

						?>
					</div>
					<div class="form-group">
						<label for="">Protfolio link</label>
						<input class="form-control" type="text" name="url">
						<?php

						if (isset($url_validation)) {
							echo $url_validation;
						}

						?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="text" name="email">
						<?php

						if (isset($email_valid)) {
							echo $email_valid;
						}

						?>
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" type="text" name="cell">
						<?php

						if (isset($cell_validation)) {
							echo $cell_validation;
						}

						?>
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" type="text" name="user">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input class="form-control" type="password" name="password">
						<?php

						if (isset($pass_validation)) {
							echo $pass_validation;
						}

						?>
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input class="form-control" type="text" name="age">
							<?php

						if (isset($age_validation)) {
							echo $age_validation;
						}

						?>
					</div>
					<div class="form-group">
						<label for="">Profile Picture</label>
						<input class="form-control" type="file" name="profile">
					</div>
					<div class="form-group">
						<label for="">Massage</label> <br>
						<textarea col="6" height="30px" name="text"></textarea>
					</div>
					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up" name="add">
					</div>
				</form>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>