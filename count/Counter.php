<?php

class Counter
{
  public static $counter = 0;

  public function __construct()
  {
    Counter::$counter++;
  }
}
