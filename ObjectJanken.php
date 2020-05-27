<?php
require_once "./Player.php";
require_once "./Judge.php";
require_once "./Tactics.php";
require_once "./RandomTactics.php";

class ObjectJanken
{
  public function Janken()
  {
    $judge = new Judge();
    $murata = new Player("村田");
    $yamada = new Player("山田");

    $judge->startJanken($murata, $yamada);
  }

  public function OnlyJanken()
  {
    $judge = new Judge();
    $murata = new Murata("村田");
    $yamada = new Yamada("山田");

    $judge->startJanken($murata, $yamada);
  }
}

$janken = new  ObjectJanken();
$janken->Janken();
$janken->OnlyJanken();
