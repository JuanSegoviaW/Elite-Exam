<?php

function countTheIsland($island) {
    echo "Test Case: \n";
    for ($i = 0 ; $i < sizeof($island); $i++){
      echo "[";
      for($j = 0; $j < sizeof($island); $j++){
        echo "{$island[$i][$j]}";
        }
        echo "]\n";
      }
    echo "Output: \n";
    for ($i = 0 ; $i < sizeof($island); $i++){
      echo "\"";
      for($j = 0; $j < sizeof($island); $j++){
        if ($island[$i][$j] == 1){
          echo "x";
        }
        else{
          echo "~";
        }
      }
      echo "\"\n";
    }
}

?>