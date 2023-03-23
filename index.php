<?php
class Movie {
  public $title;  
  public $year;
  public $poster;
  public $genre;  
  public $director;

  public function __construct(
    string $_title,
    int $_year,
    string $_poster,
    string $_genre,
    string $_director = "unknown"    
  )  {
    $this->setTitle($_title);
    $this->year = $_year;
    $this->poster = $_poster;
    $this->genre = $_genre;
    $this->director = $_director;   
  }

  public function setTitle($title) {
    if(!is_string($title) || $title === "") return false;
    $this->title = $title;
  }
  
}