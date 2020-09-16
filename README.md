# Form Validation in PHP
**step : 1**
* put all the input tag in form tag
**step : 2**
* if you uploade a file than add * enctype multiple/form-data *
**step : 3**
* add name attr in all input filed
**step : 4**
* add method in form tag
**step :  5**
* isset setting

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
	 }
**step :  6**
* work on empty folder

	if (empty($name) || empty($email) || empty($user) || empty($text) || empty($password) || empty($cell) || empty($age)) {

			 		$msg = "<h6 class='alert alert-danger' style='color: #000; font-size:12px;' > Field must be required <button class='close' data-dismiss='alert'>&times;</button></h6>";

			 	}
**step :  7**
* email validation

	if(filter_var($email, FILTER_VALIDATE_EMAIL) == False){

			 		$email_valid = "<p style='font-size:11px; padding: 5px 0px; color: #f64f59 ;'>Enter a valid Email Address (ex@gmail.com) </p>";

			 	}
**step :  8**
* file uploaded
![file uploaded][/assets/media/img/img.JPG]
			 	

