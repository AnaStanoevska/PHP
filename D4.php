<?php
// Да се креираат 10 различни класи кои:
// ќе користат наследување
// деструктори
// абстрактни класи
// статички особини (properties)


//klasa 1 

class GameOfThrones {
    private $throneHolder;
    private $family;
    private $house;

    public static $Stark = 'Stark';
    public static $Thangarian = 'Thanagarian';
        public function __construct($g) {
            $this->throneHolder = $g;
        }

    public function __destruct() {
        echo '<br/> ' . $this->throneHolder . ' will sit on the Iron Throne at the end of the series.';
    }

    public function setFamily($fam) {
        if(is_string($fam)){
            $this->family = $fam;
        }
    }

    public function setHouse($h) {
        $me = ['Stark', 'Thangarian'];
        if(in_array($h, $me)){
            $this->house = $h;
        }
    }

    public function getThroneHolder() {
        return $this->throneHolder;
    }
    public function getFamily() {
        return $this->family;
    }
    public function getHouse() {
        return $this->house;
    }
}

$J = new GameOfThrones('John');
$J->setFamily('Thangarian');
$J->setHouse(GameOfThrones::$Stark); 
echo '<br/>';
print_r($J);
$D = new GameOfThrones('Daenerys');
$D->setFamily('Thangarian');
$D->setHouse(GameOfThrones::$Thangarian); 
echo '<br/>';
print_r($D);
echo '<br/>';


//klasa 2

abstract class Jewelry {
protected $jewelryMaterial; 
protected $typeOfJewelry; 

    public function setMaterial($m) {
        $this->jewelryMaterial = $m;
    }

    public function setType($t) {
        $this->typeOfJewelry = $t;
    }

    public function getMaterial() {
        return $this->jewelryMaterial;
    }
    public function getType() {
        return $this->typeOfJewelry;
    }
}

class Ring extends Jewelry {
    private $class;
    public function setClass($c) {
        $this->class = $c;
    }

    public function getClass() {
        return $this->class;
    }
    public function description() {
        echo 'class: ' . $this->class . ' Material: ' . $this->jewelryMaterial . ' Type: ' . $this->typeOfJewelry;
    }
}

$jw = new Ring;
echo '<br/>';
$jw->setMaterial('silver');
$jw->setType('ring');
$jw->setClass('handmade');
$jw->description();
print_r($jw);
echo '<br/>';


//klasa 3

class House {
    private $type;
    private $capacity;
    private $levels;

    public static $Mansion = 'mansion'; 
    public static $Igloo = 'igloo'; 
    public function __construct($t) {
        $this->type = $t;
    }

    public function __destruct() {
        echo '<br/>The house ' . $this->type . ' has been closed for visitors';
    }

    public function setCapacity($c) {
        if(is_int($c)){
            $this->capacity = $c;
        }
    }

    public function setLevels($l) {
        $ln = ['igloo', 'mansion'];
        if(in_array($l, $ln)){
            $this->levels = $l;
        }
    }

    public function getType() {
        return $this->type;
    }
    public function getCapacity() {
        return $this->capacity;
    }
    public function getLevels() {
        return $this->levels;
    }
}

$h1 = new House('h1');
$h1->setCapacity(2);
$h1->setLevels(House::$Igloo); 
echo '<br/>';
print_r($h1);
$h2 = new House('h2');
$h2->setCapacity(20);
$h2->setLevels(House::$Mansion);
echo '<br/>';
print_r($h2);
echo '<br/>';


//klasa 3

class Netflix {
    private $series;
    private $numberOfEpisodes;
    private $country;

    public static $German = 'Germany'; 
    public static $American = 'USA'; 
    public function __construct($s) {
        $this->series = $s;
    }
    public function __destruct() {
        echo '<br/>Tv show ' . $this->series . ' is popular on Netflix now';
    }

public function setNumberOfEpisodes($ep) {
    if(is_int($ep)){
        $this->numberOfEpisodes = $ep;
    }
}

public function setCountry($G) {
    $En = ['USA', 'Germany'];
    if(in_array($G, $En)){
        $this->country = $G;
    }
}

    public function getSeries() {
        return $this->series;
    }
    public function getNumberOfEpisodes() {
        return $this->numberOfEpisodes;
    }
    public function getCountry() {
        return $this->country;
    }
}

$s1 = new Netflix('Dark');
$s1->setNumberOfEpisodes(18);
$s1->setCountry(Netflix::$German); 
echo '<br/>';
print_r($s1);
$s2 = new Netflix('Love, Death & Robots');
$s2->setNumberOfEpisodes(20);
$s2->setCountry(Netflix::$American);
echo '<br/>';
print_r($s2);
echo '<br/>';










?>