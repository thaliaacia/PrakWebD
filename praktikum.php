<?php

$mahasiswa = array(
	array("sapoandi", "dino", "indah")
	array("dwi", "kiki", "yuni")
	array("riki", "torik", "eruk")
);
for ($i=0; $i <3 ; $i++) { 
	echo "<p><b>Row number $i</b></p>";
	echo "<ul>"
	for ($col=0; $col <3 ; $col++) { 
		echo "<li>".$mahasiswa[$i][$col]."</li>";
	}
	echo "</ul>"
}
?>