<html>
 	<head>Headings</head>
	<style type="text/css">
		.warna { 
		font-family: sans;
		color: red;
		}
	</style>
 	<body>
		<?php
			for($i=1; $i<= 6; $i++){
				if ($i%2==0) {
					echo '<h'.$i.' class="warna">Heading '.$i.'</h'.$i.'>';	
				}
				else {
					echo '<h' . $i . '>Heading ' . $i . '</h' . $i . '>';
				}
				
			}
		?>
 	</body>
</html>
