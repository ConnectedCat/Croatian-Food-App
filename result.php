<?php session_start(); ?>
<?php

$regions = array(
	'I' => 0,
	'D' => 0,
	'L' => 0,
	'S' => 0,
	'Z' => 0
);

$region;

if ($_SESSION['results']['q1'] == 'a1'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q1'] == 'a2'){
	$regions['I'] += 1;
	$regions['L'] += 1;
}

else if ($_SESSION['results']['q1'] == 'a3'){
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

if ($_SESSION['results']['q2'] == 'a1'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q2'] == 'a2'){
	$regions['L'] += 1;
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

if ($_SESSION['results']['q3'] == 'a1'){
	$regions['I'] += 1;
	$regions['L'] += 1;
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q3'] == 'a2'){
	$regions['I'] += 1;
	$regions['D'] += 1;
	$regions['L'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q3'] == 'a3'){
	$regions['I'] += 1;
	$regions['L'] += 1;
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q3'] == 'a4'){
	$regions['L'] += 1;
	$regions['Z'] += 1;
}

else if ($_SESSION['results']['q3'] == 'a5'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

if ($_SESSION['results']['q4'] == 'a1'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q4'] == 'a2'){
	$regions['L'] += 1;
	$regions['Z'] += 1;
}

else if ($_SESSION['results']['q4'] == 'a3'){
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q5'] == 'a1'){
	$regions['I'] += 1;
}

else if ($_SESSION['results']['q5'] == 'a2'){
	$regions['L'] += 1;
}

else if ($_SESSION['results']['q5'] == 'a3'){
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q5'] == 'a4'){
	$regions['Z'] += 1;
}

else if ($_SESSION['results']['q5'] == 'a5'){
	$regions['S'] += 1;
}

if ($_SESSION['results']['q6'] == 'a1'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q6'] == 'a2'){
	$regions['L'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q6'] == 'a3'){
	$regions['Z'] += 1;
}

if ($_SESSION['results']['q7'] == 'a1'){
	$regions['I'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q7'] == 'a2'){
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q7'] == 'a3'){
	$regions['I'] += 1;
	$regions['Z'] += 1;
}

else if ($_SESSION['results']['q7'] == 'a4'){
	$regions['D'] += 1;
	$regions['L'] += 1;
}

else if ($_SESSION['results']['q7'] == 'a5'){
	$regions['D'] += 1;
	$regions['L'] += 1;
}

else if ($_SESSION['results']['q7'] == 'a6'){
	$regions['D'] += 1;
}

if ($_SESSION['results']['q8'] == 'a1'){
	$regions['D'] += 1;
	$regions['L'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q8'] == 'a2'){
	$regions['L'] += 1;
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q8'] == 'a3'){
	$regions['I'] += 1;
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q8'] == 'a4'){
	$regions['Z'] += 1;
}

else if ($_SESSION['results']['q8'] == 'a5'){
	$regions['Z'] += 1;
	$regions['I'] += 1;
}

if ($_SESSION['results']['q9'] == 'a1'){
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q9'] == 'a2'){
	$regions['Z'] += 1;
}

else if ($_SESSION['results']['q9'] == 'a3'){
	$regions['I'] += 1;
}

else if ($_SESSION['results']['q9'] == 'a4'){
	$regions['L'] += 1;
}

else if ($_SESSION['results']['q9'] == 'a5'){
	$regions['S'] += 1;
}

if ($_SESSION['results']['q10'] == 'a1'){
	$regions['Z'] += 1;
}

else if ($_SESSION['results']['q10'] == 'a2'){
	$regions['L'] += 1;
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q10'] == 'a3'){
	$regions['S'] += 1;
	$regions['Z'] += 1;
}

else if ($_SESSION['results']['q10'] == 'a4'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q10'] == 'a5'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

if ($_SESSION['results']['q11'] == 'a1'){
	$regions['L'] += 1;
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q11'] == 'a2'){
	$regions['I'] += 1;
}

else if ($_SESSION['results']['q11'] == 'a3'){
	$regions['D'] += 1;
	$regions['L'] += 1;
}

if ($_SESSION['results']['q12'] == 'a1'){
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q12'] == 'a2'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q12'] == 'a3'){
	$regions['D'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q12'] == 'a4'){
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q12'] == 'a5'){
	$regions['I'] += 1;
	$regions['L'] += 1;
}

if ($_SESSION['results']['q13'] == 'a1'){
	$regions['D'] += 1;
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q13'] == 'a2'){
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q13'] == 'a3'){
	$regions['I'] += 1;
	$regions['D'] += 1;
	$regions['L'] += 1;
}

else if ($_SESSION['results']['q13'] == 'a4'){
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q13'] == 'a5'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

if ($_SESSION['results']['q14'] == 'a1'){
	$regions['I'] += 1;
}

else if ($_SESSION['results']['q14'] == 'a2'){
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q14'] == 'a3'){
	$regions['S'] += 1;
}

else if ($_SESSION['results']['q14'] == 'a4'){
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q14'] == 'a5'){
	$regions['L'] += 1;
}

if ($_SESSION['results']['q15'] == 'a1'){
	$regions['I'] += 1;
	$regions['D'] += 1;
}

else if ($_SESSION['results']['q15'] == 'a2'){
	$regions['L'] += 1;
}

else if ($_SESSION['results']['q15'] =='a3'){
	$regions['I'] += 1;
	$regions['Z'] += 1;
	$regions['S'] += 1;
}

$result = doublemax($regions);

if(count(array_keys($regions, $result['m'])) >= 2){

	if ($_SESSION['results']['q1'] == 'a1'){
		$regions['I'] += 1;
		$regions['D'] += 1;
	}
	
	else if ($_SESSION['results']['q1'] == 'a2'){
		$regions['I'] += 1;
		$regions['L'] += 1;
	}
	
	else if ($_SESSION['results']['q1'] == 'a3'){
		$regions['Z'] += 1;
		$regions['S'] += 1;
	}
	
	if ($_SESSION['results']['q7'] == 'a1'){
		$regions['I'] += 1;
		$regions['S'] += 1;
	}
	
	else if ($_SESSION['results']['q7'] == 'a2'){
		$regions['Z'] += 1;
		$regions['S'] += 1;
	}
	
	else if ($_SESSION['results']['q7'] == 'a3'){
		$regions['I'] += 1;
		$regions['Z'] += 1;
	}
	
	else if ($_SESSION['results']['q7'] == 'a4'){
		$regions['D'] += 1;
		$regions['L'] += 1;
	}
	
	else if ($_SESSION['results']['q7'] == 'a5'){
		$regions['D'] += 1;
		$regions['L'] += 1;
	}
	
	else if ($_SESSION['results']['q7'] == 'a6'){
		$regions['D'] += 1;
	}
	if ($_SESSION['results']['q9'] == 'a1'){
		$regions['D'] += 1;
	}
	
	else if ($_SESSION['results']['q9'] == 'a2'){
		$regions['Z'] += 1;
	}
	
	else if ($_SESSION['results']['q9'] == 'a3'){
		$regions['I'] += 1;
	}
	
	else if ($_SESSION['results']['q9'] == 'a4'){
		$regions['L'] += 1;
	}
	
	else if ($_SESSION['results']['q9'] == 'a5'){
		$regions['S'] += 1;
	}
	
	$result = doublemax($regions);
}

switch ($result['i']) {
	case "I":
		$_SESSION['result'] = "istria";
		break;
	case "D":
		$_SESSION['result'] = "dalmatia";
		break;
	case "L":
		$_SESSION['result'] = "lika";
		break;
	case "S":
		$_SESSION['result'] = "slavonia";
		break;
	case "Z":
		$_SESSION['result'] = "zagorje";
		break;
	default:
		$_SESSION['result'] = "error";
		
}



function doublemax($mylist){
  
  $maxvalue = max($mylist);
  
  while(list($key,$value) = each($mylist)){
  
    if($value == $maxvalue) $maxindex = $key;
  
  }
  
  return array(
  	"m" => $maxvalue,
  	"i" => $maxindex,
  );
} 
?>