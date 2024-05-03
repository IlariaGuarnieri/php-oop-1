<?php

// una classe una volta generata crea un'istanza
class Movie{
  private $name;
  private $description;
  public $year;
  public $subtitle;
  public $director;
  public $actors;

  public function __construct(string $_title, string $_description, int $_year, array $_actors)
  {
    $this->name = $_title;
    $this->description = $_description;
    $this->year = $_year;
    $this-> actors= $_actors;
  }

  // SETTER
// uso il set perche ho usato il private
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

  public function getEcho(){
    echo " ANNO: $this->year,<br>
    SOTTOTITOLO: $this->subtitle, <br>
    REGISTA: $this->director";
  }

}

?>