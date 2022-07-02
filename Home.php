<?php
// Start the session
session_start();
?>

<html>
    <head>
        <style>
            body{
  color:yellow;
  background-color:grey;
  
}
            </style>
</head>
<body>
   <hr> <h1> PHP CRUD OPERATIONS </h1>
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
<form method="post" action="updatemarks.php">
UPDATE STUDENT MARKS<hr>
usn:<input type="text" name="n"><br>


<input type="submit">

</form>
<form method="post" action="SYLLABUS.php">
DELETE OLD SYLLABUS<hr>
sub:<input type="text" name="t"><br>


<input type="submit">

</form>
<form method="post" action="ADMISSION.php">
FOR NEW ADMISSIONS<hr>
usn:<input type="text" name="u"><br>
sname:<input type="text" name="s"><br>
addr:<input type="text" name="a"><br>
phone:<input type="text" name="p"><br>
gender:<input type="text" name="g"><br>

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