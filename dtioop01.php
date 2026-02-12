<?php
class Test01{
  public $dataA;
  public $dataB = "Hello... <br>";

  public function showWow(){
    echo "Wow... <br>";
  }

  public function showWoo(){
    echo "Woo... <br>";
  }
}

$ob1 = new Test01();
$ob2 = new Test01();

$ob1->dataA = "Hi....";
echo $ob2->dataB;

$ob1->showWow();
$ob2->showWow();