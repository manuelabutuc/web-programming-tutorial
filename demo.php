<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!";
echo "<br>";
$x = 5 + 5;
echo $x;
echo "<br>";

$color = "red";
echo "My car is " . $color . "<br>";
echo "<br>";

$txt = "W3Schools.com";
echo "I love $txt!";

echo "<br>";
$nume='Manu';
$message="Salut $nume";
echo $message;
?>

<h2>Functions</h2>

<?php
$n=10;
function addNum($a,$b,$c=1) {
    global $n;
    $s=$a+$b+$c;
    return $s*$n;
}
echo addNum(4,5);
echo "<br>";


?>
<h2>Array</h2>
<ul>
<?php
$agenda=array("Matei", "Andrei", "Ionel", "Manu");
$n=count($agenda); //ca sa fie mai rapid, sa nu se execute cu fiecare for
for($i=0; $i<$n; $i++){
    echo "<li>$agenda[$i]</li>";
}
?>
</ul>

<h2>Constants</h2>
<?php
define("nume", "Welcome!");
echo "You are ".nume;
?>




</body>
</html>