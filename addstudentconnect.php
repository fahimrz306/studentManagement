<?php

// connect to the database
$conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');
if(!$conn)
{
	die("connection failed: ".mysqli_connect_error());
}

session_start();

$errors = array(); 


// REGISTER student
if (isset($_POST['add'])) {
    
 
  // receive all input values from the form
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $roll = mysqli_real_escape_string($conn, $_POST['roll']);
  $class = mysqli_real_escape_string($conn, $_POST['class']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $contact = mysqli_real_escape_string($conn, $_POST['contact']);
  //$photo= mysqli_real_escape_string($conn,$_POST['photo']);
  
  $photo=$_FILES['photo']['name']; //Get image name
  //$photo_text= mysqli_real_escape_string($conn,$_POST['photo_text']);//Get imnage text
  $target="image/".basename($photo);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($roll)) { array_push($errors, "Roll is required"); }
  if (empty($class)) { array_push($errors, "Class is required"); }
  if (empty($city)) { array_push($errors, "city is required"); }
  if (empty($contact)) { array_push($errors, "Contact is required"); }
  if (empty($photo)) { array_push($errors, "Picture is required"); }
  
  $user_check_query = "SELECT * FROM student_info WHERE `roll`='$roll' AND `class`='$class' LIMIT 1";
  $result = mysqli_query($conn, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['roll'] === $roll && $user['class'] === $class) {
      echo"<script type='text/javascript'> alert ('Student with same roll number already exists in the class');</script>";
      array_push($errors, "Student with same roll exists");
      echo "<script type='text/javascript'>window.location.href='addstudent.php';</script>";
    }
  }

  // Finally, register student if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO student_info ( `name`, `roll`, `class`, `city`, `contact`, `photo` ) 
  			  VALUES('$name', '$roll', '$class', '$city','$contact','$photo')";
  	mysqli_query($conn, $query);

    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
  		echo "<script type='text/javascript'>alert('Student uploaded successfully');</script>";
      
  	}else{
      echo "<script type='text/javascript'>alert('Failed to upload image');</script>";
  		
  	}
    
    //echo"<script type='text/javascript'> alert ('Student Added Successfully');</script>";
	//header('location:addstudent.php');
    echo "<script type='text/javascript'>window.location.href='addstudent.php';</script>";
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "Student Added Successfully";
  }
}
