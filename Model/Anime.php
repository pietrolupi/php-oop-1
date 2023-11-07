<?php

class Anime extends Production {

  public $streamingPlatform;
  public $pegi;

  public function __construct(string $_title, string $_description, array $_genres, Media $_poster = null,  string $_streamingPlatform,int $_pegi){

    parent::__construct( $_title, $_description, $_genres, $_poster);

    $this->pegi = $_pegi;
    $this->streamingPlatform = $_streamingPlatform;

  }
  
  public function getTimeData(){
    return "Currently on: $this->streamingPlatform - PEGI: $this->pegi+";
  }
}