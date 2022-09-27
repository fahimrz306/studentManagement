<?php

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
if(!$conn)
{
	die("connection failed: ".mysqli_connect_error());
}

session_start();

$errors = array(); 


// REGISTER USER
if (isset($_POST['submit'])) {
 
  // receive all input values from the form
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $cpassword = mysqli_real_escape_string($conn, $_POST['repassword']);
  
  $photo=$_FILES['photo']['name']; //Get image name
  //$photo_text= mysqli_real_escape_string($conn,$_POST['photo_text']);//Get imnage text
  $target="image/".basename($photo);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($username)) { array_push($errors, "User Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
   //checking valid password
  
  if ($cpassword != $password) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($photo)) { array_push($errors, "Picture is required"); }

  $user_check_query = "SELECT * FROM users WHERE `username`='$username' OR `email`='$email' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      echo"<script type='text/javascript'> alert ('Username already exists');</script>";
      array_push($errors, "Username already exists");
      echo "<script type='text/javascript'>window.location.href='signup.php';</script>";
    }

    if ($user['email'] === $email) {
      echo"<script type='text/javascript'> alert ( 'Email already exists');</script>";
      array_push($errors, "email already exists");
      echo "<script type='text/javascript'>window.location.href='signup.php';</script>";
    }

  }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) 
  {
  	// if(strlen($username)>7)
    // {
    //   if(strlen($password)>7)
    //   {
          $query = "INSERT INTO users ( `name`, `username`, `email`, `password`, `photo` ) 
          VALUES('$name', '$username', '$email','$password','$photo')";
          mysqli_query($conn, $query);
    
          if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) 
          {
            echo "<script type='text/javascript'>alert('New Record Inserted');</script>";
          }
          else
          {
            echo "<script type='text/javascript'>alert('Failed to insert new record');</script>";
          }
    //   }
    //   else
    //   {
    //     echo "<script type='text/javascript'>alert('Password should be atleast 8 character');window.location.href='signup.php';
    //     </script>";
    //   }
    // }
    // else
    // {
    //   echo "<script type='text/javascript'>alert('User Name should be atleast 8 character');window.location.href='signup.php';
    //     </script>";
    // }

	  header('location:login.php');
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	
  }
}
