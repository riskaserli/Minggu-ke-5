<?php
echo "Perulangan Do While";
echo "<br>";
$a = 1;
$b = 1;

do {
    echo "<br>";
    do {
        echo "$a";
        $b++;
    } 
	
	while ($b <= $a);
    $a++;
    $b = 1;
} 
while ($a <= 5);
?>