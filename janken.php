<?php

class SimpleJanken
{
  public static $STONE = 0;
  public static $SCISSORS = 1;
  public static $PAPER = 2;

  public function janken()
  {
    for ($cnt = 0; $cnt < 3; $cnt++) {
      $randomNum = 0;
      $player1Hand = 0;

      $randomNum = rand(0, 3);
      if ($randomNum <= 1) {

        // randomNumが0以上１未満の場合グー
        $player1Hand = self::$STONE;

        echo "グー";
      } elseif ($randomNum <= 2) {

        // randomNumが1以上2未満の場合チョキ
        $player1Hand = self::$SCISSORS;

        echo "チョキ";
      } elseif ($randomNum <= 3) {

        // randomNumが2以上3未満の場合パー
        $player1Hand = self::$PAPER;

        echo "パー";
      }

      $player2Hand = 0;

      $randomNum = rand(0, 3);
      if ($randomNum <= 1) {

        // randomNumが0以上１未満の場合グー
        $player2Hand = self::$STONE;

        echo "グー";
      } elseif ($randomNum <= 2) {

        // randomNumが1以上2未満の場合チョキ
        $player2Hand = self::$SCISSORS;

        echo "チョキ";
      } elseif ($randomNum <= 3) {

        // randomNumが2以上3未満の場合パー
        $player2Hand = self::$PAPER;

        echo "パー";
      }

      $player1WinCount = 0;
      $player2WinCount = 0;


      if (
        $player1Hand == self::$STONE && $player2Hand == self::$SCISSORS ||
        $player1Hand == self::$SCISSORS && $player2Hand == self::$PAPER ||
        $player1Hand == self::$PAPER && $player2Hand == self::$STONE
      ) {
        //プレイヤー１の勝ち回数を加算
        $player1WinCount++;

        echo "player1の勝ち" . "\n";
      } elseif (
        $player1Hand == self::$STONE && $player2Hand == self::$PAPER ||
        $player1Hand == self::$SCISSORS && $player2Hand == self::$STONE ||
        $player1Hand == self::$PAPER && $player2Hand == self::$SCISSORS
      ) {
        //プレイヤー１の勝ち回数を加算
        $player2WinCount++;

        echo "player2の勝ち" . "\n";
      } else {
        echo "引き分け" . "\n";
      }
    }

    echo
      "じゃんけん終了" . "\n";


    if ($player1WinCount > $player2WinCount) {
      // プレイヤー１の勝ちを表示
      echo "プレイヤー1の勝ち" . "\n";
    } elseif ($player1WinCount < $player2WinCount) {
      // プレイヤー2の勝ちを表示
      echo "プレイヤー2の勝ち" . "\n";
    } else {
      echo "引き分け" . "\n";
    }
  }
}

$battle = new SimpleJanken();
$battle->janken();
