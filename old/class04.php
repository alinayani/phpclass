<?php

/*
$test = array("abc", "def", "Efg");
foreach($test as $key => $singleTest){
	echo $key ." ".$singleTest . "<br>";
	
}

$i = 1;
$n = 10;
while ($i <= $n){
	echo $i;
	if($i % 2 == 0){
		echo "this is even";
	}
	if()
}

// while loop fiboncci series example
$max = 0;
$i = 0;
$j = 1;
echo $i." , ";
echo $j." , ";
$result = 0;
while ($max < 10 ){
	$result = $i + $j;
	$i = $j;
	$j = $result;
	$max = $max + 1;
	echo $result." , ";
}


// nested loop example
for($i=1; $i<=5; $i++){
	
	for($j=1; $j<=$i; $j++){
		echo ' * ';
	}
	
	echo '<br>';
}
*/
$i = 0;
$n = 12;
while($i <= $n){
	$i++;
	if($i % 2 != 0){
		continue;
	}
	if($i > 10){
		break;
	}
	echo $i;
}

?>