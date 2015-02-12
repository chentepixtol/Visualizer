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

    /**
     * @test
     */
    public function showBoard()
    {
        $board = new Visualizer\Board(3, 4);
        $this->assertEquals("OOO\nOOO\nOOO\nOOO\n", $board->show());
    }

    /**
     * @test
     */
    public function setCoordinate()
    {
        $board = new Visualizer\Board(3, 4);
        $board->setColor(2, 3, 'G');
        $this->assertEquals("OOO\nOOO\nOGO\nOOO\n", $board->show());
    }

    /**
     * @test
     * @expectedException \Visualizer\Exception\OutOfRange
     */
    public function invalidCoordinate()
    {
        $board = new Visualizer\Board(3, 4);
        $board->setColor(5, 3, 'G');
    }
}