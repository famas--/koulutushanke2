

<?php

//sisällytetään yhteystidot
include 'yhteys.php';





$sql1 = mysql_query("SELECT koulutusid, ilmoittautuminen FROM koulutus");
while($tulos1 = mysql_fetch_array($sql1))


$sql = mysql_query("SELECT koulutuksennimi FROM koulutus");
while($tulos = mysql_fetch_array($sql))
{
	
	echo "<table>";
	echo "<tr><td><button onclick=\"testi()\">Tiedot</button></td><td>" . $tulos['koulutuksennimi'] . "</td></tr>";
	echo "</table>";
}


function testi(){}

?>  




<script type="text/javascript">
/*var sql1="<?php echo $sql1; ?>"
function testi() {
    alert(sql1);
}*/
</script>