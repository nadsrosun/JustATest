<?php

require __DIR__ . '/vendor/autoload.php';

use Nadhiir\Mower\Lawn;
use Nadhiir\Mower\MowerFactory;
use Nadhiir\Mower\MowerHandler;

$testData = [
    1 => [
        'position' => [
            'x' => 1,
            'y' => 2,
        ],
        'direction' => 'N',
        'instructions' => 'GAGAGAGAA',
    ],
    2 => [
        'position' => [
            'x' => 3,
            'y' => 3,
        ],
        'direction' => 'E',
        'instructions' => 'AADAADADDA',
    ]
];

$lawn = Lawn::create(5,5);

foreach ($testData as $key => $data) {
    $mower = MowerFactory::create(
        $data['position']['x'],
        $data['position']['y'],
        $data['direction']
    );

    $handler = new MowerHandler($lawn, $mower);

    $moves = str_split($data['instructions'], 1);
    foreach ($moves as $move) {
        $handler->handle($move);
    }

    echo sprintf("Instruction %s", $key);
    echo '<br/>';
    echo $handler;
    echo '<br/>';
}