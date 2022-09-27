<?php ?>
<html>
    <head> 
        <title>Register Page</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    
        <div class="signup-box" style="transform: translate(-90%,-60%);">
            <h1>Register Here</h1>
            <form id="register-form" action="signupconnect.php" method="post" enctype="multipart/form-data" >
                <table cellpadding="5px"  align="center" border="1px solid #4caf50"  style="align-content:center;width:600px;  line-height:30px; margin:none;">
                    <tr>
                        <td><label style= "color: #4caf50; font-size: 15px;">Enter Name :</label></td>
                        <td><div class="text-box" style="border: none;">
                            
                            <input style= "font-size: 15px;" type="text" name="name" id="name"  placeholder="Please Enter Name" autofocus autocomplete="off"/><br />
                            <!-- <span id="uname" style="color:red;font-weight:bold;"></span> -->
                        </div></td>
                    </tr>
                    <tr>
                        <td><label style= "color: #4caf50; font-size: 15px;">Enter User Name :</label></td>
                        <td><div class="text-box" style="border: none;">
                            <input style= "font-size: 15px;" type="text" name="username" id="username"  placeholder="Please Enter User Name" autocomplete="off"/><br/>
                            <!-- <span id="uuser" style="color:red;font-weight:bold;"></span>-->
                        </div></td>
                    </tr>
                    <tr>
                        <td><label style= "color: #4caf50; font-size: 15px;">Enter Email :</label></td>
                        <td><div class="text-box" style="border: none;">
                            
                            <input style= "font-size: 15px;" type="email" name="email" id="email"  placeholder="please Enter Email" autocomplete="off"/><br/>
                            <!-- <span id="uemail" style="color:red;font-weight:bold;"></span> -->
                        </div></td>
                    </tr>
                    <tr>
                        <td><label style= "color: #4caf50; font-size: 15px;">Enter Password :</label></td>
                        <td><div class="text-box" style="border: none;">
                            
                            <input style= "font-size: 15px;"type="password" name="password" id="pass"  placeholder="Please Enter Password" autocomplete="off"/><br/>
                            <!-- <span id="upass" style="color:red;font-weight:bold;"></span> -->
                        </div></td>
                    </tr>
                    <tr>
                        <td><label style= "color: #4caf50; font-size: 15px;">Confirm Password :</label></td>
                        <td><div class="text-box" style="border:none;">
                            
                            <input style= "font-size: 15px;" type="Password" name="repassword" id="rpass"  placeholder="Confirm Password" autocomplete="off"/><br/>
                            <!-- <span id="ucpass" style="color:red;font-weight:bold;"></span> -->
                        </div></td>
                    </tr>
                    <tr>
                        <td><label style= "color: #4caf50; font-size: 15px;">Choose Your Photo :</label></td>
                        <td><div class="text-box" style="border:none;" >
                            <input style= "font-size: 15px;" type="file" name="photo" id="photo"  /><br/><br/>
                            <!-- <span id="uphoto" style="color:red;font-weight:bold;"></span> -->
                        </div></td>
                    </tr>
                    <tr >
                        <td colspan="2" >
                            <input class="btn" style="width:100px; margin-left:40%;background-color: #4caf50; color: white;border: 2px solid #4caf50;box-shadow: 2px 2px black; border-radius:15px; font-weight: bolder;" type="submit" value=" Submit " name="submit"/>
                        </td>
                    </tr>
                    
                </table>
                <p style= "transform: translate(50%,0);color: #4caf50; font-size: 20px;">Already a member? <a style="font-size: 20px;" href="login.php">Sign in</a></p>
            </form>
        </div> 
    </body>
</html>

<!-- required="required" -->