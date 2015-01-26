<?php


//sisällytetään yhteystidot
include 'yhteys.php';


?>

<html>
<head>
<script>


//Tarkistaa onko koulutus valittu
function validateForm() {
    var x = document.forms["form1"]["koulutusid"].value;
    if (x=="tyhja") {
        alert("Valitse koulutus");
        return false;
    }
}

</script>



</head>

<body>

<table class="tuomaswidthcenter">
<tr><td width="600px"><h1>Projektin alueellisten vaikutusten arviointi</h1></td></table><br>

<form name="form1" action="tavarapalautteettaulukkoon.php" onsubmit="return validateForm()" method="post"/>
<h3>1. Yrityshankkeen perustiedot</h3>


<table >
<tr>
<td width="250px">Yhteistyösopimuksen pvm</td><td><input type="date" name=pvm></td><td><!--(pp.kk.vvvv)--></td><tr></table>
<table>
<td width="250px">Yrityksen nimi</td><td><textarea type=text rows=1 cols=40 name=nimi style="resize: none" ></textarea></td><tr>
<td width="250px">Y-tunnus</td><td><textarea type=text rows=1 cols=40 name=ytunnus style="resize: none" ></textarea></td><tr>
<td width="250px">Paikkakunta</td><td><textarea type=text rows=1 cols=40 name=kunta style="resize: none" ></textarea></td><tr>
<td width="250px">Hankkeen budjetti</td><td><textarea type=text rows=1 cols=40 name=budjetti style="resize: none" ></textarea></td><tr>
<td width="250px">Yrityksen omarahoitusosuus</td><td><textarea type=text rows=1 cols=40 name=omarahoitus style="resize: none" ></textarea></td><tr>
<td width="250px">Yrityksen toteutuneet neuvontapalvelukustannukset</td><td><textarea type=text rows=2 cols=40 name=neuvontapalvelukustannukset></textarea></td><tr>
<td width="250px">Yhteistyöhankkeen sisältö</td><td><textarea type=text rows=2 cols=40 name=sisalto></textarea></td><tr>
</table>
<br>
<table>
<td>1 = ei</td><tr>
<td>2 = jonkin verran</td><tr>
<td>3 = kyllä</td><tr>
<td>4 = paljon</td><tr>
<td>5 = erittäin paljon</td><tr>
</table>
<br>

<table>
<tr>
<td><h3>2. Työllisyysvaikutukset</h3></td><tr>





<td><br></td><tr>
<td style="width:350px;"><b>Henkilöstövaikutukset</b></td><td><td align="center">1</td><td align="center">2</td><td align="center">3</td><td align="center">4</td><td align="center">5</td><tr>
<td style="width:300px; padding-left:100px;">henkilöstön osaaminen kasvoi</td><td>
<td><input type="radio" name="2a1" value="1"></td>
<td><input type="radio" name="2a1" value="2"></td>
<td><input type="radio" name="2a1" value="3"></td>
<td><input type="radio" name="2a1" value="4"></td>
<td><input type="radio" name="2a1" value="5"></td>
<tr>

<td style="width:300px; padding-left:100px;">henkilöstön määrä kasvoi</td><td>
<td><input type="radio" name="2a2" value="1"></td>
<td><input type="radio" name="2a2" value="2"></td>
<td><input type="radio" name="2a2" value="3"></td>
<td><input type="radio" name="2a2" value="4"></td>
<td><input type="radio" name="2a2" value="5"></td>
</td><tr>
</table>
<br>
<table>
<td style="width:350px;"><b>Uusien työpaikkojen määrä</b></td></table>
<table><tr>
<td align="right" width="400px">Miehet</td>
<td><input type="number" name="2a3" step="1" name="2a3" min="0" max="20"></td><tr>
<td align="right" width="400px">Naiset</td>
<td><input type="number" name="2a4" step="1" name="2a4" min="0" max="20"></td><tr>
</table>

<br>

<table>
<td style="width:650px;"><b>Uusista työpaikoista tutkimus- tai tuotekehitystyöpaikkoja</b></td>
</table>

<table>
<tr>
<td align="right" width="400px">Miehet</td>
<td><input type="number" step="1" name="2a5" min="0" max="20"></td><tr>
<td align="right" width="400px" >Naiset</td>
<td><input type="number" step="1" name="2a6" min="0" max="20"></td>

</table>

<br>

<table>
<tr>

<td style="width:350px;"><b>Yritystoiminta</b></td><td><td align="center">1</td><td align="center">2</td><td align="center">3</td><td align="center">4</td><td align="center">5</td><tr>
<td style="width:300px; padding-left:100px;">palveluiden / tuotteiden määrä kasvoi</td><td>
<td><input type="radio" name="2b1" value="1"></td>
<td><input type="radio" name="2b1" value="2"></td>
<td><input type="radio" name="2b1" value="3"></td>
<td><input type="radio" name="2b1" value="4"></td>
<td><input type="radio" name="2b1" value="5"></td>
<tr>

<td style="width:300px; padding-left:100px;">verkostoituminen lisääntyi</td><td>
<td><input type="radio" name="2b2" value="1"></td>
<td><input type="radio" name="2b2" value="2"></td>
<td><input type="radio" name="2b2" value="3"></td>
<td><input type="radio" name="2b2" value="4"></td>
<td><input type="radio" name="2b2" value="5"></td>
</td><tr>

