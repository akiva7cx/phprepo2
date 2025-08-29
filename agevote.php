<html>

<head>

<style>

body { background: linear-gradient(to right bottom, #08032E, #A5DA14, #140A24,#14DAC9, #802E08);

color:black; }

p { color:blue; }

</style>

<title>form 2 </title>

</head>

<body>

<center>
<h2> FORM 3 TO CHECK YOUR AGE FOR VOTING</h2><hr>

<form method="POST">

Enter your age: <input type="text" name="t1"/><br>

<br><input type="submit" value="check" name="b1"/>

</form>

</body>

</html>

<?php

if(isset($_POST['b1']))

{

$num1=$_POST['t1'];

if($num1>=18)
{

echo"you are eligible to vote";

}

else {

echo"you are not eligible to vote";

}

}

?>