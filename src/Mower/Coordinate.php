<?php

namespace Nadhiir\App\Mower;

class Coordinate
{
    /**
     * @var int $x
     */
    private $x;

    /**
     * @var int $y
     */
    private $y;

    public function __construct(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public static function createFromPoint(int $x, int $y): self
    {
        return new self($x, $y);
    }

    public function incrementXAxis(): void
    {
        $this->x += 1;
    }

    public function decrementXAxis(): void
    {
        $this->x -= 1;
    }

    public function incrementYAxis(): void
    {
        $this->y += 1;
    }

    public function decrementYAxis(): void
    {
        $this->y -= 1;
    }

    /**
     * @return int $x
     */
    public function getX(): int
    {
        return $this->x;
    }

    /**
     * @return int $y
     */
    public function getY(): int
    {
        return $this->y;
    }
}