<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Challenges\Circle;


Class Task1Test extends TestCase {
  public function test_getArea()
  {
    $circle = new Circle(11);
    $this->assertEquals('379.94', $circle->getArea());
  }

  public function test_getPrimeter()
  {
    $circle = new Circle(4.44);
    $this->assertEquals('27.883200000000002', $circle->getPerimeter());
  }
}