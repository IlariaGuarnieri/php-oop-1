<?php

// una classe una volta generata crea un'istanza
class Movie{
  private $name;
  private $description;
  public $year;
  public $subtitle;
  public $director;

  public function __construct(string $_title, string $_description, int $_year,)
  {
    $this->name = $_title;
    $this->description = $_description;
    $this->year = $_year;
  }

  // SETTER

  public function setName(){
    $this->getName();
  }
  public function setDescription(){
    $this->getDescription();
  }
  // GETTER

  public function getName(){
    // uso echo anziche return
    echo "$this->name";
  }
  public function getDescription(){
    echo "$this->description";
  }

  public function getYear(){
    echo "$this->year, $this->subtitle, $this->director";
  }

}

?>