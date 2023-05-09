<?php

function triangle($n) {
  for ($i = 1; $i <= $n ; $i++) {
    for ($j = 1; $j <= $i; $j++){
      echo $i;
    }
    echo '<br>';
  }
}

triangle(5);