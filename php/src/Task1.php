<?php

namespace Challenges;

Class Circle {
  private $PI = '3.14';
  private $r;

  public function __construct($r) {
    $this->r = $r;
  }

  public function getArea(){
    return $this->r * $this->r * $this->PI;
  }

  public function getPerimeter()  {
    return $this->r * 2 * $this->PI;
  }
}