<?php

$eleves = [
  'cm1'=>['Jean', 'Marc', 'Jane', 'Marion'],
  'cm2'=>['Emilie', 'Marcelin']
];

foreach($eleves as $classe => $listEleves) {
  echo "la classe $classe : <br>";
  foreach($listEleves as $eleve){
    echo "- $eleve <br>";
  }
  echo "<br>";
};