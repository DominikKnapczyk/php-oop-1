<?php

class Movie {

  public $image;
  public $title;
  public $length;
  public $year;

  public function __construct(
    string $_image,
    string $_title,
    int $_length,
    int $_year
  ) {
    $this->setImage($_image);
    $this->setTitle($_title);
    $this->setLength($_length);
    $this->setYear($_year);
  }

  public function setImage($image) {
    if(!is_string($image) || $image == "") return false;
    $this->image = $image;
  }

  public function setTitle($title) {
    if(!is_string($title) || $title == "") return false;
    $this->title = $title;
  }

  public function setLength($length) {
    if(!is_numeric($length) || $length <= 0) return false;
    $this->length = $length;
  }

  public function setYear($year) {
    if(!is_numeric($year) || $year < 1800 || $year > 2100) return false;
    $this->year = $year;
  }
}

$movies = [
  new Movie("https://api.superguidatv.it/v1/movies/3660/backdrops/1?width=720", "Matrix", 136, 1999),
  new Movie("https://api.superguidatv.it/v1/movies/3164/backdrops/1?width=720", "L'altro delitto", 108, 1991)
];

foreach($movies as $movie) {
  var_dump($movie);
}