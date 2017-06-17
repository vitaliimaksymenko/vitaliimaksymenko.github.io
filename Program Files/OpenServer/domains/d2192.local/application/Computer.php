<?php
/** utf-8 */

namespace application;

use helpers\Console;


/** change class Computer to abstract */
abstract class Computer
{

    private $cpu;
    protected function setCpu($cpu){
        $this->cpu=$cpu;
        return $this;
    }
    public function getCpu()
    {
        return $this->cpu;
    }

    private $ram;
    protected function setRam($ram){
        $this->ram=$ram;
        return $this;
    }
    public function getRam(){
        return $this->ram;
    }

    protected $video;
    protected function setVideo($video){
        $this->video=$video;
        return $this;
    }
    public function getVideo(){
        return $this->video;
    }

    protected $memory;
    protected function setMemory($memory){
        $this->memory=$memory;
        return $this;
    }
    public function getMemory(){
        return $this->memory;
    }

    private $computerName = 'Computer';
    protected function setComputerName($computerName){
        $this->computerName = $computerName;
        return $this;
    }
    protected function getComputerName(){
        return $this->computerName;
    }

    private $isWorking = false;


    public function start()
    {
        $this->isWorking = true;
        Console::printLine($this->getComputerName() . ' is working', Console::$success);
    }

    public function shutDown()
    {
        $this->isWorking = false;
        Console::printLine($this->getComputerName() . ' is off', Console::$failure);
    }

    public function restart()
    {
        if ($this->isWorking) {
            $this->shutDown();

            for ($timer = 5; $timer > 0; $timer--) {
                Console::printLine('.');
                sleep(1);
            }
            echo "<br>" . PHP_EOL;

            $this->start();
        } else {
            Console::printLine($this->getComputerName() . ' must be turned on for restart', Console::$warning);
        }
    }

    public function printParameters()
    {
        if ($this->isWorking) {
            Console::printLine('<<<<<<<<<<', Console::$note);
            Console::printLine("Name: {$this->getComputerName()}");
            Console::printLine("CPU: {$this->getCpu()}");
            Console::printLine("RAM: {$this->getRam()}");
            Console::printLine("Video card: {$this->getVideo()}");
            Console::printLine("Memory: {$this->getMemory()}");
            Console::printLine('>>>>>>>>>>', Console::$note);
        } else {
            Console::printLine($this->getComputerName() . ' must be turned on for print parameters', Console::$failure);
        }
    }

    public abstract function identifyUser();
}

