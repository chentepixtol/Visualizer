<?php

namespace Visualizer\Command;

interface CommandInterface
{

    /**
     * @param \Visualizer\Board $board
     * @return \Visualizer\Board
     */
    public function run(\Visualizer\Board $board);

}