<?php

$i = 1;
$prime = '';

while ($i <= 5) {
  for ($j = 2; $j <= $i; $j++) {
    if ($i % $j === 0) {
      return false;
    } else {
    echo $i . ", ";
    }
  }
  echo "$i<br>";
  $i++;
}

// var_dump($prime);

function prime ()
{

} 