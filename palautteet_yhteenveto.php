<?php
//sisällytetään yhteystidot
include 'yhteys.php';

echo "<form action=\"http://localhost/koulutushanke/palautteet_yhteenveto_excel.php\" method=\"get\">
    <input type=\"submit\" value=\"LATAA EXCEL\" 
         name=\"Submit\" id=\"frm1_submit\" style=\"position:fixed;\" />
</form>";

$nimi = "SELECT koulutuksennimi FROM koulutus";
$nimi2 = mysql_query($nimi);



echo "<table><td><table width=\"200px\"border=\"1px\" bgcolor=\"#ffffff\" cellpadding=\"10\" style=\"position:fixed;
	top: 30;
	left: 0;
	z-index: 21;\"><td>Koulutus</td><tr><td>Olin etukateen tietoinen koulutuksen kokonaisuudesta</td><tr><td>Koulutus</td><tr><td>fdbhfgbdgb</td><tr><td>fdbhfgbdgb</td></table></td>";

while($row = mysql_fetch_array($nimi2)){
	 
	echo "<td><table border=\"1px\" cellpadding=\"10\" style=\"position:relative; left: 200px; top: 21;\" ><td>" . $row['koulutuksennimi']."</td><tr>";
	$koulutuksennimi = $row['koulutuksennimi'];
	$row1 = mysql_query("SELECT AVG(((NULLIF(2a1,0)) + (NULLIF(2a2,0)) + (NULLIF(2a3,0)) + (NULLIF(2a4,0)) + (NULLIF(2a5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row2 = mysql_query("SELECT AVG(((NULLIF(2b1,0)) + (NULLIF(2b2,0)) + (NULLIF(2b3,0)) + (NULLIF(2b4,0)) + (NULLIF(2b5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row3 = mysql_query("SELECT AVG(((NULLIF(2c1,0)) + (NULLIF(2c2,0)) + (NULLIF(2c3,0)) + (NULLIF(2c4,0)) + (NULLIF(2c5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row4 = mysql_query("SELECT AVG(((NULLIF(2d1,0)) + (NULLIF(2d2,0)) + (NULLIF(2d3,0)) + (NULLIF(2d4,0)) + (NULLIF(2d5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");	
	
	while($tieto1 = mysql_fetch_array($row1)){
	echo "<td>" . number_format($tieto1['keski'],1) . "</td><tr>";}
	
	while($tieto2 = mysql_fetch_array($row2)){
	echo "<td>" . number_format($tieto2['keski'],1) . "</td><tr>";}
	
	while($tieto3 = mysql_fetch_array($row3)){
	echo "<td>" . number_format($tieto3['keski'],1) . "</td><tr>";}
	
	while($tieto4 = mysql_fetch_array($row4)){
	echo "<td>" . number_format($tieto4['keski'],1) . "</td><tr></table>";}
	
		}
	
	echo "</table>";
	









/*$nimi = "SELECT koulutuksennimi FROM koulutus";
$nimi2 = mysql_query($nimi);

echo "<table border=\"1\" cellpadding=\"10\">";

while($row = mysql_fetch_array($nimi2)){
	echo "<td>" . $row['koulutuksennimi'] . "</td>";
		}
	echo "</table>";*/










/*$arvosana = "SELECT koulutus.koulutuksennimi, koulutuspalaute.2a1
	FROM koulutus
	INNER JOIN koulutuspalaute
	ON koulutus.koulutuksennimi=koulutuspalaute.koulutuksennimi
	ORDER BY koulutuspalaute.koulutuksennimi"; 
$tulos1 = mysql_query($arvosana);



echo "<table border=\"1\" cellpadding=\"10\">";

while($row = mysql_fetch_array($tulos1)){
	echo "<td>" . $row['koulutuksennimi'] ."<br>" . $row['2a1'] . "</td>";
		}
	echo "</table>";*/
	
	
?>