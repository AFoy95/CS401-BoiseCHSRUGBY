<?php
 require '../php_Classes/Dao.php';
 session_start();
 $dao=new Dao();
 $conn=$dao->getConnection();
 $email = $_POST['email'];
 $password = $_POST['password'];
	if($dao->get_User_email($email) && $dao->get_User_pass || $_SESSION['logged_in']){
		header('Location: https://boisechsrugby.herokuapp.com/');
		$_SESSION['isadmin']= false;
		$_SESSION['logged_in'] = true;
		exit;
	}
	$_SESSION['message'] = "Invalid Username and/or Password";
	$_SESSION['logged_in']=false;
	header('Location: https://boisechsrugby.herokuapp.com/php/User_Pages/UserSign_Up.php');
	exit;