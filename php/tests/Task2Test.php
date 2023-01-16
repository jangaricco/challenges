<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Challenges\MaskCard;

Class Task2Test extends TestCase {
  public function test_maskCardDigits1() {
    $cardDigits = new MaskCard;
    $this->assertSame('12345', $cardDigits->maskCardDigits('12345'));
  }
  public function test_maskCardDigits2() {
    $cardDigits = new MaskCard;
    $this->assertSame('', $cardDigits->maskCardDigits(''));
  }
  public function test_maskCardDigits3() {
    $cardDigits = new MaskCard;
    $this->assertSame('1****6789', $cardDigits->maskCardDigits('123456789'));
  }
  public function test_maskCardDigits4() {
    $cardDigits = new MaskCard;
    $this->assertSame('1***-***-8901', $cardDigits->maskCardDigits('1234-567-8901'));
  }
}