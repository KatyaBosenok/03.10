<?php
$values=[100, 200, 300, -200, 100];
foreach($values as $index=>$val){
	if ($val<0){
		echo 'Индекс: '.$index;
		break;
	}
}
?>