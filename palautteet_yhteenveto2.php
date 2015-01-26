<?php
//sisällytetään yhteystidot
include 'yhteys.php';

echo "<html><head><title>testdoc</title>
<style type=\"text/css\">
    body { font:16px Calibri;}
    .div1 { border-collapse:separate; border-top: 3px solid grey; }
    .div2 {
        margin:0;
		width:3000px;
		z-index:-1;
	}
		
    .div8 {
		width:3000px;
    }
	
	.div7 {
		border-style: solid;
		border-color: #000;
		border-width: 1px;
		float:left;
		
		width:100px;
		height:100px;
		padding: 0px 0px 0px 0px;
		}
			
			
	
		.div10 {
		border-style: solid;
		border-color: #000;
		border-width: 1px;
		float:left;
		width:300px;
		font-size:30px;
		height:100px;
				
	}
	

	
    .div6{
		border-style: solid;
		border-width: 1px;
		position:relative;
		width:100px;
		float:left;
	}
	.div11{
		border-style: solid;
		border-width: 1px;
		position:relative;
		width:300px;
		float:left;
	}
	
    .div4 {
		font-size:12px;
		top:0;
        position:fixed;
		float:left;
		z-index:1;
		border-color: #000;
		padding: 0 0 0 0;
		background-color:#fff;
		color:#000;
		width:4500px;
	
		
    }
	
	.div5 {
		float:left;
	}
	
	.div9 {
		margin: 101px 0 0 0;
	}
	
	
</style></head><body>";


$nimi = "SELECT koulutuksennimi FROM koulutus";
$nimi2 = mysql_query($nimi);



echo 	"<div class=\"div8\">
			<div class=\"div4\">
				<div class=\"div10\"><form action=\"http://localhost/koulutushanke/palautteet_yhteenveto_excel.php\" method=\"get\">
    <input type=\"submit\" value=\"LATAA EXCEL\" 
         name=\"Submit\" id=\"frm1_submit\" style=\"position:fixed;\" />
		</form>Koulutus</div>
				<div class=\"div7\"><b>KOULUTUS- TAPAHTUMA</b></div>
				<div class=\"div7\">Olin etukateen tietoinen koulutuksen kokonaisuudesta</div>
				<div class=\"div7\">Koulutus- tapahtumasta tiedotettiin riittavasti etukateen</div>
				<div class=\"div7\">Koulutus vastasi sisalloltaan sen tavoitteita ja ennakkotietoja</div>
				<div class=\"div7\">Kaytannon jarjestelyt toimivat hyvin</div>
				<div class=\"div7\">Koulutustilat ja -laitteet olivat asianmukaiset</div>
				
				
				<div class=\"div7\"><b>KOULUTUKSEN HYÖTY</b></div>
				<div class=\"div7\">Koulutus vastasi tarpeitani</div>
				<div class=\"div7\">Koulutus oli sisalloltaan onnistunut</div>
				<div class=\"div7\">Koin koulutuksen sisallon mielenkiintoiseksi</div>
				<div class=\"div7\">Koulutus edistaa ammatillista kehittymistani</div>
				<div class=\"div7\">Koulutuksen opit ovat sovellettavissa kaytantoon</div>
				
				
				<div class=\"div7\"><b>KOULUTUKSESSA KÄYTETYT MENETELMÄT</b></div>
				<div class=\"div7\">Koulutuksessa kaytettiin monipuolisia menetelmia</div>
				<div class=\"div7\">Koulutuksessa kaytetytmenetelmat sopivat aihesisaltoon</div>
				<div class=\"div7\">Koulutus aktivoi kysymyksiin ja keskusteluun</div>
				<div class=\"div7\">Koulutuksen oppimateriaali tuki oppimista</div>
				<div class=\"div7\">Etaopetuspaivan tehtavat tukivat oppimista</div>
				
				
				<div class=\"div7\"><b>KOULUTTAJA</b></div>
				<div class=\"div7\">Kouluttaja oli asiantunteva</div>
				<div class=\"div7\">Kouluttajan opetus oli selkeaa</div>
				<div class=\"div7\">Vuorovaikutus kouluttajan kanssa sujui hyvin</div>
				<div class=\"div7\">Yhteydenpito kouluttajaan onnistui etaopetuspaivana</div>
				<div class=\"div7\">Kouluttaja onnistui tehtavassaan</div>
		</div>";

