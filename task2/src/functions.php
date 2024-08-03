<?php

//  @param array $strings
//  @param bool $return

// Функция должна принимать массив строк и выводить каждую строку в отдельном параграфе (тег <p>)
// Если в функцию передан второй параметр true, то возвращать (через return)
// результат в виде одной объединенной строки.


function task1($strings, $returnAsString = true) {
    $output = "";
    foreach ($strings as $str) {
        $output .= "<p>" . $str . "</p>";
    }
    
    if ($returnAsString) {
        return $output;
    } else {
        echo $output;
    }
}


// Функция должна принимать переменное число аргументов.
// Первым аргументом обязательно должна быть строка, обозначающая арифметическое действие,
// которое необходимо выполнить со всеми передаваемыми аргументами.
// Остальные аргументы это целые и/или вещественные числа.

// Пример вызова: calcEverything(‘+’, 1, 2, 3, 5.2);
// Результат: 1 + 2 + 3 + 5.2 = 11.2

// Пример вызова: calcEverything(‘/’, 1, 2, 3, 5.2);
// Результат: 1 / 2 / 3 / 5.2 = 0.30303


function task2($operation, ...$numbers) {
    $result = 0;

    foreach ($numbers as $number) {
       if ($operation == '+') {
        $result += $number;
       } elseif ($operation == '-') {
        $result -= $number;
       } else { 
        if ($number === 0){
            return 'деление на ноль невозможно';
        }
        $result /= $number;
       }
    }

    return $result;
}

// Функция должна принимать два параметра – целые числа.
// Если в функцию передали 2 целых числа, то функция должна отобразить
// таблицу умножения размером со значения параметров, переданных в функцию.
//  (Например если передано 8 и 8, то нарисовать от 1х1 до 8х8).
// Таблица должна быть выполнена с использованием тега <table>
// В остальных случаях выдавать корректную ошибку.


function task3($a, $b)
{
    if (!is_int($a)) {
        trigger_error('A is not integer');
        return false;
    }
    if (!is_int($b)) {
        trigger_error('B is not integer');
        return false;
    }

    if ($a < 0 || $b < 0) {
        trigger_error('Argumentsmust be positive');
        return false;
    }

    $result = '<table>';
    for ($i = 1; $i <= $a; $i++) {
        $result .= '<tr>';
        for ($j = 1; $j <= $b; $j++) {
            $result .= '<td>';
            $result .= $i * $j;
            $result .= '</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';
    echo $result;
}


// Выведите информацию о текущей дате в формате 31.12.2016 23:59
// Выведите unixtime время соответствующее 24.02.2016 00:00:00.
 

date_default_timezone_set('Europe/Moscow');
echo date('d.m.Y H:i');
echo '<br>';
echo strtotime('24.02.2016 00:00:00');
echo '<br>';
echo date('Y-m-d H:i:s', 1456261200);
echo '<br>';


//  Дана строка: “Карл у Клары украл Кораллы”. удалить из этой строки все заглавные буквы “К”.
// Дана строка “Две бутылки лимонада”. Заменить “Две”, на “Три”.

$string = 'Карл у Клары украл Кораллы';
echo str_replace('К', '', $string);
echo '<br>';

$string = 'Две бутылки лимонада';
echo str_replace('Две', 'Три', $string);


// Создайте файл test.txt средствами PHP. Поместите в него текст - “Hello again!”
// Напишите функцию, которая будет принимать имя файла, открывать файл и выводить содержимое на экран.

echo '<br>';
$file = fopen('test.txt', 'w');
fwrite($file, "Hello again!");
fclose($file);

function showFileContent($filename) {
    $file = file_get_contents($filename);
    echo $file;
}



