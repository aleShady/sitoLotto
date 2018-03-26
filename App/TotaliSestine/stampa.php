
<?php
  include '../../Classes/DBM.php';
  $db = new DBM();
 
$anno = strval($_GET['anno']);
$tripla = strval($_GET['tripla']);

  $con = $db->read ( "SELECT * FROM sest$anno" );
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT sestina, EsitiPositivi, EsitiNegativi, Ambi, nTerni, nQuaterne, trip FROM sest$anno WHERE trip = '$tripla'";
$result = $db->read($sql);


//foreach($result as $row){
//    $data = array(
//        array('sestina'=>$row['sestina'], 'ambi'=>$row['Ambi'], 'terni'=>$row['nTerni'], 'quaterne' => $row['nQuaterne'], 'tripla' =>  $row['trip'])
//    );          
// }

  echo json_encode($result);
?>
