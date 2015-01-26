
<?php
//sisällytetään yhteystidot
include 'yhteys.php';


echo "<table><tr><td><h1>Hankkeen palautteet</h1></td></table>";

$yritys = mysqli_query($yhteys,"SELECT * FROM palautteet WHERE nimi like '%' ORDER BY nimi");
		while($row = mysqli_fetch_array($yritys))
		{
		echo "<table><tr><td style=\"width:300px\" align=\"left\">" . $row['nimi'] . "</td>
			<form id=\"form1\" action=\"yrityksenpalaute.php\" method=\"POST\">
				<input type=\"hidden\" name=\"palaute_id\" value=" . $row['palaute_id']. ">
				<td style=\"width:85px\" align=\"right\"><input type=\"submit\" value=\"Palaute\"></td>
		
			</form>
		
		</table>";
		}
		
		

// suljetaan yhteys
mysqli_close($yhteys);
?>