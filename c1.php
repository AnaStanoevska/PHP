<?php 

// echo "Zdravo svetu!";

$ime = "Pero";
$Godini = 23;
$_polnoleten = true;
$pi = 3.14;

echo $ime;
echo "<br/>";
echo $Godini;
echo $_polnoleten;
echo $pi;
echo "<h1>".$ime."</h1>";
?>

<h2>PEROOOOO!</h2>



<div><?php echo $Godini; ?></div>
<b><?=$Godini?></b><br/>

<?php

$br = 7;

if($br %2 == 0) {
    echo "par";
} else {
    echo "nepar";
}
echo "<br/>";

switch($ime) {
    case 'Pero':
    echo "Zdravo Pero";
    break;
    case 'Janko':
    echo 'Zdravo Janko';
    break;
    case "Zdravo Stanko";
    break;
    default:
    echo 'Nema zdravo';
}

echo "<br/>";

function sobiranje($a, $b){
    echo $a + $b;
}

sobiranje(5,6);

echo "<br/>";

function odzemanje($a, $b){
    return $a - $b;
}

echo odzemanje(3,1);

echo "<br/>";

$res = odzemanje(6,19);
echo $res;

echo "<br/>";

echo "<br/>";

 
function ubavMesec($mesec) { 
    switch(strlen($mesec) % 2){
        case 0:
            echo "Ubav mesec";
            break;
        case 1:
            echo "Neubav mesec";
            break;
    }
}

echo "<br/>";
ubavMesec("Januari");
echo "<br/>";
    




































?>
