<?php

namespace GameOfLife\Test\Unit;

use GameOfLife\Board;
use GameOfLife\GameOfLife;
use Prophecy\PhpUnit\ProphecyTestCase;

class GameOfLifeTest extends ProphecyTestCase {

  /** @test */
  public function it_retrieves_the_board() {
    $board = new Board([]);
    $rules = [];
    $gameOfLife = new GameOfLife($board, $rules);

    $this->assertEquals(
      $board,
      $gameOfLife->board()
    );
  }

  /** @test */
  public function it_iterates_the_board_with_the_rules() {
    $board = $this->prophesize('GameOfLife\Board');
    $rules = [];
    $gameOfLife = new GameOfLife($board->reveal(), $rules);

    $gameOfLife->iterate();

    $board->iterate($rules)->shouldBeCalled();
  }

}