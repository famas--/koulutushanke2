<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin
$nimi = $_POST['var'];

$sql = mysql_query ("SELECT * FROM koulutus WHERE koulutuksennimi = '$nimi'");
	while($tieto = mysql_fetch_array ($sql)){
		
		echo $tieto['koulutuksennimi'] . "<br>" . $tieto['ilmoittautuminen'] . "<br>";
		
	}



// suljetaan yhteys
mysql_close();
?>