
 

<?php
 header("refresh:5; url=startCalculation.php");
require_once 'connection.php';


// ===== SETTING CALCULATOR =====


if(isset($_POST['save_select'])){

    $type = $_POST['type'];
    $quality = $_POST['quality'];
    $conditions = $_POST['conditions'];
    $totalCost;
    
    $_SESSION['mycost'] = 0;

    if ($type == "" && $quality == "" && $conditions == ""){
        $_SESSION['error'] = "Setting Calculator Required";
        $_SESSION['mytotalcost'] = 0;
    
        header("Location: startCalculation.php");
        // Validating the inputs if empty, no value should be processed on submit
    }else {
        if ($type == 'New'){
            $Normal_costPerSqMeter=632.4;
            $CostPerSqMeter= $Normal_costPerSqMeter;
    
            
            $_SESSION['mycost'] = $CostPerSqMeter;
    
        } 
        
        if ($type == 'New' && $conditions =='Fair'){
            $Normal_costPerSqMeter=632.4;
            $CostPerSqMeter= $Normal_costPerSqMeter+(0.07* $Normal_costPerSqMeter);
    
            
            $_SESSION['mycost'] = $CostPerSqMeter;
        } 
        if($type == 'Renovation'){
            $Normal_costPerSqMeter=632.4;
            $CostPerSqMeter= $Normal_costPerSqMeter+1000;
    
            
            $_SESSION['mycost'] = $CostPerSqMeter;
        }
    
        if($type == 'New' && $conditions =='Difficult'){
            $Normal_costPerSqMeter=632.4;
            $CostPerSqMeter= $Normal_costPerSqMeter+(0.02 * $Normal_costPerSqMeter);
    
            
            $_SESSION['mycost'] = $CostPerSqMeter;
        }
    
        if($quality == 'Standard'){
            $Normal_costPerSqMeter=632.4;
            $CostPerSqMeter= $Normal_costPerSqMeter+ 300;
            $_SESSION['mycost'] = $CostPerSqMeter;
        }
    
        if($quality == 'High'){
            $Normal_costPerSqMeter=632.4;
            $CostPerSqMeter= $Normal_costPerSqMeter+ 600;
            $_SESSION['mycost'] = $CostPerSqMeter;
        }

// insert the selected values to db
        $query = "INSERT INTO calc_fields (type, quality, conditions, costPerSqrMeter) VALUES ('$type', '$quality', '$conditions', '$CostPerSqMeter')";
        $query_db = mysqli_query($dbconn, $query);
    
    // show error if connection not succeed
        if($query_db){
            $_SESSION['status'] = "Set! Now Calculate!";
            $_SESSION['mytotalcost'] = 0;
                header("Location: startCalculation.php");
    
        }else {
            $_SESSION['status'] = "Oops!Something's wrong!";
            header("Location: startCalculation.php");
        }
    }
    
    // ===== END SETTING CALCULATOR =====
     

}
// ===== CALCULATING =====



if (isset($_POST['calculate'])) {
    $wall_Volume= $_POST['wall_Volume'];
    $totalCost = $_SESSION['Cost'] + $_SESSION['mycost'];
   
    $_SESSION['mytotalcost'] = $totalCost;
   

    
// Start of Brick formula Euro codes
    $Volume_of_brick_with_mortar= 0.225*0.1125*0.075;

    $No_of_Bricks= ($wall_Volume/$Volume_of_brick_with_mortar)*100;
    //wastage = 0.5% of the total

    $_SESSION['Bricks'] = $No_of_Bricks*1.05;

//End of Brick Formula

   
    

    


// START ODCEMENT CALCULATION
// volume of mortar(cement+sand) is 0.35% of total volume in ratio 1:6
    $Volume_of_mortar= 0.35*$wall_Volume;
    $Vol_of_cement = 1/7*$Volume_of_mortar;
//mass = density*volume and the density of cement =1440kg/cu.m; 1bag of cement=50kgs; allowance for shrinkage=0.54
    $mass_of_cement= 1440*$Vol_of_cement;
    $_SESSION['cement'] = ($mass_of_cement*1.54)/50;

//END OF CEMENT CALCULATION

//SAND CALCULATION
    
    
    $Vol_of_sand = 6/7*$Volume_of_mortar;
    $mass_sand = (1600 *  $Vol_of_sand) /1000;
    $_SESSION['sand'] = $mass_sand *1.54 ;



   
}

    

    $query = "SELECT * FROM calc_fields WHERE id=(SELECT max(id) FROM calc_fields)";
    $result = mysqli_query($dbconn, $query);

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            $id = $row["id"];
            echo $id;
            $query = "UPDATE calc_fields SET plinthArea = $wall_Volume, resultCost = $totalCost WHERE id = $id";
            $query_db = mysqli_query($dbconn, $query);
        }
    }
    header("Location: startCalculation.php");




// ===== CALCULATING =====


