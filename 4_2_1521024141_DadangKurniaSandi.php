<!DOCTYPE html>
<html>
	<head>
		<title>Tugas 4.2 Dadang Kurnia Sandi</title>
	</head>
	<body>
		<?php
		$kodebarang = "MB25";
		switch ($kodebarang){
			case "MB25":
				echo "Harga dari kode barang tersebut adalah : 250.000";
				break;
			case "PR80":
				echo "Harga dari kode barang tersebut adalah : 750.000";
				break;
			case "M717":
				echo "Harga dari kode barang tersebut adalah : 30.000";
				break;
			case "MM34":
				echo "Harga dari kode barang tersebut adalah : 150.000";
				break;
			case "K987":
				echo "Harga dari kode barang tersebut adalah : 35.000";
				break;
			default:
				echo "Inputan anda salah";
			}
		?>
	</body>
</html>