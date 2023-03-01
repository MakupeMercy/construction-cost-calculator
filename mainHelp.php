<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="assets/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="flex-box-mainHelp">
        <div class="flex-box-container-1-main">
            <button id ="button1" onclick="backHome()" class="btn-help">Back</button>
            <h2 id="main-help">main help page</h2><br>
            <p id="main-subtext">Getting started</p>
        </div>
        
        <div class="main-help-text">
            <div class="main-text">
            <p>
               <p id="title-text"> please note:</p> This DreamHouse Build Cost Calculator only <br> gives an estimate of the building cost
                .It is only suitable for <br> use before any detailed plans are made.

            </p>
            <p>
                <p id="title-text">Action 1:</p> Use the calculator setup pageto setup default values and <br>
                parameters as per your project.Click the button below for help with setup.

            </p>
            <button  onclick="setUp()" class="btn-setup"> set up help page</button>
 
            <p>
                <p id="title-text">Action 2:</p> Use the calculator page to calculate the material cost. Click the button <br>
                below to go to the calculator help page. 
            </p>

            <button  onclick="calculator()" class="btn-calculator-help">calculator help page</button>
            </div>
        </div>

    </div>
</body>
<script src="assets/Home.js"></script>
</html>