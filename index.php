<?php

$a = [3, 2, 1, 5];

function search($a, int $element)
{
  if (empty($a)) {
    return -1;
  }
  
  $key = array_key_first($a);
  if ($a[$key] === $element){
    return $key;
  }
  unset($a[$key]);
  return search($a, $element);
}

echo "Search : " . search($a, 1) . "<br/>";