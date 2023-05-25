<?php

class Movie{
  public $title;
  public $duration;
  public $poster;

  public function __construct($_title, $_duration, $_poster)
  {
    $this->title = $_title;
    $this->duration = $_duration;
    $this->poster = $_poster;
  }

  public function getInfo(){
    return 'Titolo: ' . $this->title . ' - Durata:' . $this->duration . ' minuti';
  }
}