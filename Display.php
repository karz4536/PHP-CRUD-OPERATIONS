<?php include 'Connection.php';?>
<?php

$sql = "SELECT mname,mrating FROM kmit";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " , $row["mname"], " - rating: " , $row["mrating"],  "<br>";
  }
  echo "<br>";
  echo "<a href='InsertDemo.php'>Click Here to Insert More Records</a>","<br>";
echo "<a href='Delete.php'>Click Here to Delete Records</a>","<br>";
echo "<a href='Update.php'>Click Here to Update the Records </a>","<br>";

} else {
  echo "0 results";
}


$conn->close();
?>