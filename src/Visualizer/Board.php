<?php

namespace Visualizer;

class Board
{
    const WHITE = 'O';

    protected $width;

    protected $height;

    protected $coordinates = array();

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getCoordinate($x, $y, $default = null)
    {
        return isset($this->coordinates[$x][$y]) ? $this->coordinates[$x][$y] : $default;
    }

    /**
     * @return string
     */
    public function show()
    {
        $str = "";
        for($y=1; $y<=$this->getHeight(); $y++) {
            for($x=1; $x<=$this->getWidth(); $x++) {
                $str .= $this->getCoordinate($x, $y, static::WHITE);
            }
            $str .= "\n";
        }
        return $str;
    }
}