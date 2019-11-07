<?php

$array = [
    [
        'kegliai' => [
            '4th_line' => [true, false, false, true],
            '3rd_line' => [false, false, true],
            '2nd_line' => [true, false],
            '1st_line' => [true],
        ],
        'takelio_kondicija' => ['patenkinama']
    ],
    [
        'kegliai' => [
            '4th_line' => [false, false, false, false],
            '3rd_line' => [false, false, false],
            '2nd_line' => [false, false],
            '1st_line' => [false],
        ],
        'takelio_kondicija' => ['xujova']
    ],
];
var_dump($array);
