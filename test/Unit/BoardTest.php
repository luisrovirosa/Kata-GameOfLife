<?php

namespace GameOfLife\Test\Unit;

use GameOfLife\Board;
use Prophecy\PhpUnit\ProphecyTestCase;

class BoardTest extends ProphecyTestCase {
  /** @test */
  public function it_() {
    $cell = $this->prophesize('\GameOfLife\Cell');
    $squares = [$cell];
    $board = new Board($squares);

    $rules = [];
    $board->iterate($rules);

    $this->markTestIncomplete('Test not finished');
  }
}
