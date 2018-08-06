<?php
$nama = $_POST['nama'];
$usia = $_POST['usia'];
echo "Hello World!","<br>";
echo "Data atas nama ".$nama," telah di konfirmasi", "<br>";
echo "Usia anda adalah ".$usia, " tahun","<br>";
echo "<hr>";
if ($usia < 18) {
  echo "Anda dapat melanjutkannya setelah berusia 18+ tahun";
} else {
  echo "Sekarang anda dapat lanjut ke tahap berikutnya";
}

 ?>
