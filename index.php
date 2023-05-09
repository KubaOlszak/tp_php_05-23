<?php

$intOne = 40;
$intTwo = 40;

echo "intOne : " . $intOne . "<br> intTwo : " . $intTwo . "<br>";

switch ($intOne) {
  case ($intOne > $intTwo):
    echo $intOne;
    break;
  case ($intOne < $intTwo):
    echo $intTwo;
    break;
  default:
    break;
}