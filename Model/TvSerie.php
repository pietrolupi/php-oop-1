<?php

class TvSerie extends Production {

  public $aired_from_year;
  public $aired_to_year;
  public $number_of_episodes;
  public $number_of_seasons;

  public function __construct(string $_title, string $_description, array $_genres, Media $_poster = null, int $_aired_from_year, int $_aired_to_year, int $_number_of_episodes, int $_number_of_seasons, float $_viewer_rating, float $_critique_rating){

    
    parent::__construct($_title, $_description, $_genres, $_poster, $_viewer_rating, $_critique_rating);
  
    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_number_of_episodes;
    $this->number_of_seasons = $_number_of_seasons;

  }

  public function getTimeData(){
    return "Aired from   $this->aired_from_year to   $this->aired_to_year  -    $this->number_of_seasons Seasons ,  $this->number_of_episodes Episodes ";
  }


}