<?php

function wordSearch($words, $target) {
  $storageNum = [];
  echo "Test Case = [";
    for ($i = 0; $i < sizeof($words); $i++){
      if ($i < sizeof($words) - 1){
        echo "{$words[$i]}, ";
      }
      if ($target == $words[$i]){
        $storageNum[] = $i;
      }
    }
    echo "{$words[sizeof($words) - 1]}] \n";
    echo "TARGET = ". "$target"."\n";
    echo "OUTPUT = ";
    for ($i = 0; $i < sizeof($storageNum) - 1; $i++){
      echo " INDEX {$storageNum[$i]}, ";
    }
    echo "and INDEX {$storageNum[sizeof($storageNum) - 1]}";
    echo " // [";
    for ($i = 0; $i < sizeof($storageNum) - 1; $i++){
      echo "$storageNum[$i],";
    }
    echo " {$storageNum[sizeof($storageNum) - 1]}"."]";
}

?>