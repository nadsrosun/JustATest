<?php

namespace Nadhiir\Mower\Test;

class TestCaseSimple
{
  public function getUpperRightCoordinate()
  {
    return [5, 5];
  }

  public function getInstructions()
  {
    return [
      1 => [
        'coordinate' => [
          'x' => 1,
          'y' => 2,
        ],
        'direction' => 'N',
        'instructions' => 'GAGAGAGAA',
      ],
      2 => [
        'coordinate' => [
          'x' => 3,
          'y' => 3,
        ],
        'direction' => 'E',
        'instructions' => 'AADAADADDA',
      ]
    ];
  }
}