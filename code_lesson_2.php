<?php
// Обучение PHP с нуля
#Этот код создан только для обучения php, здесь будет пара тестовых
#заданий, разборов уроков и всего прочего
#Автор решения данных заданий - ICEaDEATH
  $name = "Aleks";
  echo "Привет, меня зовут <b>$name</b> <br>";

#7
  $str_1 = "Code";
  $str_2 = "IT";
  echo "<br> Символ с инексом 0 в строке  \"$str_2\": $str_2[0] ";
  echo "<br> Вот такие дела {$str_1}RS";
  echo "<br>";
  $res = 'time';
  echo $res;
  echo iconv("CP850", "UTF-8", "<br>$res"); // смена кодировки для строки

#8
$x = 10;
$r = 33;
$b1 = $x > 10;
$b2 = $r == 33;
echo "x = $x; r = $r <br>";
echo "x > 10 = $b1; (r == 33) = $b2 <br>";

$b1 = true;
$b2 = false;
echo "b1 = $b1; b2 = $b2 <br>";
echo "Отрицание b1; ".!$b1.'<br>';
echo "b1 или b2: ".($b1 || $b2). '<br>';
echo "b1 или b2: ".($b1 && $b2). '<br>';
echo "b1 исключающее или b2: ".($b1 xor $b2). '<br>';
echo "<br>";
echo (!($b1 && $b2) xor (!$b1 || $x < 10))."<br>";

$x = 5;
$y = "5";
echo "Результаты проверки на равентсво: ".($x == $y). "<br>"; 
echo "Результаты проверки на эквивалентность: ".($x === $y). "<br>"; // Проверят тип переменных, при выводе


?>