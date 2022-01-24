<?php

include_once 'db.inc.php';


$sql = "INSERT INTO SoldierStaff (FirstName, LastName, Rank, LocationID) 
VALUES (?,?,?,?)";

$stmnt = $conn->prepare($sql);
$stmnt->bind_param("sssi", $_POST["FirstName"], $_POST["LastName"], $_POST["Rank"], $_POST["Location"]);
$stmnt->execute();

echo "Record Added Successfully";

$stmnt->close();
$conn->close();

header("Location: http://localhost/Soldiers.php");
