<?php

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
?>