<?php
/** utf-8 */

require_once(__DIR__ . '/Autoload.php');
spl_autoload_register(['Autoload', 'loader']);

$macBook = new \application\MacBook();
$macBook->start();
$macBook->printParameters();
$macBook->identifyUser();
echo "<br>" . PHP_EOL;

$asus = new \application\Asus();
$asus->start();
$asus->printParameters();
$asus->identifyUser();
echo "<br>" . PHP_EOL;

$lenovo = new \application\Lenovo();
$lenovo->start();
$lenovo->printParameters();
$lenovo->identifyUser();
