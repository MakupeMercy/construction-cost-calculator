

<?php 
include 'header.php';
include 'connection.php' ;

$query = "SELECT * FROM calc_fields";
$result = mysqli_query($dbconn,$query);





?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<body> 
<table id="calculation_form">
  
<tr>
  <th colspan = "6">Calculations</th>
</tr>

<tr>
  <th>Type</th>
  <th>Quality</th>
  <th>Conditions</th>
  <th>Plinth Area</th>
  <th>Cost Per Square Meter</th>
  <th>Total Cost</th>
</tr>

<?php 

while($rows = mysqli_fetch_assoc($result)) {
  ?>

  <tr> 
    <td><?php echo $rows['type']; ?></td>
    <td><?php echo $rows['quality']; ?></td>
    <td><?php echo $rows['conditions']; ?></td>
    <td><?php echo $rows['plinthArea']; ?></td>
    <td><?php echo $rows['costPerSqrMeter']; ?></td>
    <td><?php echo $rows['resultCost']; ?></td>
  </tr>
  <?php
}
?>



</table>


<?php include 'footer.php'; ?>
</body>
</html>