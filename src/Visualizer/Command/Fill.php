<?php

namespace Visualizer\Command;

class Fill implements CommandInterface
{

    protected $x;
    protected $y;
    protected $color;
    protected $originalColor;

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
        $this->originalColor = $board->getCoordinate($this->x, $this->y);
        $checked = array();
        $this->fillArea($this->x, $this->y, $board, $checked);

        return $board;
    }

    protected function fillArea($x, $y, \Visualizer\Board $board, &$checked)
    {
        if (isset($checked[$x][$y])) {
            return;
        }
        $currentColor = $board->getCoordinate($x, $y);
        $checked[$x][$y] = true;
        if ($this->originalColor == $currentColor) {
            $board->setColor($x, $y, $this->color);
            if ($board->isValid($x-1, $y)) {
                $this->fillArea($x-1, $y, $board, $checked);
            }
            if ($board->isValid($x+1, $y)) {
                $this->fillArea($x+1, $y, $board, $checked);
            }
            if ($board->isValid($x, $y-1)) {
                $this->fillArea($x, $y-1, $board, $checked);
            }
            if ($board->isValid($x, $y+1)) {
                $this->fillArea($x, $y+1, $board, $checked);
            }
        }
    }

}