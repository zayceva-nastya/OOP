<?php

namespace App;

abstract class AbstractPoint
{
  private static $point = null;

  final private function __construct()
  {
  }

   public static function createPoint()
  {
    return (self::$point) ?? self::$point = new static();
  }
}
