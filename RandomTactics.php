<?php

class RandomTactics implements Tactics
{
  /**
   * 戦略を読み、ジャンケンの手を得る
   *
   * @return ジャンケンの手
   */
  public function readTactics(): int
  {
    $randomNum = rand(1, 3);
    if ($randomNum <= 1) {
      // randomNumが１の場合グー
      return Player::STONE;
    }
    if ($randomNum <= 2) {
      // randomNumが2の場合チョキ
      return Player::SCISSORS;
    }
    if ($randomNum <= 3) {
      // randomNumが3の場合パー
      return Player::PAPER;
    }
    return 0;
  }
}
