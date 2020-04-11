<html>
<head>
	<title>Menghitung Bilangan Faktorial dengan While</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>
<?php
$n = isset($_POST['n']) ? $_POST['n'] : NULL;

if(isset($_POST['submit'])){
	if($n!=NULL){
		$bilangan = 1;
		$i=0;
		while($i<$n){
			$i++;
			$bilangan = $bilangan*$i;
		}
	}
	else{
		$bilangan = 'Bilangan Tidak Boleh Kosong ';
	}
}

echo '<h2>Menghitung Bilangan Faktorial</h2>';
echo '<h4>Masukkan Bilangan :</h4>';
echo '<form action="faktorialwhile.php" method="post">';
echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan "/>';
echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
echo '</form>';

if((isset($n))and($n!=NULL)){
	echo '<h4>Perhitungan Faktorial :</h4>';
	$i=0;
	echo $n. "! = "; 
	
	while($i<$n-1){
		$i++;
		echo $i.'x';
	}
	echo $n;
}

echo '<h4>Hasil Faktorial :</h4>';
echo '<input class="field" type="text" value="'.(isset($bilangan) ? $bilangan : NULL).'" readonly/>';
?>
</body>
</html>