while($row = mysql_fetch_array($nimi2)){
	 
	echo	"<div class=\"div9\">
				<div class=\"div2\">
					<div class=\"div11\">" . $row['koulutuksennimi']."</div>";
	$koulutuksennimi = $row['koulutuksennimi'];
	$row1 = mysql_query("SELECT AVG(NULLIF(2a1,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row2 = mysql_query("SELECT AVG(NULLIF(2a2,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row3 = mysql_query("SELECT AVG(NULLIF(2a3,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row4 = mysql_query("SELECT AVG(NULLIF(2a4,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row5 = mysql_query("SELECT AVG(NULLIF(2a5,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row6 = mysql_query("SELECT AVG(NULLIF(2b1,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row7 = mysql_query("SELECT AVG(NULLIF(2b2,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row8 = mysql_query("SELECT AVG(NULLIF(2b3,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row9 = mysql_query("SELECT AVG(NULLIF(2b4,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row10 = mysql_query("SELECT AVG(NULLIF(2b5,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row11 = mysql_query("SELECT AVG(NULLIF(2c1,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row12 = mysql_query("SELECT AVG(NULLIF(2c2,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row13 = mysql_query("SELECT AVG(NULLIF(2c3,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row14 = mysql_query("SELECT AVG(NULLIF(2c4,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row15 = mysql_query("SELECT AVG(NULLIF(2c5,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row16 = mysql_query("SELECT AVG(NULLIF(2d1,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row17 = mysql_query("SELECT AVG(NULLIF(2d2,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row18 = mysql_query("SELECT AVG(NULLIF(2d3,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row19 = mysql_query("SELECT AVG(NULLIF(2d4,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$row20 = mysql_query("SELECT AVG(NULLIF(2d5,0)) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");

	$yht1 = mysql_query("SELECT AVG(((NULLIF(2a1,0)) + (NULLIF(2a2,0)) + (NULLIF(2a3,0)) + (NULLIF(2a4,0)) + (NULLIF(2a5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$yht2 = mysql_query("SELECT AVG(((NULLIF(2b1,0)) + (NULLIF(2b2,0)) + (NULLIF(2b3,0)) + (NULLIF(2b4,0)) + (NULLIF(2b5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$yht3 = mysql_query("SELECT AVG(((NULLIF(2c1,0)) + (NULLIF(2c2,0)) + (NULLIF(2c3,0)) + (NULLIF(2c4,0)) + (NULLIF(2c5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");
	$yht4 = mysql_query("SELECT AVG(((NULLIF(2d1,0)) + (NULLIF(2d2,0)) + (NULLIF(2d3,0)) + (NULLIF(2d4,0)) + (NULLIF(2d5,0)))/5) AS keski FROM koulutuspalaute WHERE koulutuksennimi = '$koulutuksennimi'");

	
	while($tieto1 = mysql_fetch_array($yht1)){
	echo "<div class=\"div6\">" . number_format($tieto1['keski'],1) . "</div>";}
	
	while($tieto5 = mysql_fetch_array($row1)){
	echo "<div class=\"div6\">" . number_format($tieto5['keski'],1) . "</div>";}
	
	while($tieto6 = mysql_fetch_array($row2)){
	echo "<div class=\"div6\">" . number_format($tieto6['keski'],1) . "</div>";}
	
	while($tieto7 = mysql_fetch_array($row3)){
	echo "<div class=\"div6\">" . number_format($tieto7['keski'],1) . "</div>";}
	
	while($tieto8 = mysql_fetch_array($row4)){
	echo "<div class=\"div6\">" . number_format($tieto8['keski'],1) . "</div>";}
	
	while($tieto9 = mysql_fetch_array($row5)){
	echo "<div class=\"div6\">" . number_format($tieto9['keski'],1) . "</div>";}
	
	
	
	while($tieto2 = mysql_fetch_array($yht2)){
	echo "<div class=\"div6\">" . number_format($tieto2['keski'],1) . "</div>";}
	
	while($tieto10 = mysql_fetch_array($row6)){
	echo "<div class=\"div6\">" . number_format($tieto10['keski'],1) . "</div>";}
	
	while($tieto11 = mysql_fetch_array($row7)){
	echo "<div class=\"div6\">" . number_format($tieto11['keski'],1) . "</div>";}
	
	while($tieto12 = mysql_fetch_array($row8)){
	echo "<div class=\"div6\">" . number_format($tieto12['keski'],1) . "</div>";}
	
	while($tieto13 = mysql_fetch_array($row9)){
	echo "<div class=\"div6\">" . number_format($tieto13['keski'],1) . "</div>";}
	
	while($tieto14 = mysql_fetch_array($row10)){
	echo "<div class=\"div6\">" . number_format($tieto14['keski'],1) . "</div>";}
	
	
	
	while($tieto3 = mysql_fetch_array($yht3)){
	echo "<div class=\"div6\">" . number_format($tieto3['keski'],1) . "</div>";}
	
	while($tieto15 = mysql_fetch_array($row11)){
	echo "<div class=\"div6\">" . number_format($tieto15['keski'],1) . "</div>";}
	
	while($tieto16 = mysql_fetch_array($row12)){
	echo "<div class=\"div6\">" . number_format($tieto16['keski'],1) . "</div>";}
	
	while($tieto17 = mysql_fetch_array($row13)){
	echo "<div class=\"div6\">" . number_format($tieto17['keski'],1) . "</div>";}
	
	while($tieto18 = mysql_fetch_array($row14)){
	echo "<div class=\"div6\">" . number_format($tieto18['keski'],1) . "</div>";}
	
	while($tieto19 = mysql_fetch_array($row15)){
	echo "<div class=\"div6\">" . number_format($tieto19['keski'],1) . "</div>";}
	
	
	while($tieto4 = mysql_fetch_array($yht4)){
	echo "<div class=\"div6\">" . number_format($tieto4['keski'],1) . "</div>";}
	
	while($tieto20 = mysql_fetch_array($row16)){
	echo "<div class=\"div6\">" . number_format($tieto20['keski'],1) . "</div>";}
	
	while($tieto21 = mysql_fetch_array($row17)){
	echo "<div class=\"div6\">" . number_format($tieto21['keski'],1) . "</div>";}
	
	while($tieto22 = mysql_fetch_array($row18)){
	echo "<div class=\"div6\">" . number_format($tieto22['keski'],1) . "</div>";}
	
	while($tieto23 = mysql_fetch_array($row19)){
	echo "<div class=\"div6\">" . number_format($tieto23['keski'],1) . "</div>";}
	
	while($tieto24 = mysql_fetch_array($row20)){
	echo "<div class=\"div6\">" . number_format($tieto24['keski'],1) . "</div>";}
	
	
	
	
	
	

	
		}
	echo "</div></div>";

echo "</body>";
echo "</html>";

	

echo "</body></html>"





	
?>