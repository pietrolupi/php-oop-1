
<?php

trait Rating{

  public $viewer_rating;
  public $critique_rating;

  public function getGeneralRating(){

    return ($this->viewer_rating + $this->critique_rating) / 2;
    
  }
}