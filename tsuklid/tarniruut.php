<?php

/*
    PHP Tsüklid
    Rene Kasetalu
    Tartu KHK
*/

//ridade veerdued max
$ridadeArv =7;
$veergudeArv = 7;

// ridade määramine ja vahetus

for ($reaNR = 1; $reaNR <= $ridadeArv; $reaNR++){

    echo $reaNR;

  for($veeruNR = 1; $veeruNR <= $reaNR; $veeruNR++){

      echo '*';
  }

    echo '<br>';

}

?>