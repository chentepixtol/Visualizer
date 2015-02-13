<?php

namespace Visualizer\Command;

class Vertical implements CommandInterface
{

    /**
     * @param string $x
     * @param string $y1
     * @param string $y2
     * @param string $color
     */
    public function __construct($x, $y1, $y2, $color)
    {
        $this->x = $x;
        $this->y1 = $y1;
        $this->y2 = $y2;
        $this->color = $color;
    }
    
    public function run(\Visualizer\Board $board)
    {
        for ($y = $this->y1; $y<= $this->y2; $y++) {
            $board->setColor($this->x, $y, $this->color);
        }
    }
}