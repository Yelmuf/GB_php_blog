<?php

//echo "Hello, World!"
//echo time();

function add($a, $b)
{
	return $a + $b;
}

$a = $_POST['a'];
$b = $_POST['b'];
echo add($a,$b);

for ($i=0; $i < 10; $i++) {
	echo "<br />".$i;
}


?>
