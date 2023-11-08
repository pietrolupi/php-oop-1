<?php


class Production{
  
  use Rating; //richiamo l'utilizzo del Trait "rating";

  public $title;
  public $description;
  public $poster;
  public $genres;

  public function __construct(string $_title, string $_description, array $_genres, Media $_poster = null, float $_viewer_rating, float $_critique_rating){

    if(empty($_genres)){
      throw new Exception("Warning, insert at least one genre for each production!");
    }else{ 
      $this->genres = $_genres;
    }

    if(($_viewer_rating > 10 || $_viewer_rating < 0) || ($_critique_rating > 10 || $_critique_rating < 0)  ){
      throw new Exception("Insert values beetween 0 and 10 for viewer rating and critique rating.");
    }else{

      $this->viewer_rating = $_viewer_rating;
      $this->critique_rating = $_critique_rating;

    }


    $this->title = $_title;
    $this->description = $_description;
    $this->poster = $_poster;
    //derivate dal trait
  }

}