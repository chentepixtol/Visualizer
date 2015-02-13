<?php

namespace Visualizer\Command;

class Factory
{
    /**
     * @var array
     */
    protected static $instances = array();

    /**
     * @return
     */
    public static function create($line)
    {
        $params = explode(" ", $line);
        $first = array_shift($params);

        switch ($first) {
            case 'C':
                 if (!isset(static::$instances['C'])) {
                    static::$instances['C'] = new Clear();
                 }
                return static::$instances['C'];
                break;
            case 'X':
                 if (!isset(static::$instances['X'])) {
                    static::$instances['X'] = new ExitCommand();
                 }
                return static::$instances['X'];
                break;
            case 'S':
                 if (!isset(static::$instances['S'])) {
                    static::$instances['S'] = new Show();
                 }
                return static::$instances['S'];
                break;
            case 'V':
                return new Vertical($params[0], $params[1], $params[2], $params[3]);
                break;
            case 'H':
                return new Horizontal($params[0], $params[1], $params[2], $params[3]);
                break;
            
            default:
                # code...
                break;
        }
    }

}