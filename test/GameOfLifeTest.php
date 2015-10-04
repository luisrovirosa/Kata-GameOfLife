<?php

namespace GameOfLife\Test;

use GameOfLife\Board;
use GameOfLife\DeadCell;
use GameOfLife\GameOfLife;
use GameOfLife\LiveCell;
use GameOfLife\Square;

class GameOfLifeTest extends \PHPUnit_Framework_TestCase {
  /** @test */
  public function it_() {
    $this->markTestIncomplete('Not yet');
    $cell = new LiveCell();
    $square = new Square($cell);
    /** @var Square[] $squares */
    $squares = [$square];
    $board = new Board($squares);
    $gameOfLife = new GameOfLife($board);

    $this->assertEquals(
      new Board([new Square(new DeadCell())]),
      $gameOfLife->board()
    );
  }
}