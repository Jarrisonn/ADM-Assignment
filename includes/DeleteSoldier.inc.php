<?php
include_once 'db.inc.php';
$sql = "DELETE FROM SoldierStaff WHERE SoldierID = {$_POST['Value']};";


$result = $conn->query($sql);


if($result){
    echo "Record Updated";
    header('Location: ../Soldiers.php');
}else{
    echo "Error with inputs";
}

sleep(5);
header('Location: ../Soldiers.php');