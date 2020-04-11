<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<?php 
	if(isset($_POST['hitung'])){
		$Bilangan1 = $_POST['Bilangan1'];
		$Bilangan2 = $_POST['Bilangan2'];
		$operasi = $_POST['operasi'];
		
		switch ($operasi) {
			case 'tambah':
				$hasil = $Bilangan1+$Bilangan2;
			break;
			case 'kurang':
				$hasil = $Bilangan1-$Bilangan2;
			break;
			case 'kali':
				$hasil = $Bilangan1*$Bilangan2;
			break;
			case 'bagi':
				$hasil = $Bilangan1/$Bilangan2;
			break;			
		}
	}
	?>
	
	<div class="body">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post" action="index.php">			
			<input type="text" name="Bilangan1" placeholder="Masukan Angka Pertama" class="num" autocomplete="off">
			<input type="text" name="Bilangan2" placeholder="Masukan Angka Kedua"class="num" autocomplete="off">
			
			<select class="option" name="operasi">
				<option value="">-Pilih-</option>
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">x</option>
				<option value="bagi">/</option>
			</select>
			
			<input type="submit" name="hitung" value="Hasil" class="button">	
		</form>
		
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="num">
		<?php }?>			
	</div>
	
</body>
</html>