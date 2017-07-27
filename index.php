<?php

echo "Helloaas <br>";
$mews = "black";
echo "Hi, ", $mews;
echo <<<END
<p>Для отображения большого <br> количества текста используют
синтаксис heredoc</p>
END;

echo "Стоит посчитать, сколько будет 2+5 = ", 2+5;
$x = 134235;
$y = 3247875;
echo "</br>Вот и другой пример: ", $x," + ", $y, " = ", $z = $x + $y;
$super = "super";
echo "<br><br><br><br> I want buy a new {$super}car";

echo "<br>2 + 2 = ", 2 + 2, "<br>";
echo "5 - 2 = ", 5 - 2, "<br>";
echo "10 * 10 = ", 10 * 10, "<br>";
echo "100 / 2 = ", 100 / 2, "<br>";
echo "10 % 2 = ", 10 % 2, "<br>";







?>
