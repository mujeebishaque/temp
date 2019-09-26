<?php if ( $_POST['create_user'] )  {

		$user_id = $_POST["user_id"];
		$email = $_POST["email"];
		$contact = $_POST["contact"];
		$password = $_POST["password"];
		$dob = $_POST["dob"];
		$Gender = $_POST["Gender"];
	
		if ( empty($user_id) || empty($email) || empty($contact) || empty($password) || empty($dob) )   {
			array_push($ERRORS, "Field is empty");
		}
		
		$sql = "INSERT INTO user (user_id, email, password, dob, gender)
			VALUES('$user_id', '$email','$password','$dob','$Gender')";
	
	if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
	} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
} ?>

	<?php if ( $_POST['login'] )  {
		$is_validated = false;
		$username = $_POST['username'];
		$password = $_POST['password'];
		$ERRORS = [];
		$MESSAGES = [];
		if ( strlen($username) < 6 || strlen($password) < 4 )  {
			array_push($ERRORS, "Length Of Username Or Password in Less.");
		}
		if ( empty($username) || empty($password) )  {
			array_push($ERRORS, "Field is empty");
		}
		if (is_int($username))  {
			array_push($ERRORS, "Name cannot be integer");
		}

		$sql = "SELECT * FROM user WHERE user_name = $username OR user_id = $username OR email = $username AND password = $password";
		$result = mysqli_query($connection, $sql);
		if ( $result )  {
			array_push($MESSAGES, "SUCCESS: Welcome Back !");
		}else  {
			array_push($ERRORS, "ERROR: ");
		}
	} ?>
 