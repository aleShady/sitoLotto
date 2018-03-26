<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
  include '../../Classes/DBM.php';
  $db = new DBM();
  
$anno = strval($_GET['anno']);
$tripla = strval($_GET['Tripla']);

  $con = $db->read ( "SELECT * FROM sest$anno" );
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
$sql="SELECT * FROM sest$anno WHERE trip = '$tripla'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['sestina'] . "</td>";
    echo "<td>" . $row['Ambi'] . "</td>";
    echo "<td>" . $row['nTerni'] . "</td>";
    echo "<td>" . $row['nQuaterne'] . "</td>";
    echo "<td>" . $row['Job'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>