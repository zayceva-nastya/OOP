<?php

namespace Core;



use Controller\TableController;
use Model\DbTable;
use View\View;
use mysqli;


class Dispatcher
{
    public function __construct()
    {
    }

    public function run()
    {
        // ?action=show
        // ?action=add
        include __DIR__ . "/../../config/config.php";

        // print_r($config);
        $view = new View();
        $view->setLayout('mainLayout');
        
        $controller = new TableController(
            new DbTable(
                new mysqli(
                    $config['mysql']['host'],
                    $config['mysql']['user'],
                    $config['mysql']['password'],
                    $config['mysql']['database']
                ),
                $config['mysql']['table']
            ),
            $view
        );

        $action = "action" . $_GET['action'];

        if (method_exists($controller, $action)) { //проверяет есть ли такой метод в классе
            $controller->{$action}(); //выбирается метод который будет передан через запрос(приклеиться с action)

        }

        // $controller->actionShow();

    }
}
