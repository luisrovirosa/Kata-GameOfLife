<?php

namespace GameOfLife;

class GameOfLife {
  /**
   * @var \GameOfLife\Board
   */
  private $board;
  /**
   * @var \GameOfLife\Rule[]
   */
  private $rules;

  /**
   * GameOfLife constructor.
   * @param \GameOfLife\Board $board
   * @param \GameOfLife\Rule[] $rules
   */
  public function __construct(Board $board, $rules) {
    $this->board = $board;
    $this->rules = $rules;
  }

  /**
   * @return Board
   */
  public function board() {
    return $this->board;
  }

  public function iterate() {
    $this->board->iterate($this->rules);
  }
}