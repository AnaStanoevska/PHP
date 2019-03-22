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


print_r(explode(" ",$data));

echo "<br/>";

$test = explode(" ",$data);

echo $test[0]; /*проба */ echo "<br/>";
echo $test[20]; /*проба */ echo "<br/>";
echo $test[5]; /*проба */ echo "<br/>";

$lessthen = 0; 
$morethen = 0;
$inbetween = 0;

for($i = 0; $i < count($test); $i++) {
    if(strlen($test[$i]) <= 4) {
        $lessthen++;
    }
    if(strlen($test[$i]) >= 7) {
        $morethen++;
    }
    if(strlen($test[$i]) > 4 && strlen($test[$i]) < 7) {
        $inbetween++;
    }
}


echo "<p>Зборови со помалку од 4 карактери се: $lessthen </p>";
echo "<p>Зборови со повеќе од 7 карактери се: $morethen </p>";
echo "<p>Зборови помеѓу 4 и 7 карактери се: $inbetween </p>";



fclose($text);





?>