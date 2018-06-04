<?php

namespace Nadhiir\Mower;


class MowerHandler
{
    /**
     * @var Lawn $lawn
     */
    private $lawn;

    /**
     * @var Mower $mower
     */
    private $mower;

    public function __construct(Lawn $lawn, Mower $mower)
    {
        $this->lawn  = $lawn;
        $this->mower = $mower;
    }

    /**
     * @param string $instruction
     */
    public function handle(string $instruction): void
    {
        $this->validateInstruction($instruction);

        if (Mower::MOVE === $instruction) {
            $this->moveMower();
            return;
        }

        $this->rotateMower($instruction);
    }

    public function __toString()
    {
        return sprintf(
            "%s %s %s",
            $this->mower->getXPosition(),
            $this->mower->getYPosition(),
            $this->mower->getDirectionCode()
        );
    }

    private function moveMower(): void
    {
        switch ($this->mower->getDirectionCode()) {
            case Direction::NORTH:
                $this->moveMowerNorth();
                break;
            case Direction::EAST:
                $this->moveMowerEast();
                break;
            case Direction::SOUTH:
                $this->moveMowerSouth();
                break;
            case Direction::WEST:
                $this->moveMowerWest();
                break;
        }
    }

    private function moveMowerNorth(): void
    {
        if ($this->mower->getYPosition() < $this->lawn->getHeight()) {
            $this->mower->moveUp();
        }
    }

    private function moveMowerEast(): void
    {
        if ($this->mower->getXPosition() < $this->lawn->getWidth()) {
            $this->mower->moveRight();
        }
    }

    private function moveMowerSouth(): void
    {
        if ($this->mower->getYPosition() > 0) {
            $this->mower->moveDown();
        }
    }

    private function moveMowerWest(): void
    {
        if ($this->mower->getXPosition() > 0) {
            $this->mower->moveLeft();
        }
    }

    private function rotateMower(string $instruction): void
    {
        if (Mower::TURN_RIGHT === $instruction) {
            $this->mower->turnRight();
            return;
        }

        $this->mower->turnLeft();
    }

    private function validateInstruction(string $instruction): void
    {
        if (!in_array($instruction, Mower::ALLOWED_INSTRUCTION, true)) {
            throw new \InvalidArgumentException('Invalid instruction.');
        }
    }
}