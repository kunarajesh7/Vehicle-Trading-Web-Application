<!DOCTYPE html>
<head>
  <style>
    body{
      background-color: lightgoldenrodyellow;
      padding-top: 50px;
      padding-left: 275px;
    }
    .first{
      border: 10px solid violet;
      width: 800px;
      padding: 50px;
      height: auto;
    }
  </style>
</head>
<body >
<div class="first">
 <h2 style="text-align: center;"> Vehicle Details </h2>

<?php session_start();

?>


<center>
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM sell");

echo "<table border='1' bgcolor='#fff'>
<tr>
<th>FullName</th>
<th>Phoneno</th>
<th>Selecttype</th>
<th>Brand</th>
<th>VehicleName</th>
<th>Vehiclecolor</th>
<th>VehicleMilage</th>
<th>VehiclePrice</th>
<th>Action</th>


</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['FullName'] . "</td>";
  echo "<td>" . $row['Phoneno'] . "</td>";
  echo "<td>" . $row['Selecttype'] . "</td>";
  echo "<td>" . $row['Brand'] . "</td>";
  echo "<td>" . $row['VehicleName'] . "</td>";
  echo "<td>" . $row['Vehiclecolor'] . "</td>";
  echo "<td>" . $row['VehicleMilage'] . "</td>";
  echo "<td>" . $row['VehiclePrice'] . "</td>";
 
  echo "<td><a  href='buyvehicle.php?id=".$row['id']."'>Buy</a> ";
  echo "</tr>";
  }
echo "</table>";

?>

<p>&nbsp;</p>

</center>
</div>

</body>
</html>
