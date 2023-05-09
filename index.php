<?php

$a = 2;
$b = 3;

echo "a : $a <br>";
echo "b : $b <br><br>";

if (!(is_int($a)) ||  !(is_int($b))) {
  echo "Les variables doivent être des nombres.<br>";
} else {
  echo "a^b = " . $a**$b . "<br>";
}