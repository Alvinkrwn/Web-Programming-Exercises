<?php
$baris = 4;
$kolom = 5;
$angka = 1;
echo "<table border='1'>";

for($i = 1; $i <= $baris; $i++){
 	echo "<tr>";

 	for ($j = 1; $j <= $kolom; $j++){
    ?> 
 	
     	<td>Hello</td>
         
 	<?php

     $angka++;
    }
    
  	echo "</tr>";
}

echo "</table>";
?>
