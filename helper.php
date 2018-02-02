<?php 
function rotateR($current_face, $rotate_letter){
	$d = "";
	if($current_face === 'NORTH'){
		if($rotate_letter === 'R'){
			$d = 'EAST';
		}else if($rotate_letter === 'L'){
			$d = 'WEST';
		}
	}

	if($current_face === 'EAST'){
		if($rotate_letter === 'R'){
			$d = 'SOUTH';
		}else if($rotate_letter === 'L'){
			$d = 'NORTH';
		}
	}

	if($current_face === 'SOUTH'){
		if($rotate_letter === 'R'){
			$d = 'WEST';
		}else if($rotate_letter === 'L'){
			$d = 'EAST';
		}
	}

	if($current_face === 'WEST'){
		if($rotate_letter === 'R'){
			$d = 'NORTH';
		}else if($rotate_letter === 'L'){
			$d = 'SOUTH';
		}
	}
	return $d;

}

function walk($current_face, $unit, $xP, $yP){
	
	$cor_arr = array();
	if($current_face === 'NORTH'){
		$yP += $unit;
	}else if($current_face === 'EAST'){
		$xP += $unit;
	}else if($current_face === 'SOUTH'){
		$yP -= $unit;
	}else if($current_face === 'WEST'){
		$xP -= $unit;
	}
	$cor_arr = array(
		'X' => $xP,
		'Y' => $yP
	);

	return $cor_arr;
}

?>