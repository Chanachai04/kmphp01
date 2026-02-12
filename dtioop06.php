<?php
abstract class Sau01
{
  public function metA()
  {
    echo "AAA<br>";
  }
  abstract public function metB();
  abstract public function metC(): string;
}

interface Sau02
{
  public function modB();
  public function modC(): int;
}
