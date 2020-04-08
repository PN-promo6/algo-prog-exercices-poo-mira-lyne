<?php
class Student{

public $name;
public $age;


public function __construct($name, $age) {

  $this->name=$name;
  $this->age=$age;
}
}

function displayInfo(){
    echo("Son prénom est " + $this->name + " elle a " + $this->age);
}

$information= new Student ("Maria", 24);
$information.displayInfo()
