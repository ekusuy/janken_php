<?php

interface Tactics
{

  /**
   * 戦略を読みジャンケンの手を得る
   *
   * @return ジャンケンの手
   */
  public function readTactics(): int;
}
