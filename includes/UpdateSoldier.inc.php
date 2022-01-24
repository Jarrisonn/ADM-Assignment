<?php
include_once 'db.inc.php';
$sql = "UPDATE SoldierStaff SET {$_POST['Column']} = {$_POST['Value']} WHERE SoldierID = {$_POST['SoldierID']};";


$result = $conn->query($sql);


if($result){
    echo "Record Updated";
    
}else{
    echo "Error with inputs";
}

sleep(5);
header('Location: ../Soldiers.php');