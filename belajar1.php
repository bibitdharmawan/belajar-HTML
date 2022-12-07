<!DOCTYPE html>
<html>
<head>
	<title>Belajar PHP</title>
</head>
<body>
	<?php
		// $suhu=32;
		// if ($suhu<32) {
		// 	echo "suhu dingim"
		// }elseif ($suhu) {
		// 	# code...
		// }
		// echo $kata;

		$tujuan = "Jakarta";
		switch ($tujuan) {
			case 'Jakarta':
				echo "Rp 500.000";
				break;
			case 'Bandung':
				echo "Rp 500.000";
				break;
			default:
				echo "Rp 400.000";
				break;
		}
	?>
</body>
</html>