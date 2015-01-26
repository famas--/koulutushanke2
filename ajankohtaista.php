<!DOCTYPE html>
<html>
<body>


<?php

//sisällytetään yhteystidot
include 'yhteys.php';





$sql = mysql_query("SELECT * FROM koulutus WHERE ilmoittautuminen >= CURTIME()");
while($tulos = mysql_fetch_array($sql))
{
	
	
	echo "<table width=\"600px\">
	
	<tr><td>" . $tulos['koulutuksennimi'] . "</td>
	<td style=\"width:100px\" align=\"right\">" . date("d.m.Y", strtotime($tulos['aloitusaika'])) . "</td>
	
	
	
	<form id=\"form1\" action=\"tiedot.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	<td style=\"width:100px\" align=\"right\"><input type=\"submit\" value=\"Tiedot\"></td>
		
	</form>
	
	
	
	<form id=\"form2\" action=\"ilmoittautuminen2.php\" method=\"POST\">
	<input type=\"hidden\" name=\"var\" value=" . $tulos['koulutuksennimi']. ">
	<input type=\"hidden\" name=\"aloitusaika\" value=" . $tulos['aloitusaika']. ">
	<input type=\"hidden\" name=\"aloitusaikaklo\" value=" . $tulos['aloitusaikaklo']. ">
	<input type=\"hidden\" name=\"lopetusaika\" value=" . $tulos['lopetusaika']. ">
	<input type=\"hidden\" name=\"lopetusaikaklo\" value=" . $tulos['lopetusaikaklo']. ">
	<td style=\"width:85px\" align=\"right\"><input type=\"submit\" value=\"Ilmoittaudu\"></td>
	
	</form>
	
	</table>";
	
}




?>  

</body>
</html>