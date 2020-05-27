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

  private $tactics;

  //コンストラクタ
  public function __construct($name)
  {
    $this->name = $name;
  }


  /**
   * プレイヤーに戦略を渡す
   *
   * @param Tactics $tactics
   * @return void
   */
  public function setTactics(Tactics $tactics)
  {
    $this->tactics = $tactics;
  }

  /**
   * ジャンケンの手を出す
   *
   * @return ジャンケンの手
   */
  public function showHand(): int
  {
    return $this->tactics->readTactics();
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
