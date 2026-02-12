<?php
class Test01
{
  public const U_THAILAND = "SAU";
  public static $data = "100";
  public $info = "999";

  public static function showWow()
  {
    self::$data = "333";
    echo "Wow!";
  }
  public function showHi()
  {
    echo self::U_THAILAND . "<br>";
    $this->info = "555";
    self::$data = "444";
    self::showWow();
    echo "Hi!";
  }
}

Test01::$data = "200";
echo Test01::$data . "<br>";

Test01::showWow();
