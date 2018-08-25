<!DOCTYPE html>
<html>
<body>

<?php

echo "My first PHP script!";

echo "<br>";

$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;
echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;

echo "<br>";

$t = date("H");
echo "<p>The hour (of the server) is " . $t;
echo ", and will give the following message:</p>";
if ($t < "10") {
  echo "Have a good morning!";
}
elseif ($t < "20") {
  echo "Have a good day!";
}
else {
  echo "Have a good night!";
}

echo "<br>";

$x = 1;
while ($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}

echo "<br>";

for ($x = 0; $x <= 10; $x++) {
  echo "The number is: $x <br>";
}

echo "<br>";

$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
  echo "$value <br>";
}

echo "<br>";

function sum($x, $y) {
  $z = $x + $y;
  return $z;
}
echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";

echo "<br>";



?>

</body>
</html>
