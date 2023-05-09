<?php

$stringTp = "Ceci est une chaîne de caractère.";

$substr = "est une chaîne";

$substrLength = strlen($substr);

$pos = strpos($stringTp, $substr);

if (str_contains($stringTp, $substr)) {
    echo substr($stringTp, $pos, $substrLength);
} else {
  echo "Cette chaine n'est pas dans cette phrase.";
}