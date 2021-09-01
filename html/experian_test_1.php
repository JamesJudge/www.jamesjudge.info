<?php

function calcIndex($idx){
	if($idx < 0){
		throw new exception("Value entered must be zero or greater.");
	}
	$n = 0;
	switch($idx){
		case 0:
			$n = 0;
		break;
		case 1:
			$n = 1;
		break;
		default:
			$n = calcIndex($idx-1) + calcIndex($idx-2);
	}

	return $n;
}



for($i = 0; $i < 25; $i++){
	$before = timestamp();
	$result = calcIndex($i);
	$after = timestamp();
	$elapsed = intval($after) - intval($before);
	print($before . "- " . $after . " | Index " . $i . ": " . $result . " | Time Elapsed (ms): " . $elapsed . "\n");
}
