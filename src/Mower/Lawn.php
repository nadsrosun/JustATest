<?php

namespace Nadhiir\Mower;

class Lawn
{
    /**
     * @var int $width
     */
    private $width;

    /**
     * @var int $height
     */
    private $height;

    public function __construct(int $width, int $height)
    {
        $this->width  = $width;
        $this->height = $height;
    }

    public static function create(int $width, int $height): self
    {
        return new self($width, $height);
    }

    /**
     * @return int $width
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @return int $height
     */
    public function getHeight(): int
    {
        return $this->height;
    }
}