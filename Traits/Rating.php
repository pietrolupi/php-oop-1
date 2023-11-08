
<?php

trait Rating{

  public $viewer_rating;
  public $critique_rating;

  public function getGeneralRating(){

    return "Viewers Rating: $this->viewer_rating - Critique Rating: $this->critique_rating - SCORE: ". ($this->viewer_rating + $this->critique_rating) / 2;
    
  }
}