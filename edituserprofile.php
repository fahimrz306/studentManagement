<?php
    session_start();
    // Establish Connection with Database
    $conn = mysqli_connect("localhost","root","","studentmanagement");

    if(!$conn)
	{
		die("connection failed: ".mysqli_connect_error());
	}
	if ( $_SESSION['status']!=true)
	{
		echo "<script type='text/javascript'>window.location.href='login.php';</script>";
	}
	
    $id=$_GET['id'];

    $sql = "select * from users where `id` ='".$id."'  ";
    
    $result = mysqli_query($conn,$sql);
    
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css">
 
<title>Edit User</title>
</head>

<body>
<div class="mainContainer">
    <div class="signup-box" style="transform: translate(-50%,-3%);">
        <h1 style="transform: translate(-15%,0%);font-size: 30px; Margin-top:30px;">Edit Information</h1>

        <form id="edit" action="Updateuserprofile.php" method="POST" enctype="multipart/form-data">

            <span style="margin:none; margin-left:50px; padding:5px;"> <?php echo "<img style='height:170px;width:170px; border:5px solid #4caf50;' src='image/".$row['photo']."'>";?></span><br><p></p>
            <!-- <label style= "color: white; font-size: 12px;">Choose Your Photo </label>
            <div style="border: none; " class="text-box">
                <input type="file" name="photo" id="photo" required="required" /><br/>
            </div> -->
            <label style= "color: white; font-size: 12px;">Name</label>
            <div style="border: 1px solid #4caf50; color: white;" class="text-box">
                
                <input style="color: white;" type="text" name="name" id="name"  placeholder="Enter Name" value="<?php echo $row['name']; ?>" /><br />
            </div>
            <label style= "color: white; font-size: 12px;">User Name</label>
            <div style="border: 1px solid #4caf50; color:white;" class="text-box">
                
                <input style="color: white;" type="text" name="username" id="username"  placeholder="Enter Username" value="<?php echo $row['username']; ?>"/><br/>
            </div>
            <label style= "color: white; font-size: 12px;">Email</label>
            <div style="border: 1px solid #4caf50; color:white;" class="text-box">
            
                <input style="color: white;" type="text" name="email" id="email" placeholder="Enter Email" value="<?php echo $row['email']; ?>"/><br/>
            </div>

            <label style= "color: white; font-size: 12px;">Password</label>
            <div style="border: 1px solid #4caf50; color:white;" class="text-box">
            
                <input style="color: white;" type="text" name="password" id="password" placeholder="Enter Password" value="<?php echo $row['password']; ?>"/><br/>
            </div>
            
            <input class="btn" style="background-color: #F53121; color: white;border: 2px solid #F53121;box-shadow: 2px 2px black; border-radius:15px; font-weight: bolder;" type="submit" value=" Update " name="update"/><br />
            
            <!-- <label>Student ID <label style="color:red;"> (Do not Change the ID !)</label></label> -->
            <div style="border: none;" class="text-box">
                
                <input style="color: white;" type="hidden" name="id" id="id"  placeholder="Enter ID" value="<?php echo $row['id']; ?>" /><br />
            </div>

        </form>
    </div> 
</div>

</body>
</html>
