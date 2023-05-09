<?php

function isPrime(int $n)
{
  for ($i = 2; $i < $n; $i++) {
    if ($n % $i === 0) {
      return false;
    }
  }
  return true;
}

for ($i = 2; $i <= 5; $i++) {
  if (isPrime($i)) {
    echo $i . ', ';
  }
}