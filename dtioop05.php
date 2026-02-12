<?php
class TestA
{
  public function metA()
  {
    echo 111 . "<br>";
  }
  public function metB()
  {
    echo "Wow...<br>";
  }

  // overloading method (PHP ไม่รองรับ)
  // public function metA($param1, $param2)
  // {
  //   echo 222 . "<br>";
  // }
}

class TestB extends TestA
{
  public function metA()
  {
    echo "333" . "<br>";
  }
}

$ob1 = new TestA();
$ob2 = new TestB();

$ob1->metA();
$ob2->metA();

$ob1->metB();
$ob2->metB();
