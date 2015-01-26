<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin
$id = $_POST['var'];
$nimi = $_POST['var2'];

?>

<html>
<body>


<?php

echo "<table><tr>
<td>Koulutuksen nimi:</td><td style=\"strong\">" . $nimi . "</td>";
?>


<form action="muokkaa_ilmoittautuminen.php" method="post"/>
<input type="hidden" name="koulutusid" value=" <?php echo $id ?> "><tr>
<td>Ilmoittautuminen p&auml;&auml;ttyy:</td> <td><input type="datetime-local" name="ilmoittautuminen"></td>
</table>
<input type="submit" value="Tallenna">
</form>
<?php






// suljetaan yhteys
mysql_close();


?>

</body>
</html>