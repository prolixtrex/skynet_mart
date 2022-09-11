	$first_name = trim($_POST['first_name']); //$_REQUEST is used when you dont know if the front end is using post or get.
		$middle_name = trim($_POST['middle_name']);
		$last_name = trim($_POST['last_name']);
		$confirm_password = trim($_POST['confirm_password']);
		$date_of_birth = trim($_POST['date_of_birth']);
		$gender = trim($_POST['gender']);
		$address = trim($_POST['address']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
		$city = trim($_POST['city']);
		$state = trim($_POST['state']);
		$postal_code = trim($_POST['postal_code']);
		//$hobbies = trim($_POST['hobbies']);

		if (!empty(trim($_POST['middle_name']))) {
			$middle_name = trim($_POST['middle_name']);
		} else{
			$middle_name ="";
		} 



		//CONNECTING TO DATABASE UPLOADING TO DATABASE
		/* if (isset($_POST['submit'])) {
			extract($_POST);  
			*/

		//Email validation
		$email_err = ""; //declare email variable and initialize with empty value
		if (isset($email)) {
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$email = $email;
				return true;
			} else {
				$email_err = "Please enter a valid email";
				return false;
			}
		}

		$sql = "INSERT INTO `users` (`first_name`, `last_name`, `middle_name`, `date_of_birth`, `gender`)
		VALUES ('$first_name', '$last_name', '$middle_name', '$date_of_birth', '$gender')";

		$sql = "INSERT INTO `contacts` (`address`, `phone`, `email`, `city`, `state`, `postal_code`)
		VALUES ('$address', '$phone', '$email', '$city', '$state', '$postal_code')";
		

		/* if ($conn -> query($sql) === TRUE) {
			header('Location: profile.php');
		} else {
			echo "Error: ".$sql. "<br\>" .$conn -> error;
		}  */