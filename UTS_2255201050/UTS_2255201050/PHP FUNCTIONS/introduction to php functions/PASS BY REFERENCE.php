<?php
//MUHAMMAD DHIFA FERDIAN
//2255201050
//Kelas A
$jawa_satu = "Kamu Jawa";
$jawa_dua = "Aku Jawa";
$jawa_tiga = "Kita sama sama Jawa";
function convertToQuestion(&$jawa)
{
  $jawa = "Apa suku mu " . $jawa . "?\n";
}

convertToQuestion($jawa_satu);
convertToQuestion($jawa_dua);
convertToQuestion($jawa_tiga);

echo $jawa_satu;
echo $jawa_dua;
echo $jawa_tiga;

