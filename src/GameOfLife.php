<?php

namespace GameOfLife;

class GameOfLife {
  /**
   * @var \GameOfLife\Board
   */
  private $board;

  /**
   * GameOfLife constructor.
   * @param \GameOfLife\Board $board
   */
  public function __construct($board) {
    $this->board = $board;
  }

  /**
   * @return Board
   */
  public function board() {
    return $this->board;
  }

  public function iterate() {
  }
}