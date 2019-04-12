<?php

class RemoteControl {
    public $height;
    private $width;
    private $numButtons;
    private $model;

    public function __construct() {
        $this->model = $m;
    }


    public function turnOn() {
        echo "The TV has been turned on";
    }

    public function turnOff() {
        echo "The TV has been turned off";
    }

    public function setHeight($w) {
        $this->width = $w;
    }

    public function getWidth() {
        return $this->width;
    }

}

$rc1 = new RemoteControl('rc001');
$rc1->turnOn();
echo '<br/>';
$rc1->turnOff();

$rc1->height = 11;
$rc1->setWidth;

echo '<br/>';

print_r($rc1);


$rc2 = new RemoteControl('rc001');
$rc2->height = 20;
$rc2->setWidth(5);
echo '<br/>';
print_r($rc2);





?>