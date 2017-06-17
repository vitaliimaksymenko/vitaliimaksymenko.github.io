<?php
/** utf-8 */

namespace application;

use helpers\Console;


/** create class Asus */
class Asus extends Computer implements IComputer
{
    const IS_DESKTOP = false;

    public function __construct()
    {
        $this
            ->setComputerName('Asus X540LJ')
            ->setCpu('Intel Core i3-4005U (1.7 Ghz)')
            ->setRam('RAM 6 Gb')
            ->setVideo('nVidia GeForce GT 920M')
            ->setMemory('HDD 1 Tb');
    }

    public function identifyUser()
    {
        Console::printLine($this->getComputerName() . ': Identify by login and password', Console::$note);
    }
}