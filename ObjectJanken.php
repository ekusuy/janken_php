<?php
require_once "./Player.php";
require_once "./Judge.php";

class ObjectJanken
{
  public function Janken()
  {
    $judge = new Judge();
    $murata = new Player("村田");
    $yamada = new Player("山田");

    $judge->startJanken($murata, $yamada);
  }
}

$janken = new  ObjectJanken();
$janken->Janken();
