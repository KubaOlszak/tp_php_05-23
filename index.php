<?php

$age = -5;

echo "Age : " . $age . "<br><br>";

if ($age >= 18 ) {
    echo "Je suis majeur.";
} elseif ($age < 18 && $age >= 0) {
    echo "Je suis mineur.";
} else {
    echo "Y a un problème !";
}