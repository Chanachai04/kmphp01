<?php
final class Person {}
class Animal
{
  public function run()
  {
    echo "วิ่งเร็วโคตร";
  }
  final public function eat()
  {
    echo "กินอาหารทั่วๆ ไป";
  }
}


class Dog extends Animal
{
  public function run()
  {
    echo "วิ่งช้าจัง";
  }
  // public function eat()
  // {
  //   echo "กินอาหารหวานได้อย่างเดียว";
  // }
}
