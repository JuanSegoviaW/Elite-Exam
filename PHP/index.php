<?php
  
  include 'shortestWord.php';
  include 'countTheIsland.php';
  include 'wordSearch.php';
    
    echo " \"SHORTEST WORD\" \n";
    $test = "TRUE FRIENDS ARE ME AND YOU";
    $test2 = "I AM THE LEGENDARY VILLAIN";
    echo shortestWord($test);
    echo shortestWord($test2);
  
    echo "\n \"COUNT THE ISLANDS\" \n";
    $matrix = [
      [1,1,1,1],
      [0,1,1,0],
      [0,1,0,1],
      [1,1,0,0]
    ];
    echo countTheIsland($matrix);
    
    echo "\n \"WORD SEARCH\" \n";
    $words =  ["I","TWO","FORTY","THREE","JEN","TWO","tWo","Two"];
    $target = "TWO";
    echo wordSearch($words, $target);
?>