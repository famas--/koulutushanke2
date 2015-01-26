<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin
$nimi = $_POST['var'];

$sql = mysql_query ("SELECT * FROM koulutus WHERE koulutuksennimi = '$nimi'");
	while($tieto = mysql_fetch_array ($sql)){
		
		echo "<table><tr>
		
		
		
		
	
		
		<td>Koulutus</td><td>" . $tieto['koulutuksennimi'] . "</td></tr>
		
		
		<form id=\"form2\" action=\"ilmoittautuminen2.php\" method=\"POST\">
		<input type=\"hidden\" name=\"var\" value=" . $tieto['koulutuksennimi']. ">
		<input type=\"hidden\" name=\"aloitusaika\" value=" . $tieto['aloitusaika']. ">
		<input type=\"hidden\" name=\"aloitusaikaklo\" value=" . $tieto['aloitusaikaklo']. ">
		<input type=\"hidden\" name=\"lopetusaika\" value=" . $tieto['lopetusaika']. ">
		<input type=\"hidden\" name=\"lopetusaikaklo\" value=" . $tieto['lopetusaikaklo']. ">
		<td></td><td style=\"width:85px\" align=\"left\"><input type=\"submit\" value=\"Ilmoittaudu\"></td><tr>
		
		</form>
		
		<td>Paikka</td><td>" . $tieto['paikka'] . "</td></tr>
		
		<td>Alkaa</td><td>" . date("d.m.Y", strtotime($tieto['aloitusaika'])) . "&nbsp;&nbsp;&nbsp;klo:<td>" . substr($tieto['aloitusaikaklo'], 0, 5) . "</td></tr>
		
		<td>Loppuu</td><td>" . date("d.m.Y", strtotime($tieto['lopetusaika'])) . "&nbsp;&nbsp;&nbsp;klo:<td>" . substr($tieto['lopetusaikaklo'], 0, 5) . "</td></tr>
		
		
		
		<td>Ilmoittautuminen paattyy</td><td>" . date("d.m.Y", strtotime($tieto['ilmoittautuminen'])) . "&nbsp;&nbsp;&nbsp;klo:<td>" . substr($tieto['ilmoittautuminenklo'], 0, 5) . "</td></tr>
		
		
		
		<td>Ryhman koko</td><td>" . $tieto['ryhmankoko'] . "</td></tr>
		<td>Toteuttaja</td><td>" . $tieto['toteuttaja'] . "</td></tr>
		<td>Yhteyshenkilon sahkopostiosoite</td><td>" . $tieto['email'] . "</td></tr>
		<td>Yhteyshenkilon puhelinnumero</td><td>" . $tieto['puh'] . "</td></tr>
		<td>Koulutuksen kesto</td><td>" . $tieto['kesto'] . "</td></tr>
		<td>Hinta</td><td>" . $tieto['hinta'] . "</td></tr>
		<td>Kuvaus</td><td>" . $tieto['kuvaus'] . "</td></tr>
		
		</table>"; 
		
		
	}



// suljetaan yhteys
mysql_close();
?>