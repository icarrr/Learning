<?php
class olivia{
  public $keyboard;
  public $monitor;

  public function kenapa()
  {
    return "Ketindis";
  }
  public function kapan(){
    return "Kemarinnya kemarin";
  }
}

$icar = new olivia();

$icar->keyboard="Asus keyboard";
$icar->monitor="Sudah ganti";

echo "<h1>Public</h1>";
echo $icar->monitor;
echo "<br/>";
echo $icar->kapan();
echo "<hr>";
// batas public

class olivia1{
  protected $mouse = "pake mouse lenovo";
  protected $board = "olivia";

  public function merk()
  {
    return $this->mouse;
  }
}
$icar1 = new olivia1();
echo "<h1>Protected</h1>";
echo $icar1->merk();
echo "<hr>";
// batas protected
 ?>
