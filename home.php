<?php
/*
1. Создать переменную login, присвоить ей строковое значение. Вывести на экран фразу: "Вы вошли под именем (значение переменной login)" 
Удалите переменную login. 
*/

$login;
$login = "user";
echo "Вы вошли под именем ".$login;
unset($login);

/*
2. Даны два числа. Найдите сумму их квадратов. 
*/

$a = 3;
$b = 4;
var_dump($a*$a+$b**2);

/*
3. Рассчитать скорость движения машины и вывести её в удобочитаемом виде. Вывод в км/ч, м/c. 
Исходные данные: Пройденный путь - S; Время движения - t. 
*/

$s = 300;  //км
$t = 3;   //часы
echo "Машина проехала ".$s."км за ".$t."часа, со скоростью ".$s/$t."км/ч или ~".(int)($s/$t/3600*1000)."м/с";

/*
4. Создайте константу и присвойте ей значение. Выведите значение созданной константы. Попытайтесь изменить ее значение. 
*/

define("TRATATA", "Константа");
var_dump(TRATATA);

// TRATATA = "Изменить нельзя"; Константы не меняются!

/*
5. Посмотрите про приоритет операторов, для проверки себя, решите устно: 
1) i += ++i + i++, если i = 6 
2) ++i+i++ + i, если i = 1 
3) b = a++ + (--a * ++a), чему равно b, если а = 2
*/
//  Посидел, подумал, вроде дошло =)

?>