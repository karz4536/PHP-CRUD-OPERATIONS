<?php include 'Connection.php';?>
<?php

$sql = "SELECT usn,sname,address,phone,gender FROM student";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " , $row["usn"], " - SNAME: " , $row["sname"]," addr: " , $row["address"]," phone: " , $row["phone"]," gender: " , $row["gender"],  "<br>";
  }
 

} else {
  echo "0 results";
}


$conn->close();
?>