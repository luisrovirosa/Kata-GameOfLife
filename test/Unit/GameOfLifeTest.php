<?php

namespace GameOfLife\Test\Unit;

use GameOfLife\Board;
use GameOfLife\GameOfLife;

class GameOfLifeTest extends \PHPUnit_Framework_TestCase {

  /** @test */
  public function it_retrieves_the_board() {
    $board = new Board([]);
    $gameOfLife = new GameOfLife($board);

    $this->assertEquals(
      $board,
      $gameOfLife->board()
    );
  }

}