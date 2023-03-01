<?php
        header("refresh:2; url=startCalculation.php");
        require_once 'startCalculation.php';
        
        
        
          // Functioning of Dimension Form
            
            if(isset($_POST["dimension-set"])){

                $length = $_POST['length'];
                $width = $_POST['width'];
                $height = $_POST['height'];
                $Volume= $length * $width * $height;
                
                $_SESSION['volume']=  $Volume;

               echo $Volume;
// dimensions for calculating amount of paint
               $wall_Area= $length*$height;
               $_SESSION['wallArea']=$wall_Area;

                }

    
            ?>

<?php if(isset($_POST["column-set"])){
        $Length = $_POST['col_length'];
        $Width = $_POST['col_width'];
        $Height = $_POST['col_height'];
        $Vol_Column= $Length* $Width * $Height;
        $_SESSION['col-Vol']=  $Vol_Column;
        echo $Vol_Column;

        session_start();
        $_SESSION['height']=  $Height;
      
}
?>

<?php if(isset($_POST["steel_calc"])){
        $No_of_steel_per_column = $_POST['No_of_steel_per_column'];
        $radius = $_POST['steel_radius'];
        $steel_height = $_POST['steel_height'];
        $No_of_columns = $_POST['total_Columns'];

        
        
        $steel_vol= 22/7*$radius *$radius;

        $_SESSION['steel_vol'] =$steel_vol;
        
        // volume of steel in one column

         $column_vol_of_steel = $steel_vol* ($colHeight/$steel_height)* $No_of_steel_per_column;

        

         // total vom of steel for all columns and beams in the house

        $total_steel =$_SESSION['height']/$steel_height * $steel_vol * $No_of_steel_per_column * $No_of_columns ;

        $_SESSION['steel_total']=$No_of_steel_per_column * $No_of_columns;

        $steel_Cost = $_SESSION['height']* $No_of_steel_per_column * $No_of_columns ;
        $_SESSION['steelCost'] = $steel_Cost;

// volume of the mixture of cement sand and aggregate

       $sand_cem_agg_vol = $_SESSION['col-Vol'] - $column_vol_of_steel;

       $_SESSION['svc']=$sand_cem_agg_vol;
       // the ratio of cement:sand:aggregate using Mix 15 M15 1:2:4

       $vol_Aggregate = 4/7* $sand_cem_agg_vol;
       $mass_aggregate = (2500 * $vol_Aggregate)/1000;
       $_SESSION['Aggregate'] = $mass_aggregate;

       $vol_sand =2/7 *  $sand_cem_agg_vol;
       $mass_sand =   ($vol_sand * 1600)/1000;
       $_SESSION['sandMass'] =  $mass_sand *1.54;

       $vol_cement = 1/7*  $sand_cem_agg_vol;
       $mass_cement = $vol_cement*1440*1.54;
       $bag_cement =$mass_cement/50;
       $_SESSION['bag_cement'] = $bag_cement;
}
?>