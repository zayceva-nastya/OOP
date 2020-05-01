<?php
spl_autoload_register(function($class_name){//заинк класс как только ктонить будет пытаться создать экз класса
    include $class_name . '.php';
});