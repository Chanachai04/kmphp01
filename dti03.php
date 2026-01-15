<?php
// no parameter no return
function showHello()
{
  echo "<h1 style='color: red;'>Hello World</h1>";
}

showHello();
// have parameter no return
function showMessage($msg)
{
  echo "<h2 style='color:blue;'>$msg</h2>";
}

showMessage("Welcome to PHP");
// no parameter have return
function getGreeting()
{
  return "Hello PHP";
}

$result = getGreeting();
echo $result;

// have parameter have return
function addNumber($a, $b)
{
  return $a + $b;
}

$sum = addNumber(10, 20);
echo "ผลรวม = " . $sum;
