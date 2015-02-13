<?php

namespace Visualizer\Command;

class Show implements CommandInterface
{
    /**
     * @param \Visualizer\Board $board
     * @return \Visualizer\Board
     */
    public function run(\Visualizer\Board $board)
    {
        echo $board->show();
        return $board;
    }

}