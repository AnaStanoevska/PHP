<?php

function mat($a,$b) {
    $d = $a + $b;
    if ($d % 2 == 0 ){
        return $d;
    } else { 
        return $d / 2;
    }
}

echo mat(4, 10);  echo "<br/>";
echo mat(3,8); echo "<br/>";


$niza = ['a','b','c']; 
// echo $niza;
// print_r($niza);
// var_dump($niza);
// echo $niza[0];

array_push($niza, 'd'); 
// print_r($niza); echo "<br/>";
// echo count($niza); echo "<br/>";

echo "<ul>";
for($i = 0; $i < 10; $i++) {
    echo "<li> $i </li>";
}
echo "</ul>";

echo "<ol>";
for($i = 0; $i < count($niza);$i++) {
    echo "<li> ".$niza[$i]." </li>";
}
echo "</ol>";


// Асоцијативни низa (namesto po index kako kaj numeriranite nizi gi tangirame po ime)
$student = ["ime" => "Pero", "prezime" => "Perovski"];

// echo $student["ime"];
// echo $student["prezime"];


$studenti = [
    ['ime' => 'Pero', 'prezime' => 'Perovski'],
    ['ime' => 'Janko', 'prezime' => 'Jankovski'],
    ['ime' => 'Stanko', 'prezime' => 'Stankovski'],
    ['ime' => 'Petko', 'prezime' => 'Petkovski'],
];

// echo $studenti[0]['prezime'];
// echo $studenti[1]['prezime'];
// echo $studenti[2]['prezime'];
// echo $studenti[3]['prezime'];

for($i = 0; $i < count($studenti); $i++) {
    echo $studenti[$i]["prezime"]. "</br>";
}


?>