<?php


//sisällytetään yhteystidot
include 'yhteys.php';

function koulutuksennimikysely(){
	$koulutus = mysql_query ("SELECT koulutuksennimi FROM koulutus WHERE palaute='kylla'");
	echo '<option value="valitse" selected >Valitse koulutus</option>';
	while($tieto = mysql_fetch_array ($koulutus)){
		
		echo '<option value="' . $tieto['koulutuksennimi'] . '">' . $tieto['koulutuksennimi'] . '</option>';
	}
}





"<html>
<head>
<script>
function data(str){
if (str=="") {
    document.getElementById(\"valitse\").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject(\"Microsoft.XMLHTTP\");
  }
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById(\"valitse\").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open(\"GET\",\"haetaankoulutustietoja.php?q=\"+str,true);
  xmlhttp.send();

}
</script>

</head>

<body>

<table>
<tr><td width=\"600px\"><h1>Koulutuspalaute</h1></td><tr><td width=\"600px\">Toivomme, etta pohdit hetken kaymaasi koulutusta ja taytat alla olevan palautelomakkeen. Antamasi palaute on meille arvokasta kehittaessamme koulutuksiamme edelleen.</td></table><br>

<form action=\"tavarapalautetaulukkoon.php\" method=\"post\"/>
<h3>1. Taustatiedot</h3>


<table>
<tr>

<td width=\"250px\">Koulutuksen nimi:</td><td>
	<select name=\"koulutuksennimi\" onchange=\"data(this.value)\">"
		 . koulutuksennimikysely() ."
	</select>
	
</td>


</table>
<div id=\"valitse\">
<table>
<tr>
<td>Paikka</td><tr>
<td>Toteuttaja</td><tr>
<td>Ajankohta</td><tr>

</table>
</div>

<br>

<table>
<tr>
<td><h3>2. Koulutus</h3></td><tr>
<td width=\"500px\">Arvioi koulutuksen osatekijoiden toteutumista asteikolla 1-5. Valitse sopivin vaihtoehto.</td><tr>

<td>1 = ei ollenkaan</td><tr>
<td>2 = jonkin verran</td><tr>
<td>3 = keskinkertaisesti</td><tr>
<td>4 = hyvin</td><tr>
<td>5 = erittain hyvin</td><tr>


<td><br></td><tr>
<td><b>a. Koulutustapahtuma</b></td><td><td align=\"center\">1</td><td align=\"center\">2</td><td align=\"center\">3</td><td align=\"center\">4</td><td align=\"center\">5</td><tr>
<td>Olin etukateen tietoinen koulutuksen kokonaisuudesta</td><td>
<td><input type=\"radio\" name=\"2a1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2a1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2a1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2a1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2a1\" value=\"erittain hyvin\"></td>
<tr>

<td>Koulutustapahtumasta tiedotettiin riittavasti etukateen</td><td>
<td><input type=\"radio\" name=\"2a2\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2a2\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2a2\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2a2\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2a2\" value=\"erittain hyvin\"></td>
</td><tr>

<td>Koulutus vastasi sisalloltaan sen tavoitteita ja ennakkotietoja</td><td>
<td><input type=\"radio\" name=\"2a3\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2a3\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2a3\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2a3\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2a3\" value=\"erittain hyvin\"></td>
</td><tr>

<td>Kaytannon jarjestelyt toimivat hyvin</td><td>
<td><input type=\"radio\" name=\"2a4\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2a4\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2a4\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2a4\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2a4\" value=\"erittain hyvin\"></td>
</td><tr>

<td>Koulutustilat ja -laitteet olivat asianmukaiset</td><td>
<td><input type=\"radio\" name=\"2a5\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2a5\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2a5\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2a5\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2a5\" value=\"erittain hyvin\"></td>
</td></td><tr>

<td><br></td><tr>
<td><b>b. Koulutuksen hyoty</b></td><td><td align=\"center\">1</td><td align=\"center\">2</td><td align=\"center\">3</td><td align=\"center\">4</td><td align=\"center\">5</td><tr>
<td>Koulutus vastasi tarpeitani</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Koulutus oli sisalloltaan onnistunut</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Koin koulutuksen sisallon mielenkiintoiseksi</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Koulutus edistaa ammatillista kehittymistani</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Koulutuksen opit ovat sovellettavissa kaytantoon</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td><br></td><tr>
<td><b>c. Koulutuksessa kaytetyt menetelmat</b></td><td><td align=\"center\">1</td><td align=\"center\">2</td><td align=\"center\">3</td><td align=\"center\">4</td><td align=\"center\">5</td><tr>
<td>Koulutuksessa kaytettiin monipuolisia menetelmia</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Koulutuksessa kaytetytmenetelmat sopivat aihesisaltoon</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Koulutus aktivoi kysymyksiin ja keskusteluun</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Koulutuksen oppimateriaali tuki oppimista</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Etaopetuspaivan tehtavat tukivat oppimista</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td><br></td><tr>
<td><b>d. Kouluttaja</b></td><td><td align=\"center\">1</td><td align=\"center\">2</td><td align=\"center\">3</td><td align=\"center\">4</td><td align=\"center\">5</td><tr>
<td>Kouluttaja oli asiantunteva</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Kouluttajan opetus oli selkeaa</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Vuorovaikutus kouluttajan kanssa sujui hyvin</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Yhteydenpito kouluttajaan onnistui etaopetuspaivana</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>

<td>Kouluttaja onnistui tehtavassaan</td><td>
<td><input type=\"radio\" name=\"2b1\" value=\"ei ollenkaan\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"jonkin verran\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"keskinkertaisesti\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"hyvin\"></td>
<td><input type=\"radio\" name=\"2b1\" value=\"erittain hyvin\"></td>
<tr>
</table>
<br>
<table><tr>
<td><h3>3. Vapaa sana</h3></td><tr>


<td>a. Mika oli mielestasi koulutuksen parasta antia?</td>
<tr>
<td><textarea rows=\"10\" cols=\"50\" name=\"Koulutuksen toteuttaja\" form=\"usrform\"></textarea></td><tr>
<td><br></td><tr>

<td>b. Parannusehdotuksia?</td>
<tr>
<td><textarea rows=\"10\" cols=\"50\" name=\"Koulutuksen toteuttaja\" form=\"usrform\"></textarea></td><tr>
<td><br></td><tr>

<td>c. Minkalaiseen koulutukseen haluaisit jatkossa osallistua?</td>
<tr>
<td><textarea rows=\"10\" cols=\"50\" name=\"Koulutuksen toteuttaja\" form=\"usrform\"></textarea></td><tr>
<td><br></td><tr>

<td>d. Muita kommentteja?</td>
<tr>
<td><textarea rows=\"10\" cols=\"50\" name=\"Koulutuksen toteuttaja\" form=\"usrform\"></textarea></td><tr>
</table>
<br>
<input type=\"submit\" value=\"Tallenna tietokantaan\">
<br>
<br>
<br>
<br>
</form>

</body>
</html>"
?>
