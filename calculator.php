<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/home.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="flex-box-calculator">
        <div class="flex-box-container-1-calc">
            <button onclick=calcBack() id="calculator-btn" class="btn-calc">Back</button> 
            <h2 id="main-help">Calculator help page</h2><br>
            <p id="main-subtext">How to use the calculator</p>

        </div>

        <div class="main-calc-text">
            <div class="calc-text">
            <p>
               <p id="title-text"> To use the calculator page</p> simply set the wall settings, column settings and 
               steel settings by typing the dimensions </br> in meter as per your preference. The wall setting is for 
               getting the dimension of the wall you want </br> to calculate materials(i.e brick, cement and sand) needed to build it.
               <br>The column setings is for calculating the(cement, sand, steel, and aggregate) that will be used in the <br>
               beams and columns of the house.<br> The steel setting is to get the dimension of the steel to help in calculating
               the above mentioned building materials.
        

            </p>
            <p>
                <p id="title-text">Material cost calculations</p> This will automatically displayed once the above forms 
                have been set.<br> This will be the summation of the Base Cost and the cost of all the materials.

            </p>
            

            <p>
                <p id="title-text">Use the setup Menu</p> (accessible in the startCalculation page) to change the underlying values
                used to estimate <br> the cost of construction.
            </p>

            <p>
                <p id="title-text">Rules</p> below are the rules built into by this buld cost calculator:</br>
                (1)if the project is renovation or addition add Ksh 1000 to the per Base cost <br> 
                (2)If the site is "fair", and the project type is 'new building, add 7% to <br>
                the per base cost. <br>
                (3)If the site is "difficult", and the project type is new building, and 20% to the per Base  cost. <br>
                (4)if the quality of finishes is 'starndad', add $300 to the per Base cost. <br>
                (5)if the quality of fineshes is 'high', add $600 to the per Base cost. <br>
                



            </p>



            </div>
        </div>
    </div>
</body>
<script src="assets/Home.js"></script>
</html>