<?php

function addFive ($int)
{
  return (!is_int($int)) ? "Le nombre n'est pas un entier" : ($int + 5);
}

echo addFive(8);