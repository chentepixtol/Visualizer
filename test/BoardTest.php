<?php

namespace Test\Visualizer;

use Visualizer;


class BoardTest extends \PHPUnit_Framework_TestCase
{
	
	/**
	 * @test
	 */
	public function initialization()
	{
	   $board = new Visualizer\Board(10, 10);
	   $this->assertEquals(10, $board->getWidth());
	   $this->assertEquals(10, $board->getHeight());
	}
}