
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="assets/home.css">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php
        include "header.php";
    ?>
</head>
<body >

    <div class="flex-box-container-1-home">
        <button id="btn-1" onclick="startCalculation()" class="btn btn-warning btn-lg" >Start Calculate</button>

        
    </div>
    <div class="container-2-main">

        <div class="row">
            <div class="col-sm-2">
                <button type="button" class="btn-2" id="btn-2-2"><a href="savedcalculations.php" style="color:white"> saved <br> Calculations</a></button>
                <button type="button" class="btn-3" id="btn-3-1"> HELP</button>
            </div>

            <div class="col-sm-2">
                <button type="button"  onclick="" class="btn-3" id="btn-3-2">Info</button>
            </div>
        </div>
    </div>

    <?php
   
       

    
    ?>

</body>
<script src="assets/Home.js"></script>

<?php require_once 'footer.php' ?>
</html>