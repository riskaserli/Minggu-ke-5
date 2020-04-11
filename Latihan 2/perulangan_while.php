<?php
echo "Perulangan While";
echo "<br>";
$a = 1;
$b = 1;
while ($a <= 5) {
    echo "<br>";
    while ($b <= $a) {
        echo "$a";
        $b++;
    }
    $a++;
    $b = 1;
}
?>