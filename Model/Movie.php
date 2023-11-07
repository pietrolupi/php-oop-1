<?php

class Movie extends Production {

  public $published_year;
  public $running_time;

  public function __construct(string $_title, string $_description, array $_genres, Media $_poster = null, int $_published_year, float $_running_time ){

    parent::__construct($_title, $_description, $_genres, $_poster);
  
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;


  }

}