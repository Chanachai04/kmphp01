<?php
class Test02
{
  public $infoA;

  public function showInfoA()
  {
    echo "Info A มีค่าเป็น: $this->infoA <br>";
  }

  public function __construct($infoA)
  {
    $this->infoA = $infoA;
    echo "Welocome to SAU <br>";
  }

  public function __destruct()
  {
    echo "Thank you <br>";
  }
}

$ob1 = new Test02(100);
$ob2 = new Test02(200);

$ob1->showInfoA();
$ob2->showInfoA();
