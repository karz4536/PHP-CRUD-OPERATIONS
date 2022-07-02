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
    $sem=$_REQUEST['sem'];
   

    $sec=$_REQUEST['sec'];
}



$sql = "SELECT S.USN,S.SNAME,S.ADDRESS,S.PHONE,S.GENDER, SS.SEM, SS.SEC
FROM STUDENT S, SEMSEC SS, CLASS C
WHERE S.USN = C.USN AND
SS.SSID = C.SSID AND
SS.SEM = '$sem' AND SS.SEC='$sec' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo   "usn : ",$row["USN"]  ," Sname : ", $row["SNAME"] ," Add : ", $row["ADDRESS"] ," Phone : ", $row["PHONE"], " Gender: ",$row["GENDER"]," Sem: ", $row["SEM"]," Sec : ",$row["SEC"], "<br>";
  }
 

} else {
  echo "0 results";
}


$conn->close();
?>