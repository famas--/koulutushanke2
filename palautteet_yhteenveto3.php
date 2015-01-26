<?php
//sisällytetään yhteystidot
include 'yhteys.php';


/*header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment;Filename=document_name.xls");

echo "<html>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
echo "<body>";*/






$nimi = "SELECT koulutuksennimi FROM koulutus";
$nimi2 = mysql_query($nimi);






echo "<table><td>Koulutus</td><td>Kysymys1</td><td>Kysymys1</td><td>Kysymys1</td><tr>";

while($row = mysql_fetch_array($nimi2)){
	 
	echo "<td>" . $row['koulutuksennimi']."</td>";
	$koulutuksennimi = $row['koulutuksennimi'];
	$row1 = mysql_query("SELECT AVG(((NULLIF(2a1,0)) + (NULLIF(2a2,0)) + (NULLIF(2a3,0)) + (NULLIF(2a4,0)) + (NULLIF(2a5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row2 = mysql_query("SELECT AVG(((NULLIF(2b1,0)) + (NULLIF(2b2,0)) + (NULLIF(2b3,0)) + (NULLIF(2b4,0)) + (NULLIF(2b5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row3 = mysql_query("SELECT AVG(((NULLIF(2c1,0)) + (NULLIF(2c2,0)) + (NULLIF(2c3,0)) + (NULLIF(2c4,0)) + (NULLIF(2c5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row4 = mysql_query("SELECT AVG(((NULLIF(2d1,0)) + (NULLIF(2d2,0)) + (NULLIF(2d3,0)) + (NULLIF(2d4,0)) + (NULLIF(2d5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");	
	
	while($tieto1 = mysql_fetch_array($row1)){
	echo "<td>" . number_format($tieto1['keski'],1) . "</td>";}
	
	while($tieto2 = mysql_fetch_array($row2)){
	echo "<td>" . number_format($tieto2['keski'],1) . "</td>";}
	
	while($tieto3 = mysql_fetch_array($row3)){
	echo "<td>" . number_format($tieto3['keski'],1) . "</td>";}
	
	while($tieto4 = mysql_fetch_array($row4)){
	echo "<td>" . number_format($tieto4['keski'],1) . "</td><tr>";}
	
		}
	echo "</table>";

echo "</body>";
echo "</html>";





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