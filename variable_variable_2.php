<?php
//const
define ("phi",3.14);

//sisi miring
$a = pow(5,2);
$b = pow(7.2,2);
$c = sqrt($a+$b);
echo "sisi miring kerucut=".round($c,1)."m \n";

//tabung
$r = 7.2;
$rtabung = 20;
$voltabung = pow($r, 2) * $rtabung;
echo "volume tabung=".round($voltabung,1)."m3 \n";

//kerucut
$tkerucut = 5;
$volkerucut = (phi*pow($r,2)*$tkerucut);
echo "volume kerucut=".round($volkerucut,1)."m3 \n"

//luas alas
// $alas = phi*pow($r,2) / 100;
// echo "luas alas=".round($alas,1)."m3 \n"

// $totalvolume = $voltabung + $volkerucut - $alas;
// echo "$totalvolume =".round($totalvolume,1)."m3/n";

?>