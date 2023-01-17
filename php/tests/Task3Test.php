<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Challenges\Invert;


Class Task3Test extends TestCase {
  public function test_invert1() {
    $invert = new Invert;
    $this->assertSame('Apple is this', $invert->invert("This is Apple", "P"));
  }
  public function test_invert2() {
    $invert = new Invert;
    $this->assertSame('Eno enif yad ot trats', $invert->invert("One fine day to start.", "W"));
  }
  public function test_invert3() {
    $invert = new Invert;
    $this->assertSame('Three of powers by division', $invert->invert("Division by powers of three", "P"));
  }
  public function test_invert4() {
    $invert = new Invert;
    $this->assertSame('', $invert->invert("", "P"));
  }
}