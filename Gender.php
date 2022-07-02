
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
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $title= $_REQUEST['title'];
    
}



$sql = "SELECT SUBCODE,SEM,CREDITS FROM SUBJECT WHERE TITLE='$title' ORDER BY SEM ";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo  " SUB: ",$row["SUBCODE"]," Sem: ", $row["SEM"]," CRED: ",$row["CREDITS"], "<br>";
  }
 

} else {
  echo "0 results";
}


$conn->close();
?>