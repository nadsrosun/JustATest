<?php

namespace Nadhiir\Mower\Test;

class TestFactory
{
  public static function create()
  {
    return new TestCaseSimple();
  }
}