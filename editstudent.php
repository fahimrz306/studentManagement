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

    $sql = "select * from student_info where `id` ='".$id."'  ";
    
    $result = mysqli_query($conn,$sql);
    
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css">
 
<title>Edit Student</title>
</head>

<body>
<div class="mainContainer">
    <div class="signup-box" style="transform: translate(-50%,0%);">
        <h1 style="transform: translate(-15%,0%);font-size: 30px; Margin-top:30px;color:white;">Edit Information</h1>

        <form id="edit" action="Updatestudent.php" method="POST" enctype="multipart/form-data">

            <span style="margin:none; margin-left:70px; padding:5px;"> <?php echo "<img style='height:120px;width:120px; border:5px solid #4caf50;' src='image/".$row['photo']."'>";?></span><br><p></p>
            <label style= "color: white; font-size: 12px;">Choose Your Photo </label>
            <div style="border: none; " class="text-box">
                <input type="file" name="photo" id="photo" required="required" /><br/>
            </div>
            <label style= "color: white; font-size: 12px;">Student Name</label>
            <div style="border: 1px solid #4caf50; color: white;" class="text-box">
                
                <input style="color: white;" type="text" name="name" id="name"  placeholder="Enter Name" value="<?php echo $row['name']; ?>" /><br />
            </div>
            <label style= "color: white; font-size: 12px;">Student Roll</label>
            <div style="border: 1px solid #4caf50; color:white;" class="text-box">
                
                <input style="color: white;" type="text" name="roll" id="roll"  placeholder="Enter Roll" value="<?php echo $row['roll']; ?>"/><br/>
            </div>
            <label style= "color: white; font-size: 12px;">Student Class</label>
            <div style="border: 1px solid #4caf50; color:white;" class="text-box">
            
                <input style="color: white;" type="text" name="class" id="class" placeholder="Enter Class" value="<?php echo $row['class']; ?>"/><br/>
            </div>
            <label style= "color: white; font-size: 12px;">Student Address</label>
            <div style="border: 1px solid #4caf50; color:white;" class="text-box">
            
                <input style="color: white;" type="text" name="city" id="city" placeholder="Enter Address" value="<?php echo $row['city']; ?>"/><br/>
            </div>
            <label style= "color: white; font-size: 12px;">Student Contact</label>
            <div style="border: 1px solid #4caf50; color:white;" class="text-box">
            
                <input style="color: white;" type="text" name="contact" id="contact" placeholder="Enter Contact Number" value="<?php echo $row['contact']; ?>"/><br/>
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
