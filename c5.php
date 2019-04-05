<?php
// promenlivite shto se deklariraat na prvo nivo se vikaat objekti s-ne e obicna promenliva -objekt e 

class Student {
    // properties (variables)
    private $firstName;
    private $lastName;

    public function __construct($fn, $ln) {
        $this->firstName = $fn;
        $this->lastName = $ln;
    }


    // methods (functions)
    public function takeExam() {
        echo $this->firstName." is taking the exam<br/>";
    }

    public function setFirstName($fn) {
        if(is_string($fn)) {
        $this->firstName = $fn;
    }
    }
    public function getFirstName() {
        return $this->firstName;
    }
    
}



$s = new Student('Pero', 'Perovski');
// $s->firstName = 'Pero';
// $s->lastName = 'Perovski';
$s->setFirstName('Stanko'); // menuvash vrednost na privatna promenliva
$s->takeExam();
// echo $s->firstName; 


// print_r($s);

$t = new Student('Janko', 'Jankovski');
// $t->firstName = 'Janko';
// $t->lastName = 'Jankovski';
$t->setFirstName('Janko');
$t->takeExam();

// print_r($t);


?>