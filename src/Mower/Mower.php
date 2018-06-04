<?php

namespace Nadhiir\App\Mower;

class Mower
{
  const LEFT  = 'G';
  const RIGHT = 'D';
  const MOVE  = 'A';

  const NORTH = 'N';
  const EAST  = 'E';
  const SOUTH = 'S';
  const WEST  = 'W';

  protected $distance_x;

  protected $distance_y;

  protected $position_x;

  protected $position_y;

  protected $current_direction;

  public function move(): void
  {
    switch ($this->current_direction) {
      case self::NORTH:
        $this->moveUp();
        break;
      case self::EAST:
        $this->moveRight();
        break;
      case self::SOUTH:
        $this->moveDown();
        break;
      case self::WEST:
        $this->moveLeft();
        break;
    }
  }

  public function rotate($direction): void
  {
    if ($direction == self::RIGHT) {
      $this->rotateClockwise();
    } else {
      $this->rotateAntiClockwise();
    }
  }

  public function setMaxHorizontalDistance($x): void
  {
    $this->distance_x = $x;
  }

  public function setMaxVerticalDistance($y): void
  {
    $this->distance_y = $y;
  }

  public function setPositionX($x): void
  {
    $this->position_x = $x;
  }

  public function setPositionY($y): void
  {
    $this->position_y = $y;
  }

  public function getPositionX()
  {
    return $this->position_x;
  }

  public function getPositionY()
  {
    return $this->position_y;
  }

  public function setCurrentDirection($direction)
  {
    $this->current_direction = $direction;
  }

  public function getCurrentDirection()
  {
    return $this->current_direction;
  }

  private function moveRight()
  {
    if ($this->position_x < $this->distance_x) {
      $this->position_x += 1;
    }
  }

  private function moveLeft()
  {
    if ($this->position_x > 0) {
      $this->position_x -= 1;
    }
  }

  private function moveUp()
  {
    if ($this->position_y < $this->distance_y) {
      $this->position_y += 1;
    }
  }

  private function moveDown()
  {
    if ($this->position_y > 0 ) {
      $this->position_y -= 1;
    }
  }

  private function rotateClockWise(): void
  {
    switch ($this->current_direction) {
      case self::NORTH:
        $this->current_direction = self::EAST;
        break;
      case self::EAST:
        $this->current_direction = self::SOUTH;
        break;
      case self::SOUTH:
        $this->current_direction = self::WEST;
        break;
      case self::WEST:
        $this->current_direction = self::NORTH;
        break;
    }
  }

  private function rotateAntiClockwise(): void
  {
    switch ($this->current_direction) {
      case self::NORTH:
        $this->current_direction = self::WEST;
        break;
      case self::EAST:
        $this->current_direction = self::NORTH;
        break;
      case self::SOUTH:
        $this->current_direction = self::EAST;
        break;
      case self::WEST:
        $this->current_direction = self::SOUTH;
        break;
    }
  }
}