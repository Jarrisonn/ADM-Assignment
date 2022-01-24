<?php
$sql = "SELECT * FROM Message";
$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<li>MessageID: " . $row["MessageID"] . "</li> <li> Decoded Message: " . $row["DecodedMessage"]. "</li> <br>"; 
    }

}else{
    echo "<br> 0 results";
}

