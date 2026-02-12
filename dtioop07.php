<?php
require_once './dtioop06.php';
class Test01 extends Sau01
{
  public function metB()
  {
    echo "BBB<br>";
  }
  public function metC(): string
  {
    echo "CCC<br>";
    return "Wow wow wow";
  }
}

class Test02 implements Sau02
{
  public function modB()
  {
    echo "DDD<br>";
  }

  public function modC(): int
  {
    echo "EEE<br>";
    return 123;
  }
}

$ob1 = new Test01();
$ob2 = new Test02();

$ob1->metA();
