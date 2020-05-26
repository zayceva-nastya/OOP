<?php
session_start();

include "../src/autoload.php";

use Core\Dispatcher;

(new Dispatcher())->run();


