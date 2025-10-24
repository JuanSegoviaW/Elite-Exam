<?php

function shortestWord($string){
      $stringArray = explode(" ", $string);
      $shortestString = $stringArray[0];
      $shortestStringLength = strlen($stringArray[0]);
        for($i = sizeof($stringArray) - 1; $i > 0; $i--){
          $lengthCheck = strlen($stringArray[$i]);
          if($shortestStringLength > $lengthCheck){
            $shortestString = $stringArray[$i];
            $shortestStringLength = $lengthCheck;
          }
        }
      echo "Test case: {$string}","\n";
      echo "Output: {$shortestStringLength} – BECAUSE THE SHORTEST WORD IS \"{$shortestString}\"". "\n";
    }

?>