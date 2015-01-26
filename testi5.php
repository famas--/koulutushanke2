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
	
	
	echo "<table width=\"500px\">
	
	<tr><td>" . $tulos['koulutuksennimi'] . "</td>
	
	<form id=\"form1\" action=\"testi3.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	<td style=\"width:100px\" align=\"right\"><input type=\"submit\" value=\"Tiedot\"></td>
		
	</form>
	
	
	<form id=\"form2\" action=\"ilmoittautuminen.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	<td style=\"width:100px\" align=\"right\"><input type=\"submit\" value=\"Ilmoittaudu\"></td></tr>
	
	</form>
	
	</table>";
	
}




?>  

</body>
</html>