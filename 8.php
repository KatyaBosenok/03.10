<?php
$values=[100, 200, -300, -200, 100];
$found=false;
foreach($values as $index=>$val){
	if (!$found && $val<0){
		echo 'Индекс: '.$index;
		$found=true;
	}
}
?>