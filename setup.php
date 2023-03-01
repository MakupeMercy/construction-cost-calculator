<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href ="assets/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="flex-box-calculator">
        <div class="flex-box-container-1-calc">
            <button  onclick="setBack()" id="btn-setup"class="btn-calc">Back</button> 
            <h2 id="main-help">Set-up help Menu</h2><br>
            <p id="main-subtext">How to set-up the calculator</p>

        </div>

        <div class="main-calc-text">
            <div class="calc-text">
            <p>
               <p id="title-text"> Step1: Select a project type.</p> Select the kind of project
               you want to work with. <br> It can be either new or renovation.  
            </p>
            <p>
                <p id="title-text">Step 2: Select site conditions.</p> Flat/level blocks are of course the easiest 
                to build on <br> and if this is the case select "good", unless the blocks has water drinage 
                or other complications, <br> in this case select "difficult". Steeply sloped properties should be also 
                be marked difficult. <br> Note that selecting the renovatios does not change the per-square-meter cost;
                it is assumed this is <br> already factored into calculator by doubling the base rate.
                

            </p>
            

            <p>
                <p id="title-text">Step 3: Select quality of finishes</p> This refers to the quality of materials 
                to be used for the construction like blocks "grade A" etc. <br> Selecting "basic" you are implying
                 that you will be buying materials <br> that is of higher cost than quality or style. Selecting 
                 "starndard" implies that <br> quality is important as cost. If you select "high" you are 
                 implying that  style and quality are imprtant than cost.
            </p>
            <p>
               <p id="title-text"> Optional</p>Fill in realistic values for your wall setting, column settings and steel settings. We assume that 
               the contractors have knowledge on this.   
            </p>

            

           



            </div>
        </div>
    </div>
</body>
<script src="assets/Home.js"></script>
</html>