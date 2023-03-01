
<?php    header("refresh:2; url=startCalculation.php");
       require_once 'calc2.php';
       require_once 'startCalculation.php'; ?>

<?php if(isset($_POST["steel_calc"])){
        $No_of_steel_per_column = $_POST['No_of_steel_per_column'];
        $radius = $_POST['steel_radius'];
        $steel_height = $_POST['steel_height'];
        $Total_Columns=$_POST['Total_columns'];

        echo $_SESSION['height'] =$colHeight;
        
        $steel_vol= 22/7*$radius *$radius *$colHeight;

        $_SESSION['steel_vol'] =$steel_vol;

        // $column_vol_of_steel=$steel_vol* ($colHeight/$steel_height)* $No_of_steel_per_column;

        // $total_steel = $steel_vol* ($colHeight/$steel_height)* $No_of_steel_per_column * $Total_Columns;

        session_start();
        $_SESSION['total-steel']=$total_steel ;
        echo $total_steel;
      
}
?>