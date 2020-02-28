<?php
$d = 86400;
$u = 3600;
$m = 60;
$s = 1;
echo "Voer een aantal dagen, uren en minuten in (bijvoorbeeld: 365d 24u 60m 59s)" . PHP_EOL;
$tijd = readline();

$DieEneArray = explode(" ", $tijd);
foreach ($DieEneArray as $value) {
    $letter  = substr($value, -1);
    $letter2 = substr($value, 0, -1);
    switch ($letter) {
      case "d":
          $deD = $letter2 * $d;
          break;

      case 'u':
          $deU = $letter2 * $u;
          break;

      case 'm':
          $deM = $letter2 * $m;
          break;

      case 's':
          $deS   = $letter2 * $s;
          $alles = $deS + $deM + $deU + $deD;
          echo $alles;
          break;
    }
}
?>
