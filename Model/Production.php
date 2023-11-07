<?php

class Production{
  public $title;
  public $description;
  public $poster;
  public $genres;

  public function __construct(string $_title, string $_description, array $_genres, Media $_poster = null){

    $this->title = $_title;
    $this->description = $_description;
    $this->genres = $_genres;
    $this->poster = $_poster;
  }
/* 
  public function setImage(Media $_poster){
    $this->poster = $_poster;
  } */
}