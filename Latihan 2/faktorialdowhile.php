<html>
<head>
	<title>Menghitung Bilangan Faktorial dengan Do While</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>

<body>
<?php
$n = isset($_POST['n']) ? $_POST['n'] : NULL;

if(isset($_POST['submit'])){
	if($n!=NULL){
		$bilangan = 1;
		$i=1;
		
		do{
			$bilangan = $bilangan*$i;
			$i++;
		}
		
		while($i<=$n);
	}
	else{
		$bilangan = 'Bilangan Tidak Boleh Kosong';
	}
}

echo '<h2>Menghitung Bilangan Faktorial';
echo '<h4>Masukkan Bilangan :</h4>';
echo '<form action="faktorialdowhile.php" method="post">';
echo '<input class="field" type="text" name="n" value="'.$n.'" placeholder="Masukkan Bilangan "/>';
echo '<input class="tombol" type="submit" name="submit" value="Hitung"/>';
echo '</form>';

if((isset($n))and($n!=NULL)){
	echo '<h4>Perhitungan Faktorial :</h4>';
	$i=1;
	echo $n. "! = "; 

	do{
		echo $i.'x';
		$i++;
	}while($i<$n);
	
	echo $n;
}

echo '<h4>Hasil Faktorial :</h4>';
echo '<input class="field" type="text" value="'.(isset($bilangan) ? $bilangan : NULL).'" readonly/>';
?>
</body>
</html>