<?php

  class movie {
    public $title;
    public $time;
    public $image;

    public function __construct($_title, $_time, $_image){
      $this->title = $_title;
      $this->time = $_time;
      $this->image = $_image;
    }
    public function getInfo(){
      return 'titolo:' . $this->title . ' durata: ' . $this->time . ' minuti';
    } 

    public function getImage(){
      echo $this->image;
    } 

    public function getTitle(){
      echo $this->title;
    }

    
    public function getTime(){
      echo $this->time;
    }
  }