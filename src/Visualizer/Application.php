<?php

namespace Visualizer;

class Application
{

    public function run($filenameBoard, $program)
    {
        $board = Board::load(file_get_contents($filenameBoard));
        foreach ($this->createCommands($program) as $command) {
            $command->run($board);
        }
        return $board;
    }


    /**
     * @param string $program
     */
    public function createCommands($program)
    {
        return array_filter(array_map(function($line) {
            return Command\Factory::create(trim($line));
        }, explode("\n", $program)));
    }
}