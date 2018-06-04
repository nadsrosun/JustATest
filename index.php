<?php

require __DIR__ . '/vendor/autoload.php';

use Nadhiir\App\Mower\Mower;
use Nadhiir\App\Test\TestFactory;

$test_case = TestFactory::create();

/**
 * Application logic :
 * 1. set max horizontal & max vertical distance from coordinates of 'coin supérieur droit de la pelouse'
 * 2. for each instruction
 *  - set current x & y position (from line 1 of each instruction)
 *  - set default direction (from line 1 of each instruction)
 *  - split the instruction string into array and loop through it (from line 2 of each instruction)
 *  - Perform action need depending on instruction code (move)
 *  - print final coordinates & direction
 *
 */
$mower = new Mower();
$mower->setMaxHorizontalDistance($test_case->getUpperRightCoordinate()[0]);
$mower->setMaxVerticalDistance($test_case->getUpperRightCoordinate()[1]);

foreach ($test_case->getInstructions() as $key => $row) {
  $mower->setPositionX($row['coordinate']['x']);
  $mower->setPositionY($row['coordinate']['y']);
  $mower->setCurrentDirection($row['direction']);

  $moves = str_split($row['instructions'], 1);
  foreach ($moves as $move) {
    if ($move == $mower::MOVE) {
      $mower->move();
    } else {
      $mower->rotate($move);
    }
  }

  echo sprintf("Instruction %s", $key);
  echo '<br/>';
  echo sprintf("%s %s %s", $mower->getPositionX(), $mower->getPositionY(), $mower->getCurrentDirection());
  echo '<br/>';
  echo '<br/>';
}
