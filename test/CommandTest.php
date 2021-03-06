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
        $command = Visualizer\Command\Factory::create('X');
        $this->assertTrue($command instanceOf Visualizer\Command\ExitCommand);
    }

    /**
     * @test
     */
    public function show()
    {
        $command = Visualizer\Command\Factory::create('S');
        $this->assertTrue($command instanceOf Visualizer\Command\Show);
    }

    /**
     * @test
     */
    public function pixel()
    {
        $board = new Visualizer\Board(3, 3);

        $command = Visualizer\Command\Factory::create('L 1 1 G');
        $this->assertTrue($command instanceOf Visualizer\Command\Pixel);
        
        $command->run($board);
        $this->assertEquals("GOO\nOOO\nOOO\n", $board->show());
    }

    /**
     * @test
     */
    public function image()
    {
        $board = new Visualizer\Board(30, 30);
        $command = Visualizer\Command\Factory::create('I 2 2');
        $command->run($board);
    }

    /**
     * @test
     */
    public function fill()
    {
        $board = new Visualizer\Board(6, 6);
        $board->setColor(2, 1, 'M');
        $board->setColor(2, 2, 'M');
        $board->setColor(3, 2, 'M');
        $board->setColor(4, 2, 'M');
        $board->setColor(5, 2, 'M');
        $board->setColor(5, 3, 'M');
        $board->setColor(5, 4, 'M');
        $board->setColor(4, 4, 'M');
        $board->setColor(3, 4, 'M');
        $board->setColor(2, 4, 'M');
        $board->setColor(2, 5, 'M');
        $board->setColor(3, 5, 'M');
        $board->setColor(3, 6, 'M');

        $command = Visualizer\Command\Factory::create('F 3 4 I');
        $command->run($board);
        $this->assertEquals("OIOOOO\nOIIIIO\nOOOOIO\nOIIIIO\nOIIOOO\nOOIOOO\n", $board->show());
    }

    /**
     * @test
     */
    public function tux()
    {
        $application = new Visualizer\Application();
        $board = $application->run(dirname(__FILE__) . '/../tux.txt', "F 22 50 .\nF 77 50 .\n");
        echo "\n";
        echo $board->show();
        echo "\n";
        $this->assertTrue(true);
    }

}