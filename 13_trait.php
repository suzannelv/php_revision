<?php

trait Test {
  function demo(){
    echo 'c\'est un test <br/>';
  }
}

trait Dun 
{
  use Test;
  function defense(){
      echo "defenser <br/>";
  }
 
  function attack(){
      echo 'dun attack <br/>';
  }

}

trait Sword
{
  function attack(){
    echo 'swword attack <br/>';
  }
}

class Hero {
   // 命名冲突attack
  use Dun, Sword {
    Dun::attack insteadOf Sword;
    Sword ::attack as Sattack;

  }
}

$p1 = new Hero();
$p1->defense();
$p1->demo();
$p1->attack();
$p1->Sattack();
