<?php
class Book{

public $title;
public $price;
public $year;

public function __construct($title, $price, $year) {

  $this->title=$title;
  $this->price=$price;
  $this->year=$year;
}
}

$wassily= new Book ("harry potter", 30, 2009);
$wassily->year=2010;

echo($wassily->title .' '. $wassily->price .' '. $wassily->year);
s
