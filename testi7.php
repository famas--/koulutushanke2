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
	
	
	echo "<table width=\"500px\"><form id=\"form1\" action=\"testi3.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	
	
	<tr><td><td>" . $tulos['koulutuksennimi'] . "</td>
		<td><input type=\"submit\" value=\"Tiedot\"></td>
		
	</form>
	
	
	<form id=\"form1\" action=\"testi2.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	
	<td><input type=\"submit\" value=\"Ilmoittaudu\"></td></td></tr>
	
	</form>
	
	</table>";
	
}




?>  

</body>
</html>