<!DOCTYPE html>
<html>
<body>

<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin
$nimi = $_POST['var'];
$aloitusaika = $_POST['aloitusaika'];
$aloitusaikaklo = $_POST['aloitusaikaklo'];
$lopetusaika = $_POST['lopetusaika'];
$lopetusaikaklo = $_POST['lopetusaikaklo'];



echo "<table><tr>
<td>Koulutuksen nimi:</td><td style=\"strong\">" . $nimi . "</td>";



"<form action=\"tavarailmoittautuneettaulukkoon.php\" method=\"post\"/>
<input type=\"hidden\" name=\"var2\" value=" . $nimi . ">

<tr>
<td>Ajankohta: </td> <td>" . date("d.m.Y", strtotime($aloitusaika)) . "&nbsp;&nbsp;-&nbsp;&nbsp;" . date("d.m.Y", strtotime($lopetusaika)) .

"</td><tr>

<td>Yritys: </td><td><input type=\"text\" name=\"yritys\" size=\"40\"></td><tr>

<td>nimi: </td> <td><input type=\"text\" name=\"nimi\" size=\"40\"></td><tr>

<td><p>Sukupuoli</p></td><tr>
<td>mies</td> <td><input type=\"radio\" name=\"sukupuoli\" value=\"mies\"></td><tr>
<td>nainen</td> <td><input type=\"radio\" name=\"sukupuoli\" value=\"nainen\"></td><tr>

<td><p>Yrityksen henkilomaara</p></td><tr>
<td>alle 5</td> <td><input type=\"radio\" name=\"henkilomaara\" value=\"alle 5\"></td><tr>
<td>10-19</td> <td><input type=\"radio\" name=\"henkilomaara\" value=\"10-19\"></td><tr>
<td>20-49</td> <td><input type=\"radio\" name=\"henkilomaara\" value=\"20-49\"></td><tr>
<td>50-99</td> <td><input type=\"radio\" name=\"henkilomaara\" value=\"50-99\"></td><tr>
<td>100-249</td> <td><input type=\"radio\" name=\"henkilomaara\" value=\"100-249\"></td><tr>
<td>500 tai yli</td> <td><input type=\"radio\" name=\"henkilomaara\" value=\"500 tai yli\"></td><tr>

<td><p>Minka ikainen olet</p></td><tr>
<td>alle 25 vuotias</td> <td><input type=\"radio\" name=\"ika\" value=\"alle 25 vuotias\"></td><tr>
<td>25-29-vuotias</td> <td><input type=\"radio\" name=\"ika\" value=\"25-29-vuotias\"></td><tr>
<td>30-54-vuotias</td> <td><input type=\"radio\" name=\"ika\" value=\"30-54-vuotias\"></td><tr>
<td>yli 54-vuotias</td> <td><input type=\"radio\" name=\"ika\" value=\"yli 54-vuotias\"></td><tr>

<td><p>Tyotilanne talla hetkella</p></td><tr>
<td>toissa</td> <td><input type=\"radio\" name=\"ammatti\" value=\"toissa\"></td><tr>
<td>koulussa</td> <td><input type=\"radio\" name=\"ammatti\" value=\"koulussa\"></td><tr>
<td>tyoton</td> <td><input type=\"radio\" name=\"ammatti\" value=\"tyoton\"></td><tr>
<td>tyomarkkinoiden ulkopuolella</td> <td><input type=\"radio\" name=\"ammatti\" value=\"tyomarkkinoiden ulkopuolella\"></td><tr>


</table>
<input type=\"submit\" value=\"Tallenna tietokantaan\">
</form>"
?>

</body>
</html>