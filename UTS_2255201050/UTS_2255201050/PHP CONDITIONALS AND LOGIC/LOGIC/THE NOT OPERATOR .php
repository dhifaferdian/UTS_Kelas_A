<?php
//MUHAMMAD DHIFA FERDIAN 
//2255201050
//Kelas A
function duckDuckGoose($is_goose){
  if (!$is_goose){
    return "duck";
  } else {
    return "goose!";
  }
}

echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(FALSE);
echo "\n";
echo duckDuckGoose(TRUE);