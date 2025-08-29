<html>

<head>

<style>

body (background: linear-gradient(to right bottom, #278749, #27876A, #27B7A1, #279AB7);

color:black; }

p {color:blue; }

</style>

<title>form 7 </title>

</head>

<body>
<center>

<h2> FORM 8 TO CALCULATE AGE</h2><hr>

<form method="POST">

Name: <input type="text" name="name"/><br>

D.O.B:<input type="text" name="dob"/><br>

<input type="submit" value="Calculate" name="b1"/>

</form>

</body>

</html>

<?php

if (isset($_POST['b1']))

{

$name=$_POST['name'];

$dob=$_POST['dob'];

$currentdate=date("Y-m-d");

$dob_date=date_create($dob);

$current_date=date_create($currentdate);

$diff=date_diff($dob_date, $current_date);

$age = $diff->y;

echo"Hello, <b> $name</b> ! your age is <b>$age<?b> years";
}

?>