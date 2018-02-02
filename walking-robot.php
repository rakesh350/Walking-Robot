<?php 
include 'helper.php';

$input_arr = $argv;

// Variables to store values
$x = $input_arr[1];
$y = $input_arr[2];
$d = $input_arr[3];
$s = $input_arr[4];
$walk_unit = NULL;

// Split walking string into individual character
$s_arr = str_split($s);
$i = 0;
$arr_length = count($s_arr);
foreach ($s_arr as $s_item){
	if($s_item === 'R' || $s_item === 'L'){
		if($walk_unit !== NULL){
			$updated_cord = walk($d, intval($walk_unit), intval($x), intval($y));
			$x = $updated_cord['X'];
			$y = $updated_cord['Y'];
			$walk_unit = NULL;
		}
		
		$d = rotateR($d, $s_item);
	}else if($s_item === 'W'){
		$i++;
		continue;
	}else if(is_int(intval($s_item))){
		$walk_unit = $walk_unit.$s_item;
	}else{
		echo "Undefined input found. ABORTED!!!";
	}
	if(($i+1) === $arr_length && is_int(intval($walk_unit))){
		$updated_cord = walk($d, intval($walk_unit), intval($x), intval($y));
		$x = $updated_cord['X'];
		$y = $updated_cord['Y'];
		$walk_unit = NULL;
	}
	$i++;
}
echo $x." ".$y." ".$d;
?>