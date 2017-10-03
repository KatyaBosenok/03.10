<?php
$prices=[120, 130, 150, 130, 100];
$prices[0]=50;
$prices[]=200;
$prices[100]=150;
$max=0;
$maxIndex=0;
foreach($prices as $index=>$price){
	if ($max<$price){
		$max=$price;
		$maxIndex=$index;
	}
}
echo '<p>'.'Max: '.$max.'</p>';
echo 'Индекс Max: '.$maxIndex;
?>