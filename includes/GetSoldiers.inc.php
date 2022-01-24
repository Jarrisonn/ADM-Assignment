<?php
$sql = "SELECT * FROM SoldierStaff";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<li>SoldierID: " . $row["SoldierID"]. "<br>" . "First Name: " . $row["FirstName"] ."<br>" . "Last Name: ". $row["LastName"]."<br>". "Rank: ". $row["Rank"]. "<br>". "Location ID: ". $row["LocationID"]. "</li> <br>" ;
        echo "\n";
    }

}else{
    echo "<br> 0 results";
}
