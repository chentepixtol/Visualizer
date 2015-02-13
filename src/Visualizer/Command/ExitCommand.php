<?php

namespace Visualizer\Command;

class ExitCommand implements CommandInterface
{
    /**
     * @param \Visualizer\Board $board
     * @return \Visualizer\Board
     */
    public function run(\Visualizer\Board $board)
    {
        exit();
    }

}