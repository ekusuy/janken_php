<?php

class Judge
{
  /**
   * じゃんけんを開始
   * @param player1
   * @param player2
   */
  public function startJanken(Player $player1, Player $player2): void
  {
    // じゃんけんの開始を宣言
    echo "【じゃんけん開始】" . "\n";

    // じゃんけんを３回する
    for ($cnt = 0; $cnt < 3; $cnt++) {
      // 何回戦かを表示
      echo "【" . ($cnt + 1) . "回戦】" . "\n";

      $winner = $this->judgeJanken($player1, $player2);

      if ($winner != null) {
        //勝者を表示
        echo $winner->getName() . "の勝ち！\n";
        $winner->notifyResult();
      } else {
        echo "引き分け" . "\n";
      }
    }
    //　じゃんけん終了を宣言
    echo "じゃんけん終了" . "\n";

    $finalWinner = $this->judgeFinalWinner($player1, $player2);

    //結果の表示
    echo $player1->getWinCount() . " 対 " . $player2->getWinCount() . "で";

    if ($finalWinner != null) {
      echo $finalWinner->getName() . "の勝ちです\n";
    } else {
      echo "引き分けです\n";
    }
  }

  /**
   * じゃんけんの勝ちを判定する
   *
   * @param Player $player1
   * @param Player $player2
   * @return Player
   */
  private function judgeJanken(Player $player1, Player $player2): ?Player
  {
    //プレイヤー1が手を出す
    $player1hand = $player1->showHand();

    //プレイヤー2が手を出す
    $player2hand = $player2->showHand();

    $this->printHand($player1hand);
    echo " vs ";
    $this->printHand($player2hand);
    echo "\n";

    // プレイヤー1が勝ち
    if (
      $player1hand == Player::STONE && $player2hand == Player::SCISSORS ||
      $player1hand == Player::SCISSORS && $player2hand == Player::PAPER ||
      $player1hand == Player::PAPER && $player2hand == Player::STONE
    ) {
      return $player1;
    }

    // プレイヤー2が勝ち
    if (
      $player1hand == Player::STONE && $player2hand == Player::PAPER ||
      $player1hand == Player::SCISSORS && $player2hand == Player::STONE ||
      $player1hand == Player::PAPER && $player2hand == Player::SCISSORS
    ) {
      return $player2;
    }

    // どちらでもない場合は引き分け(null)を返す
    return null;
  }

  /**
   * 勝者を返す
   *
   * @param Player $player1
   * @param Player $player2
   * @return Player
   */
  private function judgeFinalWinner(Player $player1, Player $player2): ?Player
  {
    $player1WinCount = $player1->getWinCount();
    $player2WinCount = $player2->getWinCount();

    if ($player1WinCount > $player2WinCount) {
      return $player1;
    }

    if ($player1WinCount < $player2WinCount) {
      return $player2;
    }

    return null;
  }

  /**
   * ジャンケンの手を表示
   *
   * @param integer $hand
   * @return void
   */
  private function printHand(int $hand): void
  {
    switch ($hand) {
      case Player::STONE:
        echo "グー";
        break;

      case Player::SCISSORS:
        echo "チョキ";
        break;

      case Player::PAPER:
        echo "パー";
        break;

      default:
        break;
    }
  }
}
