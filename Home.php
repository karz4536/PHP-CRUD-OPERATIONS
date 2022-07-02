<?php
// Start the session
session_start();
?>

<html>
<body>
<form method="post" action="csec.php">
TO KNOW ABOUT STUDENT DETAILS<hr>
sem:<input type="text" name="sem"><br>
sec:<input type="text" name="sec"><br>
<input type="submit">

</form>
<form method="post" action="Grade.php">
TO KNOW ABOUT STUDENT Grade<hr>
sem:<input type="text" name="sem"><br>


<input type="submit">

</form>
<form method="post" action="Gender.php">
TO KNOW ABOUT SUBJECT INFO<hr>
title:<input type="text" name="title"><br>


<input type="submit">

</form>

<form method="post" action="InsertDemo.php">
MOVIE REVIEW<hr>
<br>
Enter Movie Name:<input type="text" name="mname"><br>
Enter Movie Rating:<input type="text" name="mrating"><br>
<input type="submit">
</form>
</body>
