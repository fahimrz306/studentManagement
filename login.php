<?php ?>
<html>
   <head>
        <title>Login Page</title>
	    <link rel="stylesheet" href="css/style.css">
   </head>
   <body> 
    <div class="login-box">
       <h1>Login</h1>
	   <form action="loginconnect.php" method="post" enctype="multipart/form-data">
	        <div style= "font-size: 20px;" class="text-box"> 
                <i class="bi bi-person-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                <input type="text" name="username" placeholder="Enter Username" required="required" value="" autofocus autocomplete="off"> </br>
            </div>
			<div style= "font-size: 20px;" class="text-box">
                <i class="bi bi-lock-fill"></i><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                </svg>
                <input type="password"  name="password" placeholder="Enter Password" required="required" value="" autocomplete="off"> </br>
            </div>
            
			
			
			<!-- <input class="btn" style="box-shadow: 1px 1px black; border-radius:15px; ;border: 2px solid black;width:100px; margin-left:27%;margin-top:5px;" type="submit" name="submit" value="Sign in"> </br> -->
            <input class="btn" style="width:100px;margin-top:5px; margin-left:27%;background-color: #4caf50; color: white;border: 2px solid #4caf50;box-shadow: 2px 2px black; border-radius:15px; font-weight: bolder;" type="submit" value=" Sign in " name="submit"/>
            <p></p>
            <p style= "color: #4caf50; font-size: 17px;">Don't have an account? <a style="margin-left: 16%;font-size: 17px;"  href="signup.php">Register</a> </p>
			<br>
			
	   </form>

   </body>
</html>
