<?php

class Movie extends Production {

  public $published_year;
  public $running_time;

  public function __construct(string $_title, string $_description, array $_genres, Media $_poster = null, int $_published_year, float $_running_time, float $_viewer_rating, float $_critique_rating ){

    parent::__construct($_title, $_description, $_genres, $_poster, $_viewer_rating, $_critique_rating);
  
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;


  }

  public function getTimeData(){
    return "Released : $this->published_year  -  RunningTime : $this->running_time m ";
  }

}