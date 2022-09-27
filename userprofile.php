<!-- ?id=$rows[id]&name=$rows[name]&username=$rows[username]&email=$rows[email]&photo=$rows[photo]"?> -->
<?php
	session_start();
	$conn = mysqli_connect('localhost', 'root', '', 'studentmanagement');

	if(!$conn)
	{
		die("connection failed: ".mysqli_connect_error());
	}
	if ( $_SESSION['status']!=true)
	{
		echo "<script type='text/javascript'>window.location.href='login.php';</script>";
	}
    $sql = "select * from users where `username` ='".$_SESSION['username']."'  ";
    
    $result = mysqli_query($conn,$sql);
 
    $row = mysqli_fetch_array($result);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all"/>
    <title>Dashboard</title>
</head>
<body>

		
    <!--main container/wrapper start from here-->
		<div class="mainContainer">
            
			<!--main header start from here-->
			<div class="headerContainer">
                
				<a href="index.php"><img id="logo"src="image/logo.png"/></a>
				<img id="banner"src="image/Banner.jpg"/></a>

			</div>
			<!-- header ends here-->

			<!--navigation bar start from here-->
			<div class="menubar"> 
			 
				<ul id="menu">
					
					<li> <a href="index.php"><i class="bi bi-house-door-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
 					<path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5z"/>
					</svg> Home</a></li>
					
					<li> <a href="userprofile.php"><i class="bi bi-person-circle"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  					<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  					<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
					</svg> User Profile</a></li>
                    
					<li> <a href="searchstudent.php"><i class="bi bi-search"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
  					<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
					</svg> Search Student</a></li>
                    
					<li style=" width:110px; padding:2px;float: right; line-height:40px;margin-right:2px;" > <a style=" border-radius: 5px; margin:auto; color:black;  background-color: yellowgreen; border:3px black;"href="logout.php"><i class="bi bi-box-arrow-right"></i>
    				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
  					<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
  					<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
					</svg> Logout</a></li>
                </ul>
                
			</div>
			<p class="hrline"><p></p>
			<!--navigation bar ends  here-->

			<!-- content_wrapper start from here-->
			<div class="content_wrapper">
			
				<div class="sidebar">
					<p class="hrline" style="width: 170px;"></p>
					<ul class="sidebarul">
						<li><a href="addstudent.php" ><i class="bi bi-person-plus-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-plus-fill" viewBox="0 0 16 16">
 						<path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
  						<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
						</svg> Add Student</a></li>

						<li><a href="allstudent.php?page=1" ><i class="bi bi-people-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
						<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
						<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
						<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
						</svg> All Students</a></li>

						<li><a href="alluser.php?page=1" ><i class="bi bi-people-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-people-fill" viewBox="0 0 16 16">
  						<path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
 						<path fill-rule="evenodd" d="M5.216 14A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216z"/>
  						<path d="M4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
						</svg>    All Users</a></li>

						<li><a href="userprofile.php" ><i class="bi bi-person-circle"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  						<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  						<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
						</svg> User Profile</a></li>
					</ul>
					<p></p>
				</div>

			</div>
			<!-- content_wrapper ends  here-->

            <div class="content_area">
                
                <div class="userprofile">
                    <table align="center" border="1px solid #4caf50"  style="width:500px;  line-height:30px;">
                        <tr>
                            <th colspan="2"><h1 style="margin-left:27%;"><i class="bi bi-person-circle"></i><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                            </svg> Profile of <?php echo $_SESSION[ 'username'];?> <h1></th>
                        </tr>
                        <tr>
                            <th colspan="2"><span style="margin:none; margin-left:5px; padding:5px;padding-top:15px;"> <?php echo "<img style='height:170px;width:170px;  border:5px solid #4caf50;' src='image/".$row['photo']."'>";?></span><br><p></p></th>
                        </tr>
                        <form id="addstudentform" action=<?php echo"edituserprofile.php?id=$row[id]&name=$row[name]&username=$row[username]&email=$row[email]&photo=$row[photo]"?> method="post" enctype="multipart/form-data">

                        <tr>
                            <td><label>Name</label></td>
                            <td><?php echo $row['name'] ?></td>
                        </tr>
                        <tr>
                            <td><label>User Name</label></td>
                            <td><?php echo $row['username'] ?></td>
                        </tr>
                        <tr>
                            <td><label>Email</label></td>
                            <td><?php echo $row['email'] ?></td>
                        </tr>
                        <tr>
                            <td><label>Password</label></td>
                            <td><?php echo $row['password'] ?></td>
                        </tr>

                        <tr>
                            
                            <td colspan="2">
                                <input style="margin-left: 120px;"class="btn-addstudent"  type="submit" value="Edit" name="edit"/><br />
                            </td>
                        </tr>
                        </form>
                        
                    </table> 
                    
                </div> 
          
        </div>
            
            <!-- footer start from here-->	
			<div id="footer">
			<p class="hrline"><p></p>
				<h2 style="text-align: center;padding-top: 30px;">&copy;2021 by www.studentmanagement.com </h2>
			</div>
			<p class="hrline"><p></p>
</body>

</html>

