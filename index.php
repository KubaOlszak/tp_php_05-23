<?php

$age = 10;

echo "Age : " . $age . "<br><br>";

switch ($age) {
    case ($age >= 18) :
      echo "Je suis majeur.";
      break;
    case ($age >= 0 && $age <= 18) :
      echo "Je suis mineur.";
      break;
    default:
      echo "Y a un problème !";
      break;
}