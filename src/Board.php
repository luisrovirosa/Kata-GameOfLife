<?php

namespace GameOfLife;

class Board {

  /**
   * Board constructor.
   * @param \GameOfLife\Square[] $squares
   */
  public function __construct($squares) {
  }

  /**
   * @param Rule[] $rules
   * @throws \Exception
   */
  public function iterate($rules) {
    throw new \Exception('Not implemented yet');
  }
}