<!DOCTYPE HTML>
<html>
	<head>
	</head>
	<body>
		<div>
			<p>
				<?php
					//interger variable random 0-100
					$num = rand(0, 10000);
					$num1 = rand(0, 10000);
					$num2 = rand(0, 10000);
					$num3 = rand(0, 10000);
					$num4 = rand(0, 10000);
					//array variable with fixed index
					$array = array($num, $num1, $num2, $num3, $num4);
					asort($array);
					print_r($array);
				?>
			</p>
		</div>
	</body>