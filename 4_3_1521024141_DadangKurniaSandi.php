<!DOCTYPE html>
<html>
	<head>
		<title>Tugas 4.3 Dadang Kurnia Sandi</title>
	</head>
	<body>
		<?php
			echo "Segitiga Setengah Kiri<br>";
			for ($x = 5; $x > 0; $x--){
				echo '';
				for($y = $x; $y < 6; $y++){
					echo '*';
				}
			echo '<br/>';
			}
			echo '<br/>';
			echo "Segitiga Setengah Kanan<br>";
			for ($i=1; $i <=5 ; $i++) {
		 		for ($j=4; $j>=$i ; $j--) {
		 			echo "&nbsp;&nbsp;";
		 		}
				for ($k=1; $k <=$i ; $k++) {
		 			echo "*";
		 		}
		 	echo "<br>";
			}
			echo '<br/>';
			echo "Segitiga Full<br>";
			for ($i = 0; $i < 5; $i++) {
		 		for ($j = 5; $j > $i; $j--) {
		 			echo '&nbsp;';
		 		}
		 		for ($k = 0; $k <= $i; $k++) {
		 			echo '*';
		 		}
		 	echo '<br/>';
	 	}
		?>
	</body>
</html>