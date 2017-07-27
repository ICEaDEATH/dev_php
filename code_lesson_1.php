<?php
// Обучение PHP с нуля
#Этот код создан только для обучения php, здесь будет пара тестовых
#заданий, разборов уроков и всего прочего
#Автор решения данных заданий - ICEaDEATH
  $name = "Aleks";
  echo "Привет, меня зовут <b>$name</b> <br>";

#2
  $age = 18;
  echo "Мой возраст (на момент написания) ", $age, " лет";
  echo '<br>';
  echo PHP_INT_MAX;
  echo '<br>';

  $d_1 = 1.7;
  $d_2 = 40.4e6;
  $d_3 = 454.54e-5;


  echo "d_1 = $d_1, d_2 = $d_2, d_3 = $d_3";
  echo '<br>';
  $s = 'My String';
  echo $s;
  echo '<br>';

  $bolean_1 = false;
  $bolean_2 = true;

  echo "bolean_1 = $bolean_1, bolean_2 = $bolean_2"; // false = равносильно пустой строке, а вот true - единице
  echo '<br>';
  $null_obj = null;
  echo '<br>';
  echo $null_obj;

  #3
    echo '<br>';
      echo '<br>';



      $a_1 = 5;
      $a_2 = 6;
      echo isset($a_1);

      echo '<br>';
      echo isset($a_2);
      echo '<br>';
      $a_3 = 2355;
      echo '<br>';
      echo "Получение типа данных из переменной a_3 - ", $a_3," это тип - ", gettype($a_3);
      echo "<br>Совмещение двух переменных в одну строку ", $a_1.$a_2;
    $a_12 = $a_1 * 10 + $a_2;  // метод совмещения переменных в одну, при условии что они равны по десяткам
  echo '<br>';

    $number_str = '214';
    echo "Номер строки равен - ", ((int) $number_str);
    echo "<br>";
    echo "Проверка на чсловое значение ", is_numeric($number_str); // остальные функции можно найти на php.net
    echo "<br>";

    unset($number_str); // Удаление переменной
    echo "<br>";
    echo "<br>";
    #4

    /* Жесткие ссылки */
    $a_32 = 10;
    $b_32 =& $a_32;  //ссылается на ту же самую строку в переемнной памяти
    echo $b_32;
    echo "<br>";
    unset($a_32); //обнуляем, но  не удаляем саму ячейку памяти
    $a_32 = $b_32 + $b_32;
    echo $a_32;
    echo "<br>";

    /* Символические ссылки */
    $a_322 = 433;
    $b_322 = 'a_322';
    echo "<br>";
    echo $$b_322;
    echo "<br>";
    #5
    define('COLOR', '#c00'); //константа
    echo COLOR;
    echo "<br>";
    echo defined('COLOR');  //существует или нет

    /* Встроенные константы */
    echo "<br>";
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo PHP_VERSION;
    echo "<br>";

    #6 Математические ф.
    $a = 12;
    $b = 4;
    echo "<br> Разность x и y равна ". ($a - $b);
    echo "<br> Результат деления x и y равен ". ($a / $b);
    echo "<br> Остаток от деления x и y равен ". ($a % $b);
    echo "<br> Произведение x и y равно ". ($a * $b);
    echo "<br> x в степени y равен  ". ($a ** $b);
    $a++;
    echo "<br>$a";
    $b--;
    echo "<br>$b";
    $b -= 3; // б минус три
    echo "<br>$b";
?>

<p style="color: <?=COLOR?>;">Это цвет из 5-ого урока</p> <!-- Выводит в цвет константу --!>
