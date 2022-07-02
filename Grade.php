

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
   

}



$sql = "SELECT S.USN,S.SNAME,S.ADDRESS,S.PHONE,S.GENDER,
(CASE
WHEN IA.FINALIA BETWEEN 17 AND 20 THEN 'OUTSTANDING'
WHEN IA.FINALIA BETWEEN 12 AND 16 THEN 'AVERAGE'
ELSE 'WEAK'
END) AS CAT
FROM STUDENT S, SEMSEC SS, IAMARKS IA, SUBJECT SUB
WHERE S.USN = IA.USN AND
SS.SSID = IA.SSID AND
SUB.SUBCODE = IA.SUBCODE AND
SUB.SEM = '$sem' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo   "usn : ",$row["USN"]  ," Sname : ", $row["SNAME"] ," Add : ", $row["ADDRESS"] ," Phone : ", $row["PHONE"]," category: ",$row["CAT"], "<br>";
  }
 

} else {
  echo "0 results";
}


$conn->close();