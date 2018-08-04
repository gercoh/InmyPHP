<?php

// Написать функцию balance(string $r, string $l), которая сравнит две строки.
// Строки состоят из восклицательных ('!') и вопросительных знаков ('?'). Восклицательный весит 2 пункта, вопросительный - 3.
// Результат функции должен быть один из трёх вариантов - "Left", "Right" или "Balance", в зависимости от того, какая сторона тяжелее. 
// Примеры результатов:
// balance("!!","??") == "Right"
// balance("!??","?!!") == "Left"
// balance("!?!!","?!?") == "Left"
// balance("!!???!????","??!!?!!!!!!!") == "Balance"

function  balance($text1,$text2)
{
      
    $param1 = substr_count($text1, '!'); 
    $warning1 = $param1 * 2;
    $param2 = substr_count($text1, '?'); 
    $question1 = $param2 * 3;
    $countparam1 = $warning1 + $question1;
    $param3 = substr_count($text2, '!'); 
    $warning2 = $param3 * 2;
    $param4 = substr_count($text2, '?'); 
    $question2 = $param4 * 3;
    $countparam2 = $warning2 + $question2;

     $data = strcmp($countparam1,$countparam2);
        switch ($data) {
            case 1:
                echo "LEFT ";
                break;
            case -1:
                echo "Right";
                break;
            case 0:
                echo "Balance";
                break;
        }
}
balance('!!???!????','??!!?!!!!!!!');
