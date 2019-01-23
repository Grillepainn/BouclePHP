for ($i=0; $i < count($array); $i++) {
  if ( $max < $array[$i] ) {
    $max = $array[$i];
  }
}
echo 'La valeur maximal est '.$max;

//Exercice 2

$array= array(1,2,3,4,5);
$max = $array[0];

for ($i=0; $i < count($array) ; $i++) {
  if ( $max > $array[$i] ) {
    $max = $array[$i];
  }
}
echo 'La valeur minimale est '.$max

//Exercice 3

$array= array(1,2,3,4,5);
$pair = 0;
$impair = 0;

  foreach ($array as $value) {
    if ( $value % 2 == 0 ) {
      $pair = $pair + 1;
    }
}
  foreach ($array as $value) {
    if ( $value % 2 !== 0 ) {
      $impair = $impair + 1;
  }
}
echo 'Dans notre boucle nous avons '.$pair.' chiffres pairs, mais aussi '.$impair.' chiffres impairs';

//Exercice 4

$array1 = array(1,2,3,4,5);
$array2 = array(1,2,3,4,5);
$array3 = array();

  foreach ($array1 as $key => $value) {
    $array3[$key] = $array1[$key] + $array2[$key];
  }

echo "<pre>";
print_r($array3);
echo "</pre>";
