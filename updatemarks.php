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
<body> </body>
</html>
<?php
// sql to delete a record
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_REQUEST['n'];

}

if(!empty($name))
{
    
    $sql = "UPDATE IAMARKS SET TEST1='20' WHERE USN='$name'  ";
    $sql2 = "UPDATE IAMARKS SET TEST2='20' WHERE USN ='$name' ";

    if ($conn->query($sql) == TRUE && $conn->query($sql2) == TRUE ) {
        
        
            echo "New records Updated successfully","<br> ";
             echo "<a href='Marks.php'>Click Here to View Records</a>","<br>";
           
          
    }
   
 
 else {
      echo "Error updating record " . $conn->error;
}
}

$conn->close();

?>