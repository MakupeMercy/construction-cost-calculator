<?php
    header("Refresh:0.5;url=startCalculation.php");
    ?>   
<?php
$pdo = new PDO('mysql:host=localhost;port=3306;dbname=dreamhouse', 'root','');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ($_SERVER ['REQUEST_METHOD'] === 'POST'){
$area = $_POST['area'];

session_start();
$_SESSION['myarea'] = $area;




//Validating the area 
    if (!$area){
        $errors[]= 'Enter the area of the house';
    }
    
    if (empty($errors)){
    $statement =$pdo->prepare("INSERT INTO area_table(area)
    VALUES (:area )");

    $statement -> bindValue(':area', $area);
    
    $statement -> execute();
   
}
}

?>

<?php if(!empty($errors)): ?>
<div class="alert">
    <?php foreach ($errors as $error):?>
    <div><?php echo $error?></div>
    <?php endforeach; ?>
</div>
<?php endif; ?>
