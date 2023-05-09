<?php

$str = "C'est ma première fonction.";

function echoString ($string) : string
{
  return $string;
}

echo echoString($str);