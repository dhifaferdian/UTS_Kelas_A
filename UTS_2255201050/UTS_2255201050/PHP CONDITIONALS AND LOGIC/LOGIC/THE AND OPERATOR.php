<?php
//MUHAMMAD DHIFA FERDIAN
//2255201050
//Kelas A
function clapYourHands($is_happy, $knows_it){
  if ($is_happy && $knows_it){
    return "CLAP!";
  } else {
    return ":(";
  }
}

echo clapYourHands(TRUE, TRUE);
echo "\n\n";
echo clapYourHands(TRUE, FALSE); 