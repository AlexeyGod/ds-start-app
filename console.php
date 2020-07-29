<?php

/* Автозагрузка классов */
include __DIR__.'/vendor/autoload.php';
$config = require(__DIR__.'/config/console.php');

use framework\helpers\Console;
use framework\core\Application;


$console = new Console();

$console->hr()
//    ->setColor('green')
    ->writeLn("Digital Solution Framework Console Manager")
//    ->setColor()
    ->hr();

//$console->showAllColors();

while (true) {
    $command = $console->question("Please enter command (You may use 'help' for more info)");

    switch (trim($command)):

        case 'help':

            $console
                ->writeLn("+---------------+------------------------------------------------------------+")
                ->writeLn("|    COMMAND    |                      DESCRIPTION                           |")
                ->writeLn("+===============+============================================================+")
                ->writeLn("| install-db    |   Install mysql structure                                  |")
                ->writeLn("+---------------+------------------------------------------------------------+")
                ->writeLn("| exit          |   Close PHP-Handler and return bash-terminal               |") 
                ->writeLn("+---------------+------------------------------------------------------------+");

        break;

        case 'exit';
            exit();
        break;

        case 'install-db':
            $app = new Application($config);
            $app->terminal->run($console);
        break;

        default:
            $console->writeLn("Unknown command: ".$command);
            $console->writeLn("Use 'help' fro more info.");
        break;

    endswitch;

    //break;
}

?>