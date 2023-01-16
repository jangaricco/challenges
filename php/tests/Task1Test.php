<?php

namespace Tests;

require 'vendor/autoload.php';
use PHPUnit\Framework\TestCase;
use Challenges\Circle;


Class Task1Test extends TestCase {
  public function test_getArea()
  {
    $circle = new Circle(11);
    $this->assertSame('380.132711084365', $circle->getArea());
  }

  public function test_getPrimeter()
  {
    $circle = new Circle(4.44);
    $this->assertSame('27.897342763877365', $circle->getPerimeter());
  }
}