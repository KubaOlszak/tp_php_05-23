<?php

$strLength = "Ceci est une chaîne de caractère.";

$strArray = explode(' ', $strLength);

foreach ($strArray as $substr) {
  echo "$substr<br>";
}