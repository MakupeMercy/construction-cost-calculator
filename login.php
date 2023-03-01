
<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="assets/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

   
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
  
<div class="flex-box-container-login">

<div class="signup-form" style="margin-left: 34%;">
    <form action="dblogin.php" method="post" enctype="multipart/form-data">
		<h2 style="color:peru">Login</h2>
		<p class="hint-text">Enter Login Details</p>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="pass" placeholder="Password" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="sign-in" class="sign-in">Login</button>
            <button type="reset" name="reset" class="reset">Reset</button>
        </div>
        <div class="text-center">Don't have an account? <a href="regDbConnect.php">Register Here</a></div>
    </form>
</div>
</div>
<?php
    include 'footer.php'
?>
</body>
<script src="assets/Home.js"></script>
</html>