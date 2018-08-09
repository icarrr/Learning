<?php
class belajar{
  public $materi;
  public $sub_materi;
  public $ref;

  public function apa_bikin(){
    return "Belajar dan go to web dev";
  }
}

class learning extends belajar
{

  public function ngapain(){
    return "Belajar apa?
    <br/>
    Jawab: $this->materi <br/>
    Sudah sampai mana materinya?
    <br/>
    Jawab: $this->sub_materi <br/>
    Belajarnya dari mana?
    <br/>
    Jawab: $this->ref";
  }
}

$apa_bikin_coeg = new learning();
$apa_bikin_coeg->materi = "PHP";
$apa_bikin_coeg->sub_materi = "Inheritance";
$apa_bikin_coeg->ref = "DuniaIlkom";

echo $apa_bikin_coeg->apa_bikin();
echo "<br/>";
echo $apa_bikin_coeg->ngapain();
?>
