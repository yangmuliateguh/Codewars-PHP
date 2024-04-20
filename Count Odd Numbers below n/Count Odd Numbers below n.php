<?php

function oddCount($n): int {
  $result = [];
  for($i = 1; $i < $n; $i++){
      if($i % 2 != 0) array_push($result, $i);
  }
  return count($result);
}