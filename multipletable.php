<html>

<head>

<style>

body { background: linear-gradient(to right bottom, #278749, #27876A, #2787A1, #279AB7);

color:black; }

p { color: blue; }

</style>

<title>form 2 </title>

</head>

<body>

<h2> FORM 2 TO DISPLAY MULTIPLICATION OF A GIVEN TABLE WITH GIVEN LIMIT</h2><hr>

<form method="POST">

Enter table number: <input type="text" name="t1"/><br>

Enter limit:<input type="text" name="t2"/><br>

<input type="submit" value="multiply" name="b1"/>

</form>

</body>

</html>

<?php

if(isset($_POST['b1']))

{

$num1=$_POST['t1'];

$num2=$_POST['t2'];

for($i=1;$i<=$num2;$i++)

{ 
echo"$num1 X $i=".$num1*$i;

echo"<br>";
}
}

?>