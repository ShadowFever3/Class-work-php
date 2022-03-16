<!DOCTYPE html>
<html>
<body>

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("Y_m_d") . "<br>";
echo "Today is " . date("l") . '<br>';

echo "The time is " . date("h:i:sa") . '<br>'; 

date_default_timezone_set("Canada/Eastern");
echo "The time is " . date("h:r:sa"). "<br>";

$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d). "<br>";

$td=mktime(8, 43, 21, 3, 14, 2022);
echo "New date is " . date("Y-m-d h:i:sa", $td). "<br>";

$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d) . '<br>';

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";



$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
  echo date("M d", $startdate) . "<br>";
  $startdate = strtotime("+1 week", $startdate);
}

$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July." . '<br>';

echo readfile("test.txt") . '<br>';

$myfile = fopen("test.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("test.txt") /* can use a divider like : /2 if you want */) . '<br>';
?>
&copy; 2010-<?php echo date("Y");?>
</body>
</html>