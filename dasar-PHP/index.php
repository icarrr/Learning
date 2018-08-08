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
  function __construct(){
    echo "ini construct";
  }
  function __destruct(){
    echo "ini destruct";
  }
}

$icar = new olivia();

$icar->keyboard="Asus keyboard";
$icar->monitor="Sudah ganti";

echo $icar->monitor;
echo "<br/>";
echo $icar->kapan();
 ?>
