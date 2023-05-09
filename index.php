<?php

$movieArray = [
  "Vertigo",
  "Minority Report",
  "Blade Runner",
  "Le Dernier des Mohicans",
  "Pacific Rim"
];

echo "<ul>";
foreach ($movieArray as $movie) {
  echo "<li>$movie</li>";
}
echo "</ul>";