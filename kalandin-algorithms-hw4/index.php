<?php

/*
	В качестве финального домашнего задания подойдет один из предложенных вариантов

	Вариант №1

	1. Реализовать построение и обход дерева для математического выражения. Переделать пример с урока со стека на дерево, где теперь операторы перейдут в узлы, а операнды в дочерние элементы
	2. **Реализовать решение уравнений и примеров из 1 задания
	3. Рассмотреть подход прямой и обратной польских нотаций. Чем они лучше деревьев в первой задаче? Нужны ли деревья в их реализации?

	Вариант №2

	1. Реализовать функцию a+b, где каждое из чисел а и b имеет не менее 1000 разрядов. Числа хранятся в файле chisla.txt на двух строчках. Ответ вписать на третью строчку
	2. Для натуральных чисел a и n вычислить a^n. Входные числа имеют диапазон 1 <= a <= 9 и 1 <= n <= 5000. Ответ вывести в файл otvet.txt
	3.* Выполнить умножение двух чисел a * b , где а и b имеют до 100 разрядов

	Вариант №3

	1. Стать успешным программистом.
	Сдавать сей вариант дз можно авансом с последующей отчетностью
*/




/* Вариант №2 */

/* 1. */
sum('chisla.txt');

function sum($file) {
	return;

	// Читаем файл и находим числа
	$numA = trim(file($file)[0]);
	$numB = trim(file($file)[1]);

	$maxLen = max(strlen($numA), strlen($numB));
	$numA = str_pad($numA, $maxLen, '0', 0);
	$numB = str_pad($numB, $maxLen, '0', 0);

	echo "Число A: {$numA} <br>" . PHP_EOL;
	echo "+ <br>" . PHP_EOL;
	echo "Число B: {$numB} <br>" . PHP_EOL;
	echo "= <br>" . PHP_EOL;

	$result = '';
	$inMind = 0;
	$debug = false;

	for ($i = $maxLen - 1; $i >= 0; $i--) {
	    $a = (int)$numA[$i];
	    $b = (int)$numB[$i];

	    $sum = $a + $b;
	    $sumFinal = $sum + $inMind;

	    if ($sumFinal > 9) {
	        $inMind = 1;
	        $sumFinal %= 10;
	    } else {
	        $inMind = 0;
	    }

	    if ($debug) {
	        printf('%d + %d = %d (в уме %d) пишем %d <br>' . PHP_EOL, $a, $b, $sum, $inMind, $sumFinal);
	    }

	    $result = $sumFinal . $result;
	}

	if ($inMind > 0) {
	    $result = $inMind . $result;
	}

	echo $result . PHP_EOL;

	// Записываем результат в файл
	$fileContent = file_get_contents($file);
	$fileContent .= "\n{$result}";
	file_put_contents($file, $fileContent);
}


/* 2. */


// $a = 2;
// $n = 200;
// $r = 1;

// for ($i = 1; $i < $n; $i++) { 
// 	$r += $r * $a;
// }

// print_r($r);


$a = 4;
$string = '00000000000000000000000000000000';


while ($a) {

}



// Var a, n, i: integer;
//   r: longint;
//  begin
//   r := 1;
//   readln(a, n);
//   for i := 1 to n do
//   r := r * a;
//   write(r);
// end.

// $a = 9;
// $n = 5000;

// for ($i = 0; $i < 9; $i++) { 
// 	for ($i = 0; $i < 5000; $i++) {

// 	}
// }

// print_r($a^$n);

// 1 <= a <= 9 и 1 <= n <= 5000. 

// 00000000000000000000000000000111 // 7





