<html>
<body bgcolor="skyblue">
<?php
echo '<table align="center" bgcolor="white"><tr><td>';
echo '<h1><u><font color="crimson" face="cooper black">Date & Time Function </font></u></h1><br>';
echo '<b>Current Date, i.e. 28-08-2024</b><br>';
echo date("Y-m-d");
echo '<br><br><b> Current Month, i.e. 08 </b><br>';
echo date("m");
echo '<br><br><b> Current Month Name, i.e. Aug </b><br>';
echo date("M");
echo '<br><b> Current TimeStamp </b><br>';
echo time();
$d = strtotime("tomorrow");
echo '<br><br><b> Tomorrow Date is </b><br>';
echo date("Y-m-d h:i:sa", $d);
$d = strtotime("Next Saturday");
echo '<br><br><b> Next Saturday is </b><br>';
echo date("Y-m-d h:i:sa", $d);
$d = strtotime("+3 months");
echo '<br><br><b> After 3 Months </b><br>';
echo date("Y-m-d h:i:sa", $d);
$d = mktime(11, 14, 54, 12, 18, 2024);
echo "<br><br><b>Created Date is</b><br>" . date("Y-m-d h:i:sa", $d);
echo '<br><br><b>Increase 1 Day from current Date</b><br>';
echo "Date is " . date("Y-m-d", time() + 86400);
echo '<br><br><b>Decrease 15 Days from current Date</b><br>';
echo "Date is " . date("Y-m-d", time() - (86400 * 15));
echo '<br><br><b>Current time in 12hr format, i.e. 08:50:55pm </b><br>';
echo date("h:i:sa");
echo '<br><br><b>Current time in 24hr format, i.e. 18:50:55 </b><br>';
echo date("H:i:sa");
echo '</td></tr></table>';
?>
</body>
</html>