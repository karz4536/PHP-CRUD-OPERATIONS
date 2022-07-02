<?php include 'Connection.php';?>
<html>
<head>
        <style>
            body{
  color:yellow;
  background-color:grey;
  
}
            </style>
</head>
    </html>
<?php

$sql = "SELECT USN, SUBCODE, SSID, TEST1, TEST2 FROM IAMARKS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "USERname: " , $row["USN"], " - SCODE: " , $row["SUBCODE"]," SSID: " , $row["SSID"]," TEST1 " , $row["TEST1"]," TEST2: " , $row["TEST2"],  "<br>";
  }
 

} else {
  echo "0 results";
}


$conn->close();
?>