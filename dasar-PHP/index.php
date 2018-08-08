<?php
class olivia{
  var $keyboard;
  var $monitor;

  function kenapa()
  {
    return "Ketindis";
  }
  function kapan(){
    return "Kemarinnya kemarin";
  }
}

$icar = new olivia();

$icar->keyboard="Asus keyboard";
$icar->monitor="Sudah ganti";

echo $icar->monitor;
echo "<br/>";
echo $icar->kapan();
 ?>
