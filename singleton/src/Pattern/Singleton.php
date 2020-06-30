<?php

namespace  App\Pattern;

abstract class Singleton
{
    private static $instance = null; //будем хранить объект, если объекта нет, то мы его должны создать и поместить, а в след раз вернуть этот же 
    final private function __construct()
    {
    }
    static public function createInstance()
    {
        if (self::$instance === null) {
            self::$instance = new static(); //познее статическое связывание static(-имя класса в котором будет использоваться
        }
        return self::$instance;
    }
}
