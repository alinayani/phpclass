<?php

$test = 1;

// php not consider variables inside singlequotes
echo 'my $test';
echo "<br/>";

// php consider variables inside doublequotes
echo "my $test";
echo "<br/>";

// simple array in php and var_dump

$msd = array("tre","asd");

var_dump($msd);
echo "<br/>";

//echo not shows array
echo $msd; 
echo "<br/>";

$x = 5;

// postincrement
echo $x++;
echo "<br/>";

// preincrement
echo ++$x;
echo "<br/>";

$txt1 = 1;
$txt2 = 2;

// concatenation
echo $txt1." ".$txt2;
echo "<br/>";

// concatenation and append
$txt1 .= $txt2;
echo $txt1." ".$txt2;
?>
<br/>
<?php

// operators precedence example

$a = 3 * 3 % 5;
echo $a;

$a = 1;
$b = 2;
$a = $b += 3;

var_dump($a, $b);

$p = true && false;

var_dump($p);

$q = false && true;

var_dump($q);

$c = true && true;

var_dump($c);

$d = false && false;

var_dump($d);

$r = true || false;

var_dump($r);

$s = false || true;

var_dump($s);

$t = true || true;

var_dump($t);

echo "The End! Remember Assignment";
?>