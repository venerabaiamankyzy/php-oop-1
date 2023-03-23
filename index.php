<?php
class Movie {
  public $title;  
  public $year;
  public $poster;
  public $genre;  
  public $director;

  public function __construct(
    string $title,
    int $year,
    string $poster,
    string $genre,
    string $director = "unknown"    
  )  {
    $this->title = $_title;
    $this->year = $_year;
    $this->poster = $_poster;
    $this->genre = $_genre;
    $this->director = $_director;
   
}
}