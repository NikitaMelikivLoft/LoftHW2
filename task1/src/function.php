<?php
const NAMES=[
  'Sasha', 'Dima', 'Oleg', 'Misha', 'Vova'
];

function createU() {
    $user=[
        'name'=>NAMES[array_rand(NAMES)],
        'age'=>rand(18,45)

    ];
        return $user;
}