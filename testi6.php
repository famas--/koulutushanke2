<!DOCTYPE html>
<html>
<body>


<?php

//sisällytetään yhteystidot
include 'yhteys.php';


$sql1 = mysql_query("SELECT koulutusid, ilmoittautuminen FROM koulutus");
while($tulos1 = mysql_fetch_array($sql1))


$sql = mysql_query("SELECT koulutuksennimi, aloitusaika, lopetusaika FROM koulutus WHERE ilmoittautuminen <= CURTIME()");
while($tulos = mysql_fetch_array($sql))
{
	
	
	echo "<table width=\"400px\"><tr>
	<td>" . $tulos['koulutuksennimi'] . "</td>	
	
	<form id=\"form_1\" action=\"testi3.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	</form>
	
	
	<form id=\"form_2\" action=\"testi2.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	</form>
	
	
	<td align=\"right\">
	<input form=\"form_1\" type=\"submit\" value=\"Tiedot\">
	<input form=\"form_2\" type=\"submit\" value=\"Ilmoittaudu\"></td>
	
	
	</tr></table>";
	
}




?>  

</body>
</html>