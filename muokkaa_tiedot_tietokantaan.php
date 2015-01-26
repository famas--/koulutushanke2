<?php

//sisällytetään yhteystidot
include 'yhteys.php';



// tallennetaan postatut tiedot variableihin
$id = $_POST['koulutusid'];
$nimi = $_POST['koulutuksennimi'];




// viedään $nimi variableen tallennettu tieto koulutustaulukkoon tietueeseen koulutuksen nimi
$sql = "UPDATE koulutus SET koulutuksennimi = '$nimi' WHERE koulutusid = $id";


		
// ilmoitus jos vienti epäonnistui
if (!mysql_query($sql)) {
    die("error: " . mysql_error());
} 
echo "Tiedot vietiin tietokantaan";


?>
