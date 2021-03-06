<?php

/*
Задача 1 
Создать функцию с аргументом для вывода приветствия. Установить значение по умолчанию для аргумента равное «Гость» 
*/

function hello_user($user = "Гость"){
    echo "Приветствуем вас ".$user."<br>";
}

hello_user();
hello_user('Василий');

/*
Задача 2 
Допустим, пользователь вводит названия городов через пробел. Вы их присваиваете переменной. 
Переставьте названия так, чтобы названия были упорядочены по алфавиту. 
*/
echo "<br>";

$city_name = "Санкт-Петербург Москва Харьков Уфа Екатеринбург Архангельск Улан-Удэ Магнитогорск";
// Разбираем строку с разделителем пробел и заносим значения в массив
$arr_city = explode(' ', $city_name);
// Сортируем массив
array_multisort($arr_city);
// Значения из массива записываем в строку разделив их пробелом
$city_name = implode(" ", $arr_city);

echo $city_name;

/*
Задача 3 
Написать функцию - конвертер строки. 
Возможности: 
перевод всех символов в верхний регистр, 
перевод всех символов в нижний регистр, 
перевод всех символов в нижний регистр и первых символов слов в верхний регистр. 
Это должна быть одна функция 
*/
echo "<br><br>";

function ul_case($str, $case="default"){
    if($case === "UP"){
        // strtoupper — Преобразует строку в верхний регистр
        $res = strtoupper($str);
    } elseif($case === "DOWN"){
        // strtolower — Преобразует строку в нижний регистр
        $res = strtolower($str);
    } elseif($case === "default"){
        // ucwords — Преобразует в верхний регистр первый символ каждого слова в строке
        $res = strtolower($str);
        $res = ucwords($res);
    } else {
        echo "ERROR: Аргумент $case не используется данной функцией!";
        return false;
    }
    return $res;
}

$str = "hellO my frEnd aNd By bY";
echo ul_case($str, "UP")."<br>";
echo ul_case($str, "DOWN")."<br>";
echo ul_case($str)."<br>";
// передаем не верный аргумент
echo ul_case($str,"DS");

/*
Задача 4 
Используя функцию удаления HTML и PHP-тегов из строки, выведите на экран строку «<h1>Hello, world!</h1>». 
Строка не должна выглядеть как заголовок первого уровня – все теги должны быть удалены. 
*/
echo "<br><br>";

$str = "<h1>Hello, world!</h1>";
// strip_tags — Удаляет теги HTML и PHP из строки
echo strip_tags($str);

/*
Задача 5 
Создайте массив. Объедините все элементы массива в строку и выведите её на экран. 
*/
echo "<br><br>";

$arr = [1, '. поехал ', 2 , '.побибикал ', 3, '.остановился'];
echo implode($arr);

/*
Задача 6 
В переменной $date лежит дата в формате '30-11-2017'. Преобразуйте эту дату в формат '2017.11.30'. 
*/
echo "<br><br>";

$date = '30-11-2017';
// Разбираем строку с разделителем - и заносим значения в массив
$arr_date = explode('-', $date);
// array_reverse — Возвращает массив с элементами в обратном порядке
$arr_date = array_reverse($arr_date);
// Значения из массива записываем в строку разделив их .
$date = implode(".", $arr_date);

echo $date;
/*
Задача 7 
Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши. 
*/
echo "<br><br>";

$str = '/php/';
echo trim($str, '/');
 
/*
Задача 8 
Дана строка 'просто строка.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim 
*/
echo "<br><br>";

$str = 'Просто строка';
echo rtrim($str, '.').'.';

/*
Задача 9** 
Написать функцию, которая выводит количество дней, оставшихся до нового года. 
Функция должна корректно работать при запуске в любом году. 
*/
echo "<br><br>";

function to_new_year(){
    // получаем текущую дату в формате Unix
    $current_day = time();
    // следующий год
    $new_year = date("Y")+1;
    // 1й день нового года в формате Unix
    $new_year_day = strtotime("01-01-".$new_year);
    // получаем разницу от НГ до текущего дня в формате Unix
    $range = $new_year_day - $current_day;
    // возвращаем разницу переведенную в дни (поделили на секунды*минуты*часы в одном дне)
    return (int)($range/(60*60*24));
}

echo "До нового года осталось ".to_new_year()." дней";

/*
Задача 10** 
мы передаём число функции, которая в цикле for пытается поделить его на числа из диапазона 1..num и выводит результат
*/
echo "<br><br>";

function division($num){
    for($i = 1; $i <= $num; $i++){
        echo is_int($num/$i) ? $num/$i."<br>" : "";
    }
}

division(30);

?>