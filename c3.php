<?php
$studenti = [
    ['ime' => 'Pero', 'prezime' => 'Perovski'],
    ['ime' => 'Aleksandar', 'prezime' => 'Aleksandrovski'],
    ['ime' => 'Stanko', 'prezime' => 'Stankovski'],
    ['ime' => 'Petko', 'prezime' => 'Petkovski'],
    ['ime' => 'Ana', 'prezime' => 'Aneska'],
    ['ime' => 'janko', 'prezime' => 'jankovski'],
];

$MAX_IME = 0;
$MAX_PREZIME = 0;
$MIN_IME = 100;
$MIN_PREZIME = 100; 

$najdolgo_ime = '';
$najdolgo_prezime = '';
$najkratko_ime = '';
$najkratko_prezime = '';

for($i = 0; $i < count($studenti); $i++) {
    if(strlen($studenti[$i]['ime']) > $MAX_IME) {
        $MAX_IME = strlen($studenti[$i]['ime']);
        $najdolgo_ime = $studenti[$i]['ime'];
    }

    if(strlen($studenti[$i]['prezime']) > $MAX_PREZIME) {
        $MAX_PREZIME = strlen($studenti[$i]['prezime']);
        $najdolgo_prezime = $studenti[$i]['prezime'];
    }

    if(strlen($studenti[$i]['ime']) < $MIN_IME) {
        $MIN_IME = strlen($studenti[$i]['ime']);
        $najkratko_ime = $studenti[$i]['ime'];
    }

    if(strlen($studenti[$i]['prezime']) < $MIN_PREZIME) {
        $MIN_PREZIME = strlen($studenti[$i]['prezime']);
        $najkratko_prezime = $studenti[$i]['prezime'];
    }
}

echo "<p>Најдолгото име е името: $najdolgo_ime </p>";
echo "<p>Најкраткото име е името: $najkratko_ime </p>";
echo "<p>Најдолгото презиме е презимето: $najdolgo_prezime </p>";
echo "<p>Најкраткото презиме е презимето: $najkratko_prezime </p>";


foreach($studenti as $student) {
    echo $student['ime']."<br/>";
}


echo "<hr/>";

// echo readfile("text.txt");

// $data = file_get_contents('text.txt');
// echo nl2br($data);


// $size = filesize('text.txt');
// echo "$size<br/>";

// $fh = fopen('text.txt', 'r'); // отварање на фајл со име text.txt во мод за читање (r)ead
// $data = fread($fh, $size);
// echo $data;

// echo "<hr/>";

$fh = fopen('nov_fajl.txt','a+');
fwrite($fh, 'test test test test');
fclose($fh);







?>

