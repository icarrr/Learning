<?php
$x = 'windows';
echo "Anda terindikasi sebagai? ";
switch ($x) {
  case 'windows ori':
    echo "Kemungkinan anda pengguna bajakan";
    break;
  case 'windows 7 oem':
    echo "Kemungkinan windows anda original tapi software bajakan";
    break;
  default:
    echo "Anda pengguna open source";
    break;
}
echo "<br/>";

$y = 60;
switch (true) {
  case ($y < 60):
    echo "Anda dinyatakan tidak lulus";
    break;
  case ($y == 60):
    echo "Anda dinyatakan lulus";
    break;
  case ($y > 60 && $y < 70):
    echo "Anda dinyatakan lulus tapi miris gak lulus";
    break;
  case ($y == 70 && $y < 90):
    echo "Anda dinyatakan lulus dengan nilai baik";
    break;
  case ($y > 90):
    echo "Anda sangat hebat";
    break;
  default:
    echo "Anda sangat sangat hebat";
    break;
}
 ?>
