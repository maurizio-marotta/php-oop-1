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
  }