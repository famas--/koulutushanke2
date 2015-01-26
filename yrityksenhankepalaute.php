<?php
//sisällytetään yhteystidot
include 'yhteys.php';


// tallennetaan postatut tiedot variableihin

$id = $_POST['palaute_id'];



$yritys = mysqli_query($yhteys,"SELECT * FROM palautteet WHERE palaute_id = $id");
		while($row = mysqli_fetch_array($yritys))
		{
		echo	"<table><tr><td><h1>" . $row['nimi'] . "</h1><br></td></table>";
		}
		
		

// suljetaan yhteys
mysqli_close($yhteys);
?>