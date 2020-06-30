<?php

namespace  App\Pattern;

abstract class Singleton
{
  private static $instance = null;

  final private function __construct()
  {
  }

   public static function createInstance()
  {
    return (self::$instance) ?? self::$instance = new static();

    //     if (self::$instance === null) {
    //         self::$instance = new static();
    //     }
    //     return self::$instance;
  }
}
