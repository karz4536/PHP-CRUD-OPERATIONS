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

$sql = "SELECT subcode,title,sem,credits FROM subject";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "sc " , $row["subcode"], " - title: " , $row["title"]," sem: " , $row["sem"]," credits: " , $row["credits"] , "<br>";
  }
 

} else {
  echo "0 results";
}


$conn->close();
?>