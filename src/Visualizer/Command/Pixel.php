<?php

namespace Visualizer\Command;

class Pixel implements CommandInterface
{

    /**
     * @param string $x
     * @param string $y
     * @param string $color
     */
    public function __construct($x, $y, $color)
    {
        $this->y = $y;
        $this->x = $x;
        $this->color = $color;
    }

    /**
     * @param \Visualizer\Board $board
     * @return \Visualizer\Board
     */
    public function run(\Visualizer\Board $board)
    {
        $board->setColor($this->x, $this->y, $this->color);
        return $board;
    }

}