<?php

/*
1. Функции для работы с массивами 
*1) array_combine, array_unique 
2) array_count_values, count 
3) array_diff_key, in_array 
4) array_intersect_key, range 
5) array_key_exists, compact 
6) array_intersect, array_merge 
7) array_multisort 
8) array_pop, array_push 
9) array_rand, shuffle 
10) array_replace, array_chunk 
11) array_reverse, array_search 
12) array_shift, array_unshift 
13) array_slice, array_splice 
*/

// array_combine — Создает новый массив, используя один массив в качестве ключей, а другой для его значений
// array array_combine ( array $keys , array $values )

$key = ['животное', 'растение', 'птица', 'животное2', 'птица2']; // Присваеваем ключи в первый массив
$value = ['корова', 'дерево', 'курица', 'корова', 'курица']; // Присваеваем значения во второй массив

$new_array = array_combine($key, $value); // Объединяем ключи и значения в один массив

var_dump($new_array); //выводим результат

/*
array_unique — Убирает повторяющиеся значения из массива
Принимает входной array и возвращает новый массив без повторяющихся значений.
Два элемента считаются одинаковыми в том и только в том случае, если (string) $elem1 === (string) $elem2.
!!! - array_unique() не предназначена для работы с многомерными массивами
array array_unique ( array $array [, int $sort_flags = SORT_STRING ] )
Виды сортировок флагов:
SORT_REGULAR - нормальное сравнение элементов (типы не меняются)
SORT_NUMERIC - элементы сравниваются как числа
SORT_STRING - элементы сравниваются как строки
SORT_LOCALE_STRING - сравнивает элементы как строки, с учетом текущей локали.
*/

var_dump(array_unique($new_array)); // выводим результат

/*
2. Дан массив [3, 1, 6, 0, 4, 5]. 
С помощью цикла foreach найдите сумму квадратов элементов этого массива. 
Результат вывести на экран; 
*/

$arr = [3, 1, 6, 0, 4, 5];
foreach($arr as $val){
    $summ += $val**2;
}

echo "$summ<br>";

/*
3. Вывести таблицу умножения чисел до 10 с помощью двух циклов for (вложенный цикл); 
*/
echo "<br>";
for($i = 1; $i <= 10; $i++){
    //echo "$i ";
    for($j = 1; $j<=10 ; $j++){
        echo "<div style='display:inline-block; width:20px;'>". $j * $i."</div>";
    }
    echo "<br>";
}

/*
4. Нарисуйте треугольник из символов *. Высота треугольника равна 15. 
*/
echo "<br>";
for($i = 0; $i <= 15; $i++){
    for($j = 0; $j < 15; $j++){
        echo $j > 14-$i && $j < 14+$i ? "*" : "&nbsp;";
    }
    echo "<br>";
}

/*
5. Создать массив из дней недели. С помощью цикла foreach выведите все дни недели, <br> 
а текущий день выведите жирным. Текущий день можно получить с помощью функции date. Название дней выводить по-русски 
*/
echo "<br>";
$days = [
    '1' => 'Понедельник',
    '2' => 'Вторник',
    '3' => 'Среда',
    '4' => 'Четверг',
    '5' => 'Пятница',
    '6' => 'Суббота',
    '7' => 'Воскресенье'
];

foreach($days as $key => $day){
    echo $key === +date(N) ? "<b>$day</b>" : "$day";
    echo "<br>";
}

/*
6. Вывести все числа, меньше 30, у которых есть хотя бы одна цифра 3 и которые не делятся на 5. 
Посмотрите функцию strpos! 
*/
echo "<br>";
for($i = 0; $i <= 30; $i++){
    echo strpos($i , "3") !== false && !is_int($i/5) ? $i."<br>": "";
}

/*
7**. Отсортировать массив по 'price' 
$arr = [ 
'1'=> [ 
'price' => 10, 
'count' => 2 
], 
'2'=> [ 
'price' => 5, 
'count' => 5 
], 
'3'=> [ 
'price' => 8, 
'count' => 5 
], 
'4'=> [ 
'price' => 12, 
'count' => 4 
], 
'5'=> [ 
'price' => 8, 
'count' => 4 
], 
];
*/
echo "<br>";
$arr = [ 
    '1'=> [ 
        'price' => 10, 
        'count' => 2 
    ], 
    '2'=> [ 
        'price' => 5, 
        'count' => 5 
    ], 
    '3'=> [ 
        'price' => 8, 
        'count' => 5 
    ], 
    '4'=> [ 
        'price' => 12, 
        'count' => 4 
    ], 
    '5'=> [ 
        'price' => 8, 
        'count' => 4 
    ], 
];

foreach($arr as $key => $row){
    $volume[$key] = $row['price']; 
}

array_multisort($volume, $arr);

var_dump($arr);
?>