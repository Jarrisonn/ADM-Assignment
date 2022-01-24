<?php
$sql = "SELECT * FROM TransportationEvent INNER JOIN Message ON TransportationEvent.MessageID=Message.MessageID";

$result = $conn->query($sql);

if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<li>TransportID: " . $row["TransportID"]. "<br>" . "Location Transported From: " . $row["LocationTransportedFrom"] ."<br>" . "Location Transported To: ". $row["LocationTransportedTO"]."<br>". "CivilianOnTransport: ". $row["CivilianOnTransport"]. "<br>". "MessageID: ". $row["MessageID"] . "<br>". "DecodedMessage: ". $row["DecodedMessage"]. "</li> <br>" ;
        echo "\n";
    }

}else{
    echo "<br> 0 results";
}
