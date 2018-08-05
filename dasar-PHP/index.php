<?php
for ($x=1; $x <= 10 ; $x++) {
  echo "ini baris : $x";
  echo "<br/>";
}

$a = 0;
while ($a < 10) {
  echo "ini ke-$a <br/>";
  $a++; //kalau ini dihilangkan, perulangan tidak akan berhenti
}

$b = 0;
do {
  echo "ini $b <br/>";
  $b++; //kalau ini dihilangkan, perulangan tidak akan berhenti
} while ($b < 10);

$theme = [
  "theme anu aa",
  "theme anu bb",
  "theme bb",
  "theme aa"
];
foreach ($theme as $key ) {
  echo "$key <br/>";
}
 ?>
