<?php

namespace Nadhiir\Mower;

class Mower
{
    const TURN_LEFT  = 'G';
    const TURN_RIGHT = 'D';
    const MOVE  = 'A';

    const ALLOWED_INSTRUCTION = [
        self::TURN_LEFT,
        self::TURN_RIGHT,
        self::MOVE
    ];

    /**
     * @var Coordinate $position
     */
    private $position;

    /**
     * @var Direction $direction
     */
    private $direction;

    public function __construct(Coordinate $position, Direction $direction)
    {
        $this->position  = $position;
        $this->direction = $direction;
    }

    public function turnRight(): void
    {
        $this->direction->rotateClockWise();
    }

    public function turnLeft(): void
    {
        $this->direction->rotateAntiClockwise();
    }

    public function moveRight(): void
    {
        $this->position->incrementXAxis();
    }

    public function moveLeft(): void
    {
        $this->position->decrementXAxis();
    }

    public function moveUp(): void
    {
        $this->position->incrementYAxis();
    }

    public function moveDown(): void
    {
        $this->position->decrementYAxis();
    }

    public function getDirectionCode(): String
    {
        return $this->direction->getCode();
    }

    public function getXPosition(): int
    {
        return $this->position->getX();
    }

    public function getYPosition(): int
    {
        return $this->position->getY();
    }
}