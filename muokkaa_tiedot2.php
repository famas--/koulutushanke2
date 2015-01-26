<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin


$id = $_POST['var2'];

if(isset($_POST['submit'])){
$Update = "UPDATE koulutus SET
 koulutuksennimi= '$_POST[koulutuksennimi]',
 paikka= '$_POST[paikka]',
 aloitusaika= '$_POST[aloitusaika]',
 aloitusaikaklo= '$_POST[aloitusaikaklo]',
 lopetusaika= '$_POST[lopetusaika]',
 ilmoittautuminen= '$_POST[ilmoittautuminen]',
 ryhmankoko= '$_POST[ryhmankoko]',
 toteuttaja= '$_POST[toteuttaja]',
 email= '$_POST[email]',
 puh= '$_POST[puh]',
 kesto= '$_POST[kesto]',
 hinta= '$_POST[hinta]',
 kuvaus= '$_POST[kuvaus]'
WHERE koulutusid ='$_POST[var2]'";
mysql_query($Update);
echo "<h1>Muutokset tallennettu</h1>";
};

$sql = mysql_query ("SELECT * FROM koulutus WHERE koulutusid =$id");
	while($tieto = mysql_fetch_array ($sql)){
		
		echo "<form action=muokkaa_tiedot2.php method=post>";
		echo "<table border=0><tr>";
		echo "<input type=hidden name=koulutusid value=" . $tieto['koulutusid'] . " >";
		echo "<td>Koulutus</td><td><input type=text name=koulutuksennimi value=" . $tieto['koulutuksennimi'] . " ></td></tr>";
		echo "<td>Paikka</td><td><input type=text name=paikka value=" . $tieto['paikka'] . "></td></tr>";
		echo "<td>Alkaa</td><td><input type=date name=aloitusaika value=" . date("Y-m-d", strtotime($tieto['aloitusaika'])) . ">";
		
		echo "&nbsp;&nbsp;&nbsp;KLO:<input type=time name=aloitusaikaklo value=" . substr(date(DATE_ATOM, strtotime($tieto['aloitusaika'])), 11, 5) . "></td></tr>";
		
		
		echo "<td>Loppuu</td><td><input type=text name=lopetusaika value=" . $tieto['lopetusaika'] . "></td></tr>"; 
	
		
		
		
		echo "<td>Ilmoittautuminen paattyy</td><td><input type=int name=ilmoittautuminen value=" . $tieto['ilmoittautuminen'] . "></td></tr>";
		echo "<td>Ryhman koko</td><td><input type=text name=ryhmankoko value=" . $tieto['ryhmankoko'] . "></td></tr>";
		echo "<td>Toteuttaja</td><td><input type=text name=toteuttaja value=" . $tieto['toteuttaja'] . "></td></tr>";
		echo "<td>Yhteyshenkilon sahkopostiosoite</td><td><input type=text name=email value=" . $tieto['email'] . "></td></tr>";
		echo "<td>Yhteyshenkilon puhelinnumero</td><td><input type=text name=puh value=" . $tieto['puh'] . "></td></tr>";
		echo "<td>Koulutuksen kesto</td><td><input type=text name=kesto value=" . $tieto['kesto'] . "></td></tr>";
		echo "<td>Hinta</td><td><input type=text name=hinta value=" . $tieto['hinta'] . "></td></tr>";
		echo "<td>Kuvaus</td><td><textarea type=text rows=10 cols=50 name=kuvaus >". $tieto['kuvaus'] ."</textarea></td></tr>";
		echo "<input type=hidden name=var2 value=" . $tieto['koulutusid'] . ">";
		echo "<td><input type=submit name=submit value=Tallenna tietokantaan></td></tr>";
		echo "</table></form>"; 
		
		
	};



// suljetaan yhteys
mysql_close();
?>