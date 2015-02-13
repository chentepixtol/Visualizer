<?php

namespace Visualizer\Command;

interface CommandInterface
{

    public function run(\Visualizer\Board $board);

}