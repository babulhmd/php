<?php
$x =1;
while ($x <= 100) {
  if ($x % 2 != 0) {
  echo "$x, ";
  }
$x++;
}
echo "<br>";
$x =1;
while ($x <= 100) {
  if ($x % 2 == 0) {
  echo "$x, ";
  }
$x++;
}

echo "<br>";

$x =1;

while ($x <= 100) {
  if ($x == 2 || $x == 3 || $x == 5 || $x == 7) {
  echo "$x, ";
  }
$x++;
}
$x =1;
while ($x <= 100) {
  if ($x !=1 && $x % 2 != 0 && $x % 3 !=0 && $x % 5 !=0 && $x % 7 !=0) {
  echo "$x, ";
  }
$x++;
}

 ?>
