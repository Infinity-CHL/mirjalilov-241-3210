<?php
// Задание: Тернарный оператор. Дано: $a = 36; $b = '4'; Найти: Если остаток от деления $a на $b больше 0, то вывести сообщение с типом данных результата деления $a на $b и остаток от деления, иначе вывести выражение деления и результат (образец: 2 / 2 = 1). Используем тернарный оператор.
// Исходные данные
$a = 36;
$b = '4';

// Вычисляем остаток от деления
$remainder = $a % $b;

// Используем тернарный оператор
echo $remainder > 0 
    ? "Тип данных результата деления: " . gettype($a / $b) . ", остаток от деления: $remainder" 
    : "$a / $b = " . ($a / $b);
?>