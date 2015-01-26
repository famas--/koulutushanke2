
<?php

//sisällytetään yhteystidot
include 'yhteys.php';


$sql1 = mysql_query("SELECT koulutusid, ilmoittautuminen FROM koulutus");
while($tulos1 = mysql_fetch_array($sql1))


$sql = mysql_query("SELECT koulutuksennimi FROM koulutus WHERE ilmoittautuminen <= CURTIME()");
while($tulos = mysql_fetch_array($sql))
{
	
	
	echo "<table width=\"400px\"><form action=\"testi3.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	
	
	<tr><td>" . $tulos['koulutuksennimi'] . "</td>
		<td align=\"right\"><input type=\"submit\" value=\"Tiedot\" onclick=\"testi()\"></td></tr>
	
	

	</form></table>";
	
}




?>  



