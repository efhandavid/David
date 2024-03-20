<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['pass'])
    && isset($_POST['email']) && isset($_POST['cpass'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['pass']);

	$re_pass = validate($_POST['cpass']);
	$email = validate($_POST['email']);

	$user_data = 'uname='. $uname. '&name='. $email;

	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];

	if (empty($uname)) {
		header("Location: reg.php?error=User User name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: reg.php?error=Password is required&$user_data");
	    exit();
	}
	else if(empty($re_pass)){
        header("Location: reg.php?error=Password is required&$user_data");
	    exit();
	}

	else if(empty($email)){
        header("Location: reg.php?error=Email is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: reg.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM user WHERE username='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: reg.php?error=The username is taken try another&$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO user(username, password, Lastname, First_name, Middle_name, email) VALUES('$uname', '$pass', '$lname', '$mname', '$mname', '$email')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: reg.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: reg.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: reg.php");
	exit();
}