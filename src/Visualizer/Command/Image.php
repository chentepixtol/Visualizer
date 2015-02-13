<?php

namespace Visualizer\Command;

class Image implements CommandInterface
{

    /**
     * @param string $x
     * @param string $y
     */
    public function __construct($x, $y)
    {
        $this->y = $y;
        $this->x = $x;
    }

    /**
     * @param \Visualizer\Board $board
     * @return \Visualizer\Board
     */
    public function run(\Visualizer\Board $board)
    {
        $board->resize($this->x, $this->y);
        return $board;
    }

}