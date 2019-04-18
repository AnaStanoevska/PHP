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


//klasa 4

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


//klasa 5

abstract class Music {
    protected $band; 
    protected $song; 
    
        public function setBand($mb) {
            $this->band = $mb;
        }
    
        public function setSong($ms) {
            $this->song = $ms;
        }
    
        public function getBand() {
            return $this->band;
        }
        public function getSong() {
            return $this->song;
        }
    }
    
    class Grange extends Music {
        private $klasa;
        public function setKlasa($k) {
            $this->klasa = $k;
        }
    
        public function getKlasa() {
            return $this->klasa;
        }
        public function description() {
            echo 'Period: ' . $this->klasa . ' Name of the Band: ' . $this->band . ' Favourite Song: ' . $this->song;
        }
    }
    
    $gm = new Grange;
    echo '<br/>';
    $gm->setBand('Pearl Jam');
    $gm->setSong('Oceans');
    $gm->setKlasa('90s Music');
    $gm->description();
    print_r($gm);
    echo '<br/>';
    
    
//klasa 6

abstract class Movies {
    protected $movieType; 
    protected $movieName; 
    
        public function setMovieType($mt) {
            $this->movieType = $mt;
        }
    
        public function setMovieName($mn) {
            $this->movieName = $mn;
        }
    
        public function getMovieType() {
            return $this->movieType;
        }
        public function getMovieName() {
            return $this->movieName;
        }
    }
    
    class HorrorMovie extends Movies {
        private $klasa;
        public function setKlasa($k) {
            $this->klasa = $k;
        }
    
        public function getKlasa() {
            return $this->klasa;
        }
        public function description() {
            echo 'Genre: ' . $this->klasa . ' Movie name: ' . $this->movieName . ' Movie type: ' . $this->movieType;
        }
    }
    
    $mm = new HorrorMovie;
    echo '<br/>';
    $mm->setMovieName('Alien');
    $mm->setMovieType('horor');
    $mm->setKlasa('Sci-Fi');
    $mm->description();
    print_r($mm);
    echo '<br/>';
    

//klasa 7

abstract class Architecture {
    protected $plan; 
    protected $model; 
    
        public function setPlan($ap) {
            $this->plan = $ap;
        }
    
        public function setModel($am) {
            $this->model = $am;
        }
    
        public function getPlan() {
            return $this->plan;
        }
        public function getModel() {
            return $this->model;
        }
    }
    
    class Profession extends Architecture {
        private $klasa;
        public function setKlasa($k) {
            $this->klasa = $k;
        }
    
        public function getKlasa() {
            return $this->klasa;
        }
        public function description() {
            echo 'Process: ' . $this->klasa . ' Type of plan: ' . $this->plan . ' Model Material: ' . $this->model;
        }
    }
    
    $pa = new Profession;
    echo '<br/>';
    $pa->setPlan('Floor plan');
    $pa->setModel('Plexiglass model');
    $pa->setKlasa('Design');
    $pa->description();
    print_r($pa);
    echo '<br/>';
    


//klasa 8


abstract class Cars {
    protected $brand; 
    protected $model; 
    
        public function setBrand($cb) {
            $this->brand = $cb;
        }
    
        public function setModel($cm) {
            $this->model = $cm;
        }
    
        public function getBrand() {
            return $this->brand;
        }
        public function getModel() {
            return $this->model;
        }
    }
    
    class Vehicle extends Cars {
        private $klasa;
        public function setKlasa($k) {
            $this->klasa = $k;
        }
    
        public function getKlasa() {
            return $this->klasa;
        }
        public function description() {
            echo 'Type of vehnicle: ' . $this->klasa . ' Car name: ' . $this->brand . ' Car model: ' . $this->model;
        }
    }
    
    $veh = new Vehicle;
    echo '<br/>';
    $veh->setBrand('Suzuki');
    $veh->setModel('Jimney');
    $veh->setKlasa('car');
    $veh->description();
    print_r($veh);
    echo '<br/>';





?>