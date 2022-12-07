<!DOCTYPE html>
<html>
<head>
	<title> Belajar Pengulangan </title>
</head>
<body>
	<h1>while</h1>
	<?php 
	$no	= 1;
	while ($no <= 10) {
		echo "No saat ini adalah $no <br>";
		$no++; //$no = $no - 1
	}
	 ?>
	 

	 <h1>Do while</h1>
	<?php 
	$a	= 0;
	do {
		echo "Cetak angka".$a." | ";
		$a++;
	}	while ($a <= 10);
	 ?>	 
	

	<h1>For</h1>
	<?php 
	for ($i=5; $i>=1 ; $i--) { 
		echo "Saat ini adalah no $i <br>";
	}
	 ?>
	

	<select>
		<option> -Pilih Tanggal-</option>
		<?php 
		for ($i=1; $i <= 31 ; $i++) { 
		 	echo "<option>$i</option>";
		 } 
		?>
	</select>	
	

	<select>
		<option> -Pilih Bulan-</option>
		<?php 
		for ($i=1; $i <= 12 ; $i++) { 
		 	echo "<option>$i</option>";
		 } 
		?>
	</select>	
	

	<select>
		<option> -Pilih Tanggal-</option>
		<?php 
		$tahun = date("Y"); //2023
		for ($i=$tahun-5; $i <= $tahun + 5 ; $i++) { 
		 	echo "<option>$i</option>";
		 } 
		?>
	</select>
</body>
</html>