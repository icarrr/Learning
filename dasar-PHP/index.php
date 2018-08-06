<?php
$x = array("Icar", "siBunglon", "Olivia");
$x[2] = "ganteng";
for ($i=0; $i < count($x); $i++) {
  echo $x[$i]."<br/>";
}
$y = [
  "nama" => "icar",
  "umur" => "18",
  "asal" => "Bulukumba"
];
echo "Namanya ialah ".$y["nama"].", berumur ".$y["umur"]." tahun dan berasal dari ".$y["asal"];
$z = [
  [
    "nama" => "icar",
    "umur" => "18",
    "asal" => "Bulukumba"
  ],
  [
    "nama" => "setan BSD",
    "umur" => "17",
    "asal" => "anu"
  ]
];
echo "<br/>";
$age = 17;
if ($age <= 17) {
  echo "Namanya ialah ".$z[1]["nama"].", berumur".$z[1]["umur"]." tahun dan berasal dari ".$z[1]["asal"];
}else {
  echo "Tidak ada data yang cocok";
}

 ?>
