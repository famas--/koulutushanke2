<?php

//sisällytetään yhteystidot
include 'yhteys.php';

function koulutuksennimikysely(){
	$koulutus = mysql_query ("SELECT koulutuksennimi FROM koulutus WHERE palaute='kylla'");
	echo '<option value="valitse" selected >Valitse koulutus</option>';
	while($tieto = mysql_fetch_array ($koulutus)){
		
		echo '<option value="' . $tieto['koulutuksennimi'] . '">' . $tieto['koulutuksennimi'] . '</option>';
	}
}


?>