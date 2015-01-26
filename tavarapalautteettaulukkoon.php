<?php

//sisällytetään yhteystidot
include 'yhteys.php';

error_reporting(0);
ini_set('display_errors', 0);


// tallennetaan postatut tiedot variableihin
$pvm = $_POST['pvm'];
$nimi = $_POST['nimi'];
$ytunnus = $_POST['ytunnus'];
$kunta = $_POST['kunta'];
$budjetti = $_POST['budjetti'];
$omarahoitus = $_POST['omarahoitus'];
$neuvontapalvelukustannukset = $_POST['neuvontapalvelukustannukset'];
$sisalto = $_POST['sisalto'];
$q2a1 = $_POST['2a1'];
$q2a1 = $_POST['2a2'];
$q2a3 = $_POST['2a3'];
$q2a4 = $_POST['2a4'];
$q2a5 = $_POST['2a5'];
$q2a6 = $_POST['2a6'];
$q2b1 = $_POST['2b1'];
$q2b2 = $_POST['2b2'];
$q2b3 = $_POST['2b3'];
$q2b4 = $_POST['2b4'];
$q2b5 = $_POST['2b5'];
$q3a1 = $_POST['3a1'];
$q3a2 = $_POST['3a2'];
$q3a3 = $_POST['3a3'];
$q3a41 = $_POST['3a41'];
$q3a42 = $_POST['3a42'];
$q3a43 = $_POST['3a43'];
$q3a44 = $_POST['3a44'];
$q3a5 = $_POST['3a5'];
$q4a = $_POST['4a'];
$q4b = $_POST['4b'];
$q4c = $_POST['4c'];
$q4d = $_POST['4d'];
$q4e = $_POST['4e'];
$arvosana = $_POST['arvosana'];


// viedään  muutujiin tallennettu tieto palautteettaulukkojen tietueisiin 
$query = "INSERT INTO palautteet (
		pvm,
		nimi,
		ytunnus,
		kunta,
		budjetti,
		omarahoitus,
		neuvontapalvelukustannukset,
		sisalto,
		2a1,
		2a2,
		2a3,
		2a4,
		2a5,
		2a6,
		2b1,
		2b2,
		2b3,
		2b4,
		2b5,
		3a1,
		3a2,
		3a3,
		3a41,
		3a42,
		3a43,
		3a44,
		3a5,
		4a,
		4b,
		4c,
		4d,
		4e,
		arvosana
		) VALUES (
		'$pvm',
		'$nimi',
		'$ytunnus',
		'$kunta',
		'$budjetti',
		'$omarahoitus',
		'$neuvontapalvelukustannukset',
		'$sisalto',
		'$q2a1',
		'$q2a1',
		'$q2a3',
		'$q2a4',
		'$q2a5',
		'$q2a6',
		'$q2b1',
		'$q2b2',
		'$q2b3',
		'$q2b4',
		'$q2b5',
		'$q3a1',
		'$q3a2',
		'$q3a3',
		'$q3a41',
		'$q3a42',
		'$q3a43',
		'$q3a44',
		'$q3a5',
		'$q4a',
		'$q4b',
		'$q4c',
		'$q4d',
		'$q4e',
		'$arvosana'
		)";
		



// ilmoitus jos vienti epäonnistui
if (!mysqli_query($yhteys,$query)) {
    die("error: " . mysqli_error($yhteys));
} 
echo "Ilmoittautumisesi onnistui!";


// suljetaan yhteys
mysqli_close($yhteys);
?>