<?php

/* Автозагрузка классов */
include __DIR__.'/vendor/autoload.php';
$config = require(__DIR__.'/config/console.php');

use framework\helpers\Console;


$console = new Console();

$console->hr()
    ->setColor('green')
    ->writeLn("Digital Solution Framework Console Manager")
    ->setColor()
    ->hr();

$console->showAllColors();

while (true) {
    $command = $console->question("Please enter command (You may use 'help' for more info)");

    switch ($command):

        case 'h':
            $console->setColor('ligth_green')
                ->writeLn("install")
                ->setColor('cyan')
                ->writeLn(' - install mysql structure');
            break;

        default:
            $console->setColor('red')->writeln("Unknown command: ".$command);
            $console->setColor('dark_gray')->writeLn("Use 'help' fro more info.");
            break;

    endswitch;
    $console->setColor();
}

?>