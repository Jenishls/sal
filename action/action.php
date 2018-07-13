<?php
	require '../user.php';

	$usr = new user();
	
	/**
	*
	*	Register
	*
	*	*/
	if(isset($_POST['register'])){
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];

		$usr->setFname($fname);
		$usr->setLname($lname);
		$usr->setUsername($username);
		$usr->setEmail($email);
		$usr->setPassword($password);

		if($usr->AddUser()){
		  session_start();
			$_SESSION['permission']="granted";
            $_SESSION['username']= $username;
            $_SESSION['type']= "User";
            header("location:../home.php");
		}
		else
		{
			echo "Registration Failed!!!";
		}
	}

	/**
	*
	*	Login
	*
	*	*/
	if(isset($_POST['login'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$usr->setUsername($username);
		$usr->setPassword($password);

		$dt = $usr->Login();
			if(count($dt)==1){
        session_start();
        $un=$dt[0]['Username'];
        $tp=$dt[0]['Type'];
        $_SESSION['permission']="granted";
        $_SESSION['username']= $un;
        $_SESSION['type']= $tp;
        header("location:../home.php");
      }
      else
      {
      	header('location:../login.php?msg=login-error');
      }
		

	}