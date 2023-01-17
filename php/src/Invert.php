<?php

namespace Challenges;

Class Invert {
  private $input;
  private $target; 
  private $str;
  private $reversed;
  private $afterStr;
  private $type;
  private $arr;

  public function invert($input, $type) {
    $target = ['.', ','];
    $input = str_replace($target, '', $input);
    $str = explode(" ", $input);
    if ($type === 'P') {
      $reversed = array_reverse($str);
      $afterStr = $this->implode($reversed);
    } elseif($type === 'W') {
      for($i = 0; $i < count($str); $i++) {
        $reversed[] = strrev($str[$i]);
      }
      $afterStr = $this->implode($reversed);
    } else {
      $afterStr = 'Please enter the correct second argument';
    }
    return ucfirst(strtolower($afterStr));
  }

  private function implode($arr) {
    return implode( " ", $arr);
  }
}