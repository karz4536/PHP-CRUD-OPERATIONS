<?php include 'Connection.php';?>

<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="mname">
<input type="submit">
</form>
</body>
</html>

<?php
// sql to delete a record

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $mname=$_REQUEST['mname'];
}

if(!empty($mname))
{
$sql = "DELETE FROM kmit WHERE mname='$mname'";

if ($conn->query($sql) != FALSE) {
  
  echo "Records Deleted successfully","<br> ";
  echo "<a href='Display.php'>Click Here to View Records</a>","<br>";
  echo "<a href='Delete.php'>Click Here to Delete Records</a>","<br>";
  echo "<a href='Update.php'>Click Here to Update the Records</a>","<br>";

} 
else {
  echo "Error deleting record " . $conn->error;
}
}

$conn->close();

?> 