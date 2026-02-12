<?php
class Test03
{
  public $numA = 100;
  private $numB = 200;
  public $numC = 300;

  public function showHi()
  {
    echo "Hi....<br>";
  }
  private function showHello()
  {
    echo "Hello....<br>";
  }
  public function showHey()
  {
    echo "Hey....<br>";
  }
  public function metA()
  {
    echo "numA: " . $this->numA . "<br>";
    echo "numB: " . $this->numB . "<br>";
    $this->showHi();
    $this->showHello();
    $this->showHey();
  }
}

$ob1 = new Test03();

$ob1->numA = 111;
// $ob1->numB = 111;

$ob1->showHi();
// $ob1->showHello();
$ob1->showHey();
$ob1->metA();
