<?php

$a = 0;

do {
    $a++;          // выводит 1
} while ($a > 10); // 1 не больше 10 поэтому это условие не выводится
echo $a;

echo "<hr>";


//1.часть кода в "do" обрабатывается первой
//2.а потом обрабатывается условие                     
$i = 1;

do {
    echo "$i";
    $i++;   //если условие false , то выводится "do" и цикл завершается            
} while ($i <= 10); //сдесь мы пишем наше условие
    