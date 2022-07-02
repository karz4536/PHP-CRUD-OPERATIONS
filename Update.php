<?php include 'Connection.php';?>

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
MOVIE REVIEW<hr>
<br>
Enter Movie Name:<input type="text" name="mname"><br>
Enter Movie Rating:<input type="text" name="mrating"><br>
<input type="submit">
</form>
</body>
</html>

<?php
// sql to delete a record
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $mname=$_REQUEST['mname'];
    $mrating=$_REQUEST['mrating'];
}

if(!empty($mname))
{
    
    $sql = "UPDATE kmit SET mrating='$mrating' WHERE mname='$mname'";

    if ($conn->query($sql) == TRUE) {
        
        
            echo "New records Updated successfully","<br> ";
             echo "<a href='Display.php'>Click Here to View Records</a>","<br>";
             echo "<a href='Delete.php'>Click Here to Delete Records</a>","<br>";
             echo "<a href='Update.php'>Click Here to Update the Records Again</a>","<br>";
          
    }
   
 
 else {
      echo "Error updating record " . $conn->error;
}
}

$conn->close();

?>