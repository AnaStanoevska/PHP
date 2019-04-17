<?php
// Да се креираат 10 различни класи кои:
// ќе користат наследување
// деструктори
// абстрактни класи
// статички особини (properties)

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

    public function getClasa() {
        return $this->clasa;
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







?>