<?php
// Создайте переменную $age.
// Присвойте переменной $age произвольное числовое значение.
// Напишите конструкцию if, которая выводит фразу: “Вам еще работать и работать” при условии, что значение переменной $age попадает в диапазон чисел от 18 до 65 (включительно).
// Расширьте конструкцию if, выводя фразу: “Вам пора на пенсию” при условии, что значение переменной $age больше 65.
// Расширьте конструкцию elseif, выводя фразу: “Вам ещё рано работать” при условии, что значение переменной $age попадает в диапазон чисел от 1 до 17 (включительно).
// Дополните конструкцию ifelseif, выводя фразу: “Неизвестный возраст” при условии, что значение переменной $age не попадет в вышеописанные диапазоны чисел.


$age = 45; 

if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать";
} elseif ($age > 65) {
    echo "Вам пора на пенсию";
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам ещё рано работать";
} else {
    echo "Неизвестный возраст";
}