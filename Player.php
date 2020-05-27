<?php

class Player
{
  // じゃんけんの手を表す定数
  private const STONE    = 0;
  private const SCISSORS = 1;
  private const PAPER    = 2;

  //プレイヤークラスの属性
  private $name;

  //プレイヤーの買った回数
  private $winCount = 0;

  //手を出す
  public function showHand(): int
  {
    $hand = 0;
    $randomNum = rand(0, 3);
    if ($randomNum <= 1) {
      // randomNumが0以上１未満の場合グー
      $hand = self::STONE;
    } elseif ($randomNum <= 2) {

      // randomNumが1以上2未満の場合チョキ
      $hand = self::SCISSORS;
    } elseif ($randomNum <= 3) {
      // randomNumが2以上3未満の場合パー
      $hand = self::PAPER;
    }
    return $hand;
  }

  // 勝敗
  public function notifyResult(bool $result): void
  {
    if ($result) {
      $this->winCount += 1;
    }
  }

  // 自分の勝った回数を答える
  public function getWinCount(): int
  {
    return $this->winCount;
  }
}
