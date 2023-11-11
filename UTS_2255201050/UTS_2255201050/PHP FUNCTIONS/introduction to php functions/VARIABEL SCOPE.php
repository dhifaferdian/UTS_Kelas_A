<?php
//MUHAMMAD DHIFA FERDIAN
//2255201050
//Kelas A
$dinosaurus = "Brontosaurus";
$jenis = "Hewan Purba";

function generateLessonName($trex)
{
  global $dinosaurus;
  return $dinosaurus . ": " . $trex;
}

echo generateLessonName($jenis);