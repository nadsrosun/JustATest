<?php

namespace Nadhiir\Test\Test;

class TestFactory
{
  public static function create()
  {
    return new TestCaseSimple();
  }
}