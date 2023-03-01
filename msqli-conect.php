<?php
    session_start();

    $con = mysqli_connect("localhost","root","","dreamhouse");

  
    if(isset($_POST['submit'])){
        $type = $_POST['type'];
        $quality = $_POST['quality'];
        $conditions = $_POST['conditions'];

    if (empty($errors)){
        $query="INSERT INTO houses(type, quality, conditions) VALUES ('$type','$quality', '$conditions')";
        $query_db = mysqli_query($con, $query);
    }

        if($query_db)
        {
            $_SESSION['status']="Conditions
            Set Successfully";
            header("Location:pagesetup.php");
        }else{
            $_SESSION['status']="Conditions Not Set!";
            header("Location:pagesetup.php");
        }

        
        
      
    }
   
?>
<?php
    session_start();
?>