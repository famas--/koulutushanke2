<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin
$id = $_POST['var2'];
$palaute = $_POST['var3'];
$kylla = "kylla";


if ($palaute == $kylla){
	mysqli_query ($yhteys,"UPDATE koulutus SET palaute='ei' WHERE koulutusid= $id ");
} 
 else {
	mysqli_query ($yhteys,"UPDATE koulutus SET palaute='kylla' WHERE koulutusid= $id ");
}





// suljetaan yhteys
mysqli_close($yhteys);

header("Location: kaikki_koulutukset.php"); /* Redirect browser */
exit();
?>