<?php
    include_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to DreamHouse Company Portal</title>
<link rel="stylesheet" href ="assets/home.css">



</head>
<body>

<div class="flex-box-mainHelp">

        <div class="flex-box-container-1-main">

        <div class="logo">
        <img
          src="assets/images/house.png"
          alt="logo"
          height="60px"
          ;width="60px"
        />
        <h4>Best initial estimates for your dream home</h4>
      </div>
           
            <h2 id="main-help">DreamHouse Build Cost Estimator</h2><br>
            <p id="main-subtext">Getting started</p>
        </div>
<div class="signup-form" style="height: 50rem;">
    <form action="register.php" style="margin-left:30%"method="post">
		<h2 style="color:peru">Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			
			<input style="width:170px; height:40px"type="text" class="form-control" name="first_name" placeholder="First Name" required="required">
				
			        	
        </div>
        <div class="form-group">
            <input style="width:170px; height:40px" type="text" class="form-control" name="last_name" placeholder="Last Name" required="required">
        </div>
        
        <div class="form-group">
        	<input type="email" style="width:170px; height:40px" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" style="width:170px; height:40px" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <input type="password" style="width:170px; height:40px" class="form-control" name="cpass" placeholder="Confirm Password" required="required">
        </div>
               
        
		<div class="form-group">
            <button type="submit" style="width:100px;height:45px;border-radius:4px;margin-left:0%" name="save" class="register">Register</button>
            <button type="reset" name="reset" class="reset">Reset</button>
        </div>
        <div class="text-center" >Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>
<?php  include_once "footer.php"?>
</body>
</html>