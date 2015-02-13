<?php

namespace Visualizer\Command;

class Factory
{

    /**
     * @return
     */
    public static function create($line)
    {
        $params = explode(" ", $line);
        $first = array_shift($params);

        switch ($first) {
            case 'V':
                return new Vertical($params[0], $params[1], $params[2], $params[3]);
                break;
            
            default:
                # code...
                break;
        }
    }

}