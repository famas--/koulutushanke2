<?php
//sisällytetään yhteystidot
include 'yhteys.php';


// tallennetaan postatut tiedot variableihin

$id = $_POST['palaute_id'];



$yritys = mysqli_query($yhteys,"SELECT * FROM palautteet WHERE palaute_id = $id");
		while($row = mysqli_fetch_array($yritys))
		{
		echo	"<table><tr><td><h1>" . $row['nimi'] . "</h1><br></td></table>
				<table>
				<tr><td><h3>1. Yrityshankkeen perustiedot</h3></td>
				<tr><td>Yhteistyösopimuksen pvm</td><td>" . $row['pvm'] . "</td>
				<tr><td>Y-tunnus</td><td>" . $row['ytunnus'] . "</td>
				<tr><td>Paikkakunta</td><td>" . $row['kunta'] . "</td>
				<tr><td>Hankkeen budjetti</td><td>" . $row['budjetti'] . "</td>
				<tr><td>Yrityksen omarahoitusosuus</td><td>" . $row['omarahoitus'] . "</td>
				<tr><td>Yrityksen toteutuneet neuvontapalvelukustannukset</td><td>" . $row['neuvontapalvelukustannukset'] . "<br></td>
				<tr><td>Yhteistyöhankkeen sisältö</td><td>" . $row['sisalto'] . "<br></td>
				<tr><td><br></td>
				
				
				<tr><td><h3>2. Työllisyysvaikutukset</h3></td>
				<tr><td><b>Henkilöstövaikutukset</b></td>
				<tr><td>henkilöstön osaaminen kasvoi</td><td>" . $row['2a1'] . "<br></td>
				<tr><td>henkilöstön määrä kasvoi</td><td>" . $row['2a2'] . "<br></td>
				
				<tr><td><br></td>
				<tr><td><b>Uusien työpaikkojen määrä</b></td>
				<tr><td>Miehet</td><td>" . $row['2a3'] . "<br></td>
				<tr><td>Naiset</td><td>" . $row['2a4'] . "<br></td>
				
				<tr><td><br></td>
				<tr><td><b>Uusista työpaikoista tutkimus- tai tuotekehitystyöpaikkoja</b></td>
				<tr><td>Miehet</td><td>" . $row['2a5'] . "<br></td>
				<tr><td>Naiset</td><td>" . $row['2a6'] . "<br></td>
				
				<tr><td><br></td>
				<tr><td><b>Yritystoiminta</b></td>
				<tr><td>palveluiden / tuotteiden määrä kasvoi</td><td>" . $row['2b1'] . "<br></td>
				<tr><td>verkostoituminen lisääntyi</td><td>" . $row['2b2'] . "<br></td>
				<tr><td>asiakkaiden määrä lisääntyi</td><td>" . $row['2b3'] . "<br></td>
				
				<tr><td><br></td>
				<tr><td><b>Osuiko yrityksen kehittämishanke kasvukynnykseen, jonka johdosta liiketoiminta kasvoi?</b></td>
				<tr><td></td><td>" . $row['2b4'] . "<br></td>
				<tr><td>Muu vaikutus, mikä?</td><td>" . $row['2b5'] . "<br></td>
				
				<tr><td><br></td>
				<tr><td><h3>3. Jatkotoimenpiteet</h3></td>
				<tr><td>Onko ICT-alan yritystoiminnan kehittäminen projektista tiedotettu alueella tarpeeksi?</td><td>" . $row['3a1'] . "<br></td>
				<tr><td>Onko tällaiselle hankkeelle tarvetta alueellamme jatkossa?</td><td>" . $row['3a2'] . "<br></td>
				<tr><td>Onko yrityksellänne suunnitelmissa kehittää liiketoimintaa lähivuosina</td><td>" . $row['3a3'] . "<br></td>
				<tr><td>Jos vastasitte kyllä, valitkaa alla olevista kehittämistarpeista lähinnä suunnitelmianne vastaava kohta</td>
				<tr><td>Toiminnan laajentaminen</td><td>" . $row['3a41'] . "<br></td>
				<tr><td>Markkinoinnnin kehittäminen</td><td>" . $row['3a42'] . "<br></td>
				<tr><td>Neuvonta</td><td>" . $row['3a43'] . "<br></td>
				<tr><td>Koulutus</td><td>" . $row['3a44'] . "<br></td>
				<tr><td>Muu, mikä?</td><td>" . $row['3a5'] . "<br></td>
				
				<tr><td><br></td>
				<tr><td><h3>4. Muuta huomioitavaa</h3></td>
				<tr><td>a. Mikä oli mielestasi ICT projektin parasta antia?</td><td>" . $row['4a'] . "<br></td>
				<tr><td>b. Parannusehdotuksia?</td><td>" . $row['4b'] . "<br></td>
				<tr><td>c. Minkalaisiin hankkeisiin haluaisit jatkossa osallistua?</td><td>" . $row['4c'] . "<br></td>
				<tr><td>d. Millaisiavaikutuksia ICT -projektilla on mielestänne alueen yrityksiin?</td><td>" . $row['4d'] . "<br></td>
				<tr><td>e. Millaisilla toimenpiteillä kunnat, kehitysyhtiöt ja oppilaitokset voivat parhaiten tukea alueensa yritystoiminnan kasvua ja kannattavuutta?</td><td>" . $row['4e'] . "<br></td>
				
				
				<tr><td><br></td>
				<tr><td><h3>5. Arvosana</h3></td>
				<tr><td>" . $row['arvosana'] . "<br></td>
				
				</table>";
		}
		
		

// suljetaan yhteys
mysqli_close($yhteys);
?>