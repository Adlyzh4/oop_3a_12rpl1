<?php
$romi[0] = "kaka";
$jeka[1] = "salma";
$motor[2] = "kopling";
echo "$romi[0] dan $jeka[1] naik motor $motor[2]";
?>

<?php
$people = array("matrik1"=>["1","2","3","4"],
"matrik2"=>["1","2","3","4"])

?>

<?php
$matriksA = array(
array(1,2,3,4),
array(4,3,2,1)
);
$matriksB = array(
array(4,3,2,1),
array(1,2,3,4)
);
for ($i = 0; $i < count($matriksA); $i++):
for ($j = 0; $j < count($matriksA[$i]); $j++):
echo $matriksA[$i][$j]+$matriksB[$i][$j];
echo "|";
endfor;
echo "\n";
endfor;
?>
