<?php

namespace Nadhiir\Mower;

final class MowerFactory
{
    public static function create(int $x, int $y, string $direction): Mower
    {
        return new Mower(
            Coordinate::createFromPoint($x, $y),
            Direction::createFromCode($direction)
        );
    }
}