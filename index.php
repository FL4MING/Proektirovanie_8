<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Лабораторная работа №8</title>
</head>
<body>
	<h3 style="margin-bottom: 0;">Массив</h3>
	<?php 
		$arr = array();
		for ($i=0; $i < 3; $i++) { 
			echo "<br>";
			for ($y=0; $y < 3; $y++) { 
				$arr[$i][$y] = rand(1, 5);
				echo (" ".$arr[$i][$y]);
			}
		}

		$res = 0;
		for ($c=0; $c < 3; $c++) { 
			$res += $arr[$c][$c];	
		}
		echo ("<br>");
		echo ("Сумма главной диагонали массива = ".$res);
	?>
</body>
</html>