<td style="width:300px; padding-left:100px;">asiakkaiden määrä lisääntyi</td><td>
<td><input type="radio" name="2b3" value="1"></td>
<td><input type="radio" name="2b3" value="2"></td>
<td><input type="radio" name="2b3" value="3"></td>
<td><input type="radio" name="2b3" value="4"></td>
<td><input type="radio" name="2b3" value="5"></td>
</td><tr>
</table>
<br>
<table>
<td style="width:650px;"><b>Osuiko yrityksen kehittämishanke kasvukynnykseen, jonka johdosta liiketoiminta kasvoi?</b></td>
</table>

<table>
<tr>
<td align="right" width="400px">Kyllä</td>
<td><input type="radio" name="2b4" value="1"></td><tr>
<td align="right" width="400px">Ei</td>
<td><input type="radio" name="2b4" value="2"></td></td><tr>
<td align="right" width="250px">Muu vaikutus, mikä?</td><td><textarea type=text rows=2 cols=40 name="2b5"></textarea></td>
</table>

<br>
<table>
<tr>

<td><h3>3. Jatkotoimenpiteet</h3></td><td><td align="center">1</td><td align="center">2</td><td align="center">3</td><td align="center">4</td><td align="center">5</td><tr>
<td style="width:400px;">Onko ICT-alan yritystoiminnan kehittäminen projektista tiedotettu alueella tarpeeksi?</td><td>
<td><input type="radio" name="3a1" value="1"></td>
<td><input type="radio" name="3a1" value="2"></td>
<td><input type="radio" name="3a1" value="3"></td>
<td><input type="radio" name="3a1" value="4"></td>
<td><input type="radio" name="3a1" value="5"></td>
<tr>

<td style="width:400px;">Onko tällaiselle  hankkeelle tarvetta alueellamme jatkossa?</td><td>
<td><input type="radio" name="3a2" value="1"></td>
<td><input type="radio" name="3a2" value="2"></td>
<td><input type="radio" name="3a2" value="3"></td>
<td><input type="radio" name="3a2" value="4"></td>
<td><input type="radio" name="3a2" value="5"></td>
</td>


</table>
<br>
<table>
<td style="width:750px;">Onko yrityksellänne suunnitelmissa kehittää liiketoimintaa lähivuosina</td>
</table>

<table>
<tr>
<td align="right" width="400px">Kyllä</td>
<td><input type="radio" name="3a3" value="1"></td><tr>
<td align="right" width="400px">Ei</td>
<td><input type="radio" name="3a3" value="2"></td></td><tr>
</table><table><tr>
<td style="width:700px; padding-left:100px;">Jos vastasitte kyllä, valitkaa alla olevista kehittämistarpeista lähinnä suunnitelmianne vastaava kohta</td>
</table>
<table>
<td align="right" width="400px">Toiminnan laajentaminen</td>
<td><input type="checkbox" name="3a41" value="1"></td><tr>

<td align="right" width="400px">Markkinoinnnin kehittäminen</td>
<td><input type="checkbox" name="3a42" value="1"></td><tr>

<td align="right" width="400px">Neuvonta</td>
<td><input type="checkbox" name="3a43" value="1"></td><tr>

<td align="right" width="400px">Koulutus</td>
<td><input type="checkbox" name="3a44" value="1"></td><tr>

<td align="right" width="250px">Muu, mikä?</td>
<td><textarea type=text rows=2 cols=40 name=3a5></textarea></td>


</table>


<table><tr>
<td><h3>4. Muuta huomioitavaa</h3></td><tr>


<td>a. Mikä oli mielestasi ICT projektin parasta antia?</td>
<tr>
<td><textarea rows="10" cols="50" name="4a" ></textarea></td><tr>
<td><br></td><tr>

<td>b. Parannusehdotuksia?</td>
<tr>
<td><textarea rows="10" cols="50" name="4b" ></textarea></td><tr>
<td><br></td><tr>

<td>c. Minkalaisiin hankkeisiin haluaisit jatkossa osallistua?</td>
<tr>
<td><textarea rows="10" cols="50" name="4c" ></textarea></td><tr>
<td><br></td><tr>

<td>d. Millaisiavaikutuksia ICT -projektilla on mielestänne alueen yrityksiin?</td>
<tr>
<td><textarea rows="10" cols="50" name="4d" ></textarea></td><tr>
<td><br></td><tr>

<td>e. Millaisilla toimenpiteillä kunnat, kehitysyhtiöt ja oppilaitokset voivat parhaiten tukea alueensa yritystoiminnan kasvua ja kannattavuutta?</td>
<tr>
<td><textarea rows="10" cols="50" name="4e" ></textarea></td><tr>
<td><br></td><tr>


</table>

<br>
<table><tr>
<td><h3>4. Arvosana</h3></td><tr>
<td>Koulutukselle annan kokonaisarvosanan</td><td>
<td><select name="arvosana" selected id="arvosana">
<option value="0" selected>Valitse Arvosana</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>

</td>
</table>
<br>
<input type="submit" value="Lähetä">
<br>
<br>
<br>
<br>
</form>

</body>
</html>

