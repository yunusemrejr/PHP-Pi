<!DOCTYPE html>
<html>
<body>
<style>
*{
font-family:arial;
background-color:brown;
color:white;
}
</style>
<?php

$Pi = 3.14;
$Number1 = 2;
$Number2 = 3;
$Number3 = 13;

echo "This is a simple PHP program. It is about Pi... And arithmetic operators. Just that.<br><br>";

echo "This is Pi : ".$Pi;
echo "<br>";
echo "This is Pi x 2 = ".$Pi*$Number1;
echo "<br>";
echo "This is Pi x 3 = ".$Pi*$Number2;
echo "<br>";
echo "This is Pi x 13 = ".$Pi*$Number3;
echo "<br>";
echo "This is the remainder of Pi / 2 = ".$Pi%$Number1;
echo "<br>";
echo "This is the remainder of Pi / 3 = ".$Pi%$Number2;
echo "<br>";
echo "This is the remainder of Pi / 13 = ".$Pi%$Number3;
echo "<br>";
echo " Pi + 1 = ".++$Pi;
echo "<br>";

for($i=0;$i<7;$i++) {
echo "--------------"; }
echo "<br>";
echo "Enter a number: ";
echo "<form><input action='index.php' method='GET' name='numbr'/><input type='submit' value='Enter' name='sendBtn'/></form>";

if(isset($_GET['sendBtn'])) {
    $Pi = 3.14;

$InputNum = $_GET['numbr'];
$Result = $InputNum*$Pi;
echo "<b>Your input times Pi is : ".$Result."</b>";


}







?>
<!--
YUNUS EMRE VURGUN 2022
-->
</body>
</html>