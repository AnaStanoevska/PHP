<?php

class Classroom {
    public $name;
    private $capacity;
    public $sittingArrangement;
    
    public static $SITTING_CIRCULAR = 'circular';
    public static $SITTING_ROWS = 'rows';


    public function __construct($n) {
        $this->name = $n;
    }

    public function __destruct(){
        echo '<br/>The classroom ' . $this->name . ' has been closed';
    }


    public function setCapacity($c) {
        if(is_int($c)){
            $this->capacity = $c;
        }
    }

    public function setSittingArrangement($a) {
        $sa = ['rows', 'circular'];
        if(in_array($a, $sa)){
            $this->setsittingArrangement = $a;
        }
    }

    public function getName() {
        return $this->name;
    }

    public function getCapacity() {
        return $this->capacity;
    }

    public function getSittingArrangement() {
        return $this->getsittingArrangement;
    }

}


$c1 = new Classroom('a1');
$c1->setCapacity(12);
$c1->setSittingArrangement(Classroom::$SITTING_ROWS);

echo '<br/>';
print_r($c1);

$c2 = new Classroom('b1');
$c2->setCapacity(12);
$c2->setSittingArrangement(Classroom::$SITTING_CIRCULAR);

echo '<br/>';
print_r($c2);

abstract class MotornoVozilo {
    protected $zafatninaNaMotor;
    protected $potroshuvachka;

    public function setZafatnina($z) {
        $this->zafatninaNaMotor = $z;
    }

    public function setPotroshuvachka($p) {
        $this->potroshuvachka = $p;
    }

    public function getZafatnina() {
        return $this->zafatninaNaMotor;
    }

    public function getPotroshuvachka() {
        return $this->potroshuvachka;
    }
}

class Avtomobil extends MotornoVozilo {
    private $klasa;

    public function setKlasa($k) {
        $this->klasa = $k;
    }

    public function getKlasa() {
        return $this->klasa;
    }

    public function opis() {
        echo 'Klasa: ' . $this->klasa . 'Zafatnina: ' . $this->zafatninaNaMotor . ' Potroshuvachka: ' . $this->potroshuvachka;
    }

}

$av1 = new Avtomobil;
echo '<br/>';
$av1->setPotroshuvachka(6.5);
$av1->setZafatnina(1900);
$av1->setKlasa('Porche');
$av1->opis();
print_r($av1);


// $mv = new MotornoVozilo;


$f = new File('test.txt');
$f->write('test test test');
echo $f->read();// test test test
echo $f->size();//14


class File {
    public $file;
    public $content;
    $fh = fopen('test.txt', '');
    fwrite($fh, 'test test test');
    fclose($fh);

    public function __construct($f) {
        $this->fn = $f;
    }

}


$f = new File('test.txt');
$f->write('test test test');
echo $f->read();// test test test
echo $f->size();//14

?>