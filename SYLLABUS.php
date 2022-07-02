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
    $sub=$_REQUEST['t'];
}

if(!empty($sub))
{
$sql = "DELETE FROM Subject WHERE TITLE='$sub' ";

if ($conn->query($sql) === TRUE) {
  
  echo "Records Deleted successfully","<br> ";
  echo "<a href='Subject.php'>Click Here to View Records</a>","<br>";
  

} 
}
else {
  echo "Error deleting record " . $conn->error;
}


$conn->close();

?> 