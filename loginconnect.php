<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');

if(!$conn)
{
	die("connection failed: ".mysqli_connect_error());
}

if(isset($_POST["submit"])){
	 // receive all input values from the form
	 $username = mysqli_real_escape_string($conn, $_POST['username']);
	 $password = mysqli_real_escape_string($conn, $_POST['password']);
	 $_SESSION['status']=false;
	//$user_name= $_POST['user_name'];
	//$user_password=$_POST['user_password'];
	
	//$q='SELECT * FROM user_register where user_name ="'.$user_name.'" and user_password ="'.$user_password.'"';
	
	$q = "SELECT * FROM users WHERE username='$username' and password='$password'";
	
	$r=mysqli_query($conn,$q);
	if(mysqli_num_rows($r)==1)
	{
		
		 $data=['val1'=>$password];
		 $query=http_build_query($data);
		 //header("location:index.php");
		 $_SESSION['username']=$username;
		 $_SESSION['password']=$password;
		 $_SESSION['login_type']="user";
		 $_SESSION['status']=true;
         echo "<script> window.location.href='index.php'; </script>";
		 
		// header('location:disply.php'.(FALSE===empty($query)? '?'.$query:''));
		// exit;
	}
	else{
		//header("location:login.html");
		echo "<script type='text/javascript'>alert('Wrong username or password');window.location.href='login.php';
    </script>";
	}
}

mysqli_close ($conn);
?>