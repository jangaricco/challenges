<?php

namespace Challenges;


Class MaskCard {

  public function maskCardDigits($cardDigits) {
    $cardDigits = mb_convert_kana($cardDigits, "n", "utf-8");
    $num = strlen($cardDigits);
    $str = str_split($cardDigits);
    $mcd = '';
    

    if($cardDigits !== '' && $num > 5) {
      for($i = 0; $i < count($str); $i++) {
        if($i !== 0 && $i < count($str) - 4 && preg_match("/^[0-9]+$/",$str[$i])) {
          $str[$i] = '*';
        }
        $mcd = $mcd . $str[$i];
      }
    } else {
      $mcd = $cardDigits;
    }
    return $mcd;
  }
}