<?php

//sisällytetään yhteystidot
include 'yhteys.php';

error_reporting(0);
ini_set('display_errors', 0);


// tallennetaan postatut tiedot variableihin
$id = $_POST['var2'];
$yritys = $_POST['yritys'];
$omanimi = $_POST['nimi'];
$sukupuoli = $_POST['sukupuoli'];
$henkilomaara = $_POST['henkilomaara'];
$ika = $_POST['ika'];
$ammatti = $_POST['ammatti'];




// viedään $nimi variableen tallennettu tieto koulutustaulukkoon tietueeseen koulutuksen nimi
$query = "INSERT INTO ilmoittautuneet (
		koulutusid,
		yritys,
		nimi,
		sukupuoli,
		henkilomaara,
		ika,
		ammatti
		) VALUES ('$id','$yritys','$omanimi','$sukupuoli','$henkilomaara','$ika','$ammatti')";
		



// ilmoitus jos vienti epäonnistui
if (!mysqli_query($yhteys,$query)) {
    die("error: " . mysqli_error($yhteys));
} 
echo "Ilmoittautumisesi onnistui!";


// suljetaan yhteys
mysqli_close($yhteys);
?>