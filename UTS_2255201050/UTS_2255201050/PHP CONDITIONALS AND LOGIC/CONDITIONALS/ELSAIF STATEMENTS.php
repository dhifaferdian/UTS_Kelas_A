<?php
namespace Codecademy;
//MUHAMMAD DHIFA FERDIAN
//2255201050
//KELAS A
<?php
namespace Codecademy;
function markAnswer($is_correct)
{
  if ($is_correct) {
    return "green";
  } else {
    return "red";
  }
}
echo markAnswer(FLASE);
echo "\n\n";
echo markAnswer(TRUE);
echo "\n\n";
