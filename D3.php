<?php

// klasa 1 - avtomobil

class Auto {
    private $brand;
    private $color;
    private $price;

    public function __construct($b, $c, $p) {
        $this->brand = $b;
        $this->color = $c;
        $this->price = $p;
    }

    public function autoType() {
        echo $this->brand." gets a new engine, a more attractive body, and suspension tweaks that improve comfort without sacrificing agility. <br/>";
    }

    public function setBrand($b) {
        if(is_string($b)){
            $this->brand = $b;
        } else {
            exit('Brand must be string');
        }
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setColor($c) {
        if(is_string($c)){
            $this->brand = $c;
        } else {
            exit('Color must be string');
        }
    }

    public function getColor() {
        return $this->color;
    }

    public function setPrice($p) {
        if(is_string($p)){
            $this->brand = $p;
        } else {
            exit('Price must be string');
        }
    }

    public function getPrice() {
        return $this->price;
    }
}


$P = new Auto('Porsche', ' Black', '50.000$');
$P->setBrand('Porsche Macan');
$P->autoType();
echo $P->getBrand();
echo '<br/>';
echo $P->getColor();
echo '<br/>';
echo $P->getPrice();
echo '<br/>';



// klasa 2 - monitor

class Display {
    private $manufacturer;
    private $dimensions;
    private $weight;

    public function __construct($m, $d, $w) {
        $this->manufacturer = $m;
        $this->dimensions = $d;
        $this->weight = $w;
    }


public function screenProducer() {
    echo $this->manufacturer." Produces the best monitors for gaming. <br/>";
}

public function setManufacturer($m) {
    if(is_string($m)){
        $this->manufacturer = $m;
    } else {
        exit('Manufacturer must be string');
    }
}

public function getManufacturer() {
    return $this->manufacturer;
}

public function setDimensions($d) {
    if(is_string($d)){
        $this->manufacturer = $d;
    } else {
        exit('Dimensions must be string');
    }
}

public function getDimensions() {
    return $this->dimensions;
}

public function setWeight($w) {
    if(is_string($w)){
        $this->manufacturer = $w;
    } else {
        exit('Weight must be string');
    }
}

public function getWeight() {
    return $this->weight;
}
}


$S = new Display('BenQ EX3501R', ' 35-inch', '23 pounds');
$S->setManufacturer('BenQ EX3501R');
$S->screenProducer();
echo $S->getmanufacturer();
echo '<br/>';
echo $S->getdimensions();
echo '<br/>';
echo $S->getweight();
echo '<br/>';








?>

    