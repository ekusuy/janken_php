<?php

class Player
{
  // じゃんけんの手を表す定数
  const STONE    = 0;
  const SCISSORS = 1;
  const PAPER    = 2;

  //プレイヤークラスの属性
  private $name;

  //プレイヤーの買った回数
  private $winCount = 0;

  //コンストラクタ
  public function __construct($name)
  {
    $this->name = $name;
  }

  //手を出す
  public function showHand(): int
  {
    $randomNum = rand(1, 3);
    if ($randomNum <= 1) {
      // randomNumが１の場合グー
      return self::STONE;
    }
    if ($randomNum <= 2) {
      // randomNumが2の場合チョキ
      return self::SCISSORS;
    }
    if ($randomNum <= 3) {
      // randomNumが3の場合パー
      return self::PAPER;
    }
    return 0;
  }

  // 勝敗
  public function notifyResult(): void
  {
    $this->winCount += 1;
  }

  // 自分の勝った回数を答える
  public function getWinCount(): int
  {
    return $this->winCount;
  }

  public function getName(): string
  {
    return $this->name;
  }
}

//継承の練習として以下を定義
class Murata extends Player
{
  //グーのみ出す
  public function showHand(): int
  {
    return self::STONE;
  }
}

class Yamada extends Player
{
  //パーのみ出す
  public function showHand(): int
  {
    return self::PAPER;
  }
}
