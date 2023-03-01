<?php 
session_start();
// header("Refresh:0.5;url=startCalculation.php");


$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dreamhouse', 'root','');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $CostPerSqMeter ="";
    $totalCost="";  

    if ($_SERVER ['REQUEST_METHOD'] === 'POST'){
    $type= $_POST['type'];
    $quality = $_POST['quality'];
    $conditions = $_POST['conditions'];
   
    if (!$type){
        $errors[]= 'Select type of project';
    }
    
    if (!$quality){
        $errors[]= 'Select quality of finishes';
    }
    
    if (!$conditions){
        $errors[]= 'Select site conditions';
    }

    
    
   
    //conditions for reading the type,quality and conditions

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
    
        $area= $_SESSION['myarea'];
          
        $totalCost = $area*$CostPerSqMeter;
        $_SESSION['mytotalcost'] = $totalCost;
    
    //calculating cement cost
    $cement =  $area * 0.4;
    $_SESSION['Cement_Cost'] = $cement;

    //calculating steel
    //calculating bricks
    //calculating sand 
    //calculating aggregate
    //calculating paint

    if (empty($errors)){
        $statement =$pdo->prepare("INSERT INTO houses(type, quality, conditions)
        VALUES (:type, :quality, :conditions)");
    
        $statement ->bindValue(':type', $type);
        $statement -> bindValue(':quality', $quality);
        $statement -> bindValue(':conditions', $conditions);
        $statement -> execute();
    }
    


   
 } 
 












?>