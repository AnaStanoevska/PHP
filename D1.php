<?php
/*
Домашна
Да се прочита текст од фајл. Да се анализира текстот за следниве точки:
- број на карактери
- број на зборови
- број на реченици
- зборови <4
- зборови >=4 <=7
- зборови >7
fopen, fread, fclose, filesize, explode 
*/



$size = filesize('domashna.txt');
$text = fopen('domashna.txt', 'r'); 
$data = fread($text, $size);
$str = $data;
echo $data;
echo "<br/>";
echo strlen($str);   /*број на карактери */
echo "<br/>";
echo str_word_count($str); /*број на Зборови */
echo "<br/>";

function countSentences($str){
	return preg_match_all('/[^\s](\.|\!|\?)(?!\w)/',$str,$match);
}
echo countSentences($str); /*број на реченици */

echo "<br/>";


$array = print_r(explode(" ",$data));



if(strlen($array) < 4)
    echo "less then 4";   
if(strlen($array) >= 4 && strlen($array) <= 7)
    echo "between 7 and 4";
if(strlen($array) > 7)
    echo "between 7 and 4";







fclose($text);





?>