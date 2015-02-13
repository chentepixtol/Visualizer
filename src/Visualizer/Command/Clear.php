<?php

namespace Visualizer\Command;

class Clear implements CommandInterface
{
    /**
     * @param \Visualizer\Board $board
     * @return \Visualizer\Board
     */
    public function run(\Visualizer\Board $board)
    {
        $board->clear();
        return $board;
    }

}