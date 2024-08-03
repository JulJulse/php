<?php
// Заполните ячейки значениями соответсвенно: “X5”, 120, 5, “2015”.
// Создайте массивы $toyota' и '$opel аналогичные массиву $bmw (заполните данными).
// Объедините три массива в один многомерный массив.
//Выведите значения всех трех массивов

$bmw = [
    'model' => 'X5',
    'speed' => 120,
    'doors' => 5,
    'year' => 2015,
];
$toyota = [
    'model' => 'Camry',
    'speed' => 105,
    'doors' => 5,
    'year' => 2011,
];
$opel = [
    'model' => 'Astra',
    'speed' => 100,
    'doors' => 4,
    'year' => 2017,
];

$cars = ['bmw' => $bmw, 'toyota' => $toyota, 'opel' => $opel];
foreach ($cars as $name => $car) {
    echo "CAR $name<br>";
    echo "{$car['model']} {$car['speed']} {$car['doors']} {$car['year']}<br><br>";
}