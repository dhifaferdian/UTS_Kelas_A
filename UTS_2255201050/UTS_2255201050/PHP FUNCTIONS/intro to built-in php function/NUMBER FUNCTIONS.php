<?php
//MUHAMMAD DHIFA FERDIAN
//2255201050
//Kelas A
namespace Codecademy;

// Write your code below:
function calculateDistance($first, $second)
{
  return abs($first - $second);
}

function calculateTip($total)
{
  return round($total * 1.18);
}

echo calculateDistance(-1, 4); 
echo "\n";
echo calculateDistance(4, -1); 
echo "\n";
echo calculateDistance(3, 7);
echo "\n";
echo calculateDistance(7, 3); 
echo "\n";
echo calculateTip(100);
echo "\n";
echo calculateTip(35); 
echo "\n";
echo calculateTip(88.77);
echo "\n";


