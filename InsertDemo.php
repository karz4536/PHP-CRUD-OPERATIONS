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
    $mname=$_REQUEST['mname'];
    $mrating=$_REQUEST['mrating'];
   
}

$sql = "INSERT INTO kmit (mname, mrating) VALUES ('$mname', '$mrating')";



if ($conn->multi_query($sql) === TRUE) {
  echo "New records created successfully","<br> ";
   echo "<a href='Display.php'>View</a>","<br>";
   echo "<a href='Delete.php'>Delete</a>","<br>";
   echo "<a href='Update.php'>Update</a>","<br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>