<?php
spl_autoload_register(function ($class_name) { // вызывает каждый разкогда вызывают ее
    include $class_name . '.php';
});