<?php
$prices=[120, 130, 150, 130, 100];
$sum=0;
for ($i= 0; $i<count($prices); $i++){
	$sum+=$prices[$i];
}
$avg=$sum/count($prices);
echo $avg;
?>