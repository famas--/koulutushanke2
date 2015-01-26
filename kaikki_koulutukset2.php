<!DOCTYPE html>
<html>
<body>


<?php

//sisällytetään yhteystidot
include 'yhteys.php';


$sql1 = mysql_query("SELECT palaute FROM koulutus");
while($tulos1 = mysql_fetch_array($sql1))


$sql = mysql_query("SELECT koulutusid, koulutuksennimi, aloitusaika, lopetusaika, palaute FROM koulutus");
while($tulos = mysql_fetch_array($sql))
{
	
	
	echo "<table width=\"700px\">
	
	<tr><td>" . $tulos['koulutuksennimi'] . "</td>
	
	<form id=\"form1\" action=\"muokkaa_tiedot2.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var2\" value=" . $tulos['koulutusid']. ">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" value=\"Tiedot\"></td>
		
	</form>
	
	
	<form id=\"form2\" action=\"ilmoittautuminen.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" value=\"Ilmoittaudu\"></td>
	
	</form>
	
	<form id=\"form3\" action=\"ilmoittautumisaika.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutusid']. ">
	<input type=\"hidden\" name=\"var2\" value=" . $tulos['koulutuksennimi']. ">
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" value=\"ilmoittautumisaika\"></td>
	
	</form>
	
	<form id=\"form4\" action=\"palaute_vaihto.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var2\" value=" . $tulos['koulutusid']. ">
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" name=\"var3\" value="
	
	. $tulos['palaute'].
	
	"></td></tr>
	
	</form>
	
	</table>";
	
}




?>  

</body>
</html>