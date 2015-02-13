<?php

namespace Visualizer\Command;

class Horizontal implements CommandInterface
{

    /**
     * @param string $x1
     * @param string $x2
     * @param string $y
     * @param string $color
     */
    public function __construct($x1, $x2, $y, $color)
    {
        $this->y = $y;
        $this->x1 = $x1;
        $this->x2 = $x2;
        $this->color = $color;
    }
    
    public function run(\Visualizer\Board $board)
    {
        for ($x = $this->x1; $x <= $this->x2; $x++) {
            $board->setColor($x, $this->y, $this->color);
        }
        return $board;
    }
}