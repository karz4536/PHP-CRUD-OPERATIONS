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
<?php include 'Connection.php';?>
<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $USN= $_REQUEST['u'];
    $SNAME= $_REQUEST['s'];
    $ADDR= $_REQUEST['a'];
    $PHONE= $_REQUEST['p'];
    $GENDER= $_REQUEST['g'];
}



$sql = "INSERT INTO STUDENT VALUES('$USN','$SNAME','$ADDR','$PHONE','$GENDER') ";
if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully","<br> ";
    echo "<a href='STUDENT DETAILS.php'>click here to View records </a>","<br>";

} else {
  echo "0 results";
}


$conn->close();
?>
