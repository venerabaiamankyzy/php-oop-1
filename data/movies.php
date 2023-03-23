<?php
require_once __DIR__ . "/../models/movie.php";
require_once __DIR__ . "/../models/genre.php";
$movies = [
  new Movie(
    "Eat Pray Love", 
    2010, 
    "https://serenaitalian.files.wordpress.com/2010/12/eat-pray-love-tickets.jpg", [
      new Genre("Comedy"),
      new Genre("Drama")
    ], 
    "Ryan Murphy"
  ),
  new Movie(
    "The Notebook",
    2004, 
    "https://site.unibo.it/canadausa/it/recensioni/the-notebook-e-l-amore-senza-tempo/@@eod.tiles.richtext/8d24320b6eed4bcc98b7d586232c96ad/@@images/34491dcd-3e26-4552-8705-2b5ef90d04f7.jpeg", 
    [      
      new Genre("Drama"),
      new Genre("Sentimental"),
    ], 
    "Nick Cassavetes"
  ),
  new Movie(
    "The Godfather",
    1972, 
    "https://media.timeout.com/images/105455970/1372/1029/image.jpg", 
    [
      new Genre("Thrillers"),
      new Genre("Noir")
    ],
    "Francis Ford Coppola"
  ),
  
];