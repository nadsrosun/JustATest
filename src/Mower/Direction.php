<?php

namespace Nadhiir\Mower;

class Direction
{
    const NORTH = 'N';
    const EAST  = 'E';
    const SOUTH = 'S';
    const WEST  = 'W';

    const ALLOWED_DIRECTION = [
        self::NORTH,
        self::EAST,
        self::SOUTH,
        self::WEST
    ];

    /**
     * @var string $code
     */
    private $code;

    public function __construct(string $code)
    {
        $this->validateDirection($code);

        $this->code = $code;
    }

    public static function createFromCode(string $code): self
    {
        return new self($code);
    }

    public function rotateClockWise(): void
    {
        switch ($this->code) {
            case self::NORTH:
                $this->code = self::EAST;
                break;
            case self::EAST:
                $this->code = self::SOUTH;
                break;
            case self::SOUTH:
                $this->code = self::WEST;
                break;
            case self::WEST:
                $this->code = self::NORTH;
                break;
        }
    }

    public function rotateAntiClockwise(): void
    {
        switch ($this->code) {
            case self::NORTH:
                $this->code = self::WEST;
                break;
            case self::EAST:
                $this->code = self::NORTH;
                break;
            case self::SOUTH:
                $this->code = self::EAST;
                break;
            case self::WEST:
                $this->code = self::SOUTH;
                break;
        }
    }

    /**
     * @return string $code
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    private function validateDirection(string $code): void
    {
        if (!in_array($code, self::ALLOWED_DIRECTION, true)) {
            throw new \InvalidArgumentException('Invalid direction.');
        }
    }
}