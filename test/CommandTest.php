<?php

namespace Test;

use Visualizer;

class CommandTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     */
    public function vertical()
    {
        $board = new Visualizer\Board(3, 3);
        $command = Visualizer\Command\Factory::create('V 1 1 2 G');
        $this->assertTrue($command instanceOf Visualizer\Command\Vertical);

        $command->run($board);
        $this->assertEquals("GOO\nGOO\nOOO\n", $board->show());
    }

    /**
     * @test
     */
    public function horizontal()
    {
        $board = new Visualizer\Board(3, 3);
        $command = Visualizer\Command\Factory::create('H 1 2 3 G');
        $this->assertTrue($command instanceOf Visualizer\Command\Horizontal);

        $command->run($board);
        $this->assertEquals("OOO\nOOO\nGGO\n", $board->show());
    }

    /**
     * @test
     */
    public function clear()
    {
        $board = new Visualizer\Board(3, 3);
        $board->setColor(1, 1, 'G');
        $this->assertEquals("GOO\nOOO\nOOO\n", $board->show());

        $command = Visualizer\Command\Factory::create('C');
        $this->assertTrue($command instanceOf Visualizer\Command\Clear);
        $command->run($board);
        $this->assertEquals("OOO\nOOO\nOOO\n", $board->show());
    }

    /**
     * @test
     */
    public function exitTest()
    {
        $command = Visualizer\Command\Factory::create('E');
        $this->assertTrue($command instanceOf Visualizer\Command\ExitCommand);
    }

}