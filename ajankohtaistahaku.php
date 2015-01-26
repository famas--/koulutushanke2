<?php
include 'ajankohtaista.php';

?>

<html>
<body>

<form action="tavarailmoittautuneettaulukkoon.php" method="post"/>
<table>
<tr>
<td>Koulutuksen nimi:</td><td>
	<select name="koulutuksennimi">
		<?php query() ?>
	</select>
		
</td><tr>
<td>Paikka: </td> <td><input type="text" name="paikka" size="40"></td><tr>
<td>Aloitusaika: </td> <td><input type="datetime-local" name="aloitusaika" ></td><tr>
<td>Lopetusaika: </td> <td><input type="datetime-local" name="lopetusaika"></td><tr>
<td>Ilmoittautuminen p&auml;&auml;ttyy:</td> <td><input type="datetime-local" name="ilmoittautuminen paattyy"></td><tr>
<td>Ryhm&auml;n koko: </td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Koulutuksen toteuttaja: </td><td><input type="text" name="koulutuksen toteuttaja" size="40"></td><tr>
<td>Yhteyshenkil&oumln s&auml;hk&oumlposti:</td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Yhteyshenkil&oumln puhelin: </td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Koulutuksen kesto: </td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Koulutuksen hinta: </td> <td><input type="text" name="firstname" size="40"></td><tr>
<td>Koulutuksen kuvaus: </td> <td><textarea rows="10" cols="50" name="Koulutuksen toteuttaja" form="usrform"></textarea></td><tr>
</table>
<input type="submit" value="Tallenna tietokantaan">
</form>

</body>
</html>