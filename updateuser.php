<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
        $id=$_POST['id'];
        $name=$_POST['name'];
        $username=$_POST['username'];
        $email=$_POST['email'];
   
        $photo=$_FILES['photo']['name']; //Get image name
  
        $target="image/".basename($photo);
// Establish Connection with MYSQL
$conn = mysqli_connect("localhost","root","","studentmanagement");
// Select Database

// Specify the query to Update Record
$sql= "UPDATE `users` SET `name`='".$name."', `username`='".$username."', `email`='".$email."', `photo`='".$photo."' WHERE id=".$id."" ;
// Execute query
$update=mysqli_query($conn,$sql);
if($update)
{
    echo "<script type='text/javascript'>alert('Profile Updated Succesfully');window.location.href='alluser.php?page=1';</script>";
}
else
{
    echo "<script type='text/javascript'>alert('Failed To Update Profile');window.location.href='alluser.php?page=1';</script>";
}
if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
    echo "<script type='text/javascript'>alert('Profile Updated Succesfully');window.location.href='alluser.php?page=1';</script>";

}else{
echo "<script type='text/javascript'>alert('Failed To Update Profile');window.location.href='alluser.php?page=1';</script>";
    
}
// Close The Connection
mysqli_close($conn);

?>
</body>
</body>
</html>