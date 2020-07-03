<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	require_once("db.php");

	if (!$db) {
	  die("Connection failed: " . mysqli_connect_error());
	}

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { $name_req = "Username is required"; array_push($errors, $name_req); }
		if (empty($email)) { $email_req = "Email is required"; array_push($errors, $email_req); }
		if (empty($password_1)) { $password_req = "Password is required"; array_push($errors, $password_req); }

		$sql_u = "SELECT * FROM users WHERE username='$username'";
  	$sql_e = "SELECT * FROM users WHERE email='$email'";
  	$res_u = mysqli_query($db, $sql_u);
		$res_e = mysqli_query($db, $sql_e);
		
		if (mysqli_num_rows($res_u) > 0) {
			$name_error = "Sorry, username already taken";
  	}else if(mysqli_num_rows($res_e) > 0){
			$email_error = "Sorry, email already taken";
		}else{
			if ($password_1 != $password_2) {
				$matching_error = "The two passwords do not match";
				array_push($errors, $matching_error);
			} else if(count($errors) == 0) {
				// register user if there are no errors in the form
				$password = md5($password_1);//encrypt the password before saving in the database
				$query = "INSERT INTO users (username, email, password) 
							VALUES('$username', '$email', '$password')";
				mysqli_query($db, $query);

				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in";
				header('location: index1.php');
			}
		}			
	}

	// ... 

	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) { $name_req = "Username is required"; array_push($errors, $name_req); }
		if (empty($password)) { $password_req = "Password is required"; array_push($errors, $password_req); }

		if (count($errors) == 0) {
			if($username === "admin" && $password === "admin") {
				$password = md5($password);
				$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
				$results = mysqli_query($db, $query);

				if (mysqli_num_rows($results) == 1) {
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "You are now logged in";
					header('location: admin.php');
				}else {
					$wrong_login = "Wrong username/password combination";
					array_push($errors, $wrong_login);
				}
				
			} else {
				$password = md5($password);
				$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
				$results = mysqli_query($db, $query);

				if (mysqli_num_rows($results) == 1) {
					$_SESSION['username'] = $username;
					$_SESSION['success'] = "You are now logged in";
					header('location: index1.php');
				}else {
					$wrong_login = "Wrong username/password combination";
					array_push($errors, $wrong_login);
				}
			}
		}
	}

	// EDIT USER
	if (isset($_POST['edit_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$id = mysqli_real_escape_string($db, $_POST['id']);

		$query = "UPDATE users SET username='$username', email='$email' WHERE id='$id'";
		$results = mysqli_query($db, $query);
		header('location: admin.php');
	}
?>