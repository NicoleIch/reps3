<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<title>Geometrieprojekt</title>
		<link rel="stylesheet" href="geometrie.css">
		<style>
		body {
			background-color: rgb(241,237,223);
		}
		</style>
	</head>
	<body>
		<h1 class="big" >Geometrieberechnungen</h1>
		<br>
		<p class='grossblau'> Kreisberechnung:</p>
		<br><br>
		
		<?php
			$_ErgebnisUmfK = "";
			$_ErgebnisFlK = "";
			$_ErgebnisUmfR = "";
			$_ErgebnisFlR = "";			
			if(isset($_POST["berechnenKreis"]))
			{
				$_ErgebnisUmfK = number_format(2*$_POST["radius"]*pi(),2)." cm";
				$_ErgebnisFlK = number_format($_POST["radius"]*$_POST["radius"]*pi(),2). " cm²";
			}
			if(isset($_POST["berechnenRechteck"]))
			{
				$_ErgebnisUmfR = number_format(2*$_POST["l1"]+2*$_POST["l2"],2)." cm";
				$_ErgebnisFlR = number_format($_POST["l1"]*$_POST["l2"],2). " cm²";
			}			
		?>
			
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		
			Radius in cm: &nbsp <input type="text" id="radius" style="background-color:#E4EDDF" value="" name="radius" autocomplete="off">
			<input type="submit" name="berechnenKreis" value="Berechnen">
			<br><br><br>
			Kreisumfang: &nbsp <input type="text" id="umfang" size=10 style="background-color:#E4EDDF" value="<?php echo $_ErgebnisUmfK ?>"  name="umfangK" >
			<br><br>
			Kreisfläche: &nbsp &nbsp <input type="text" id="flaeche" size=10 style="background-color:#E4EDDF" value="<?php echo $_ErgebnisFlK ?>"  name="flaecheK" >
			<br><br>	
			
		<p class='grossblau'> Rechteckberechnung:</p>
		<br><br>			
			Kantenlänge1 in cm: &nbsp <input type="text" id="radius" style="background-color:#E4EDDF" value="" name="l1" autocomplete="off">
			<br><br>
			Kantenlänge2 in cm: &nbsp <input type="text" id="radius" style="background-color:#E4EDDF" value="" name="l2" autocomplete="off">
			<input type="submit" name="berechnenRechteck" value="Berechnen">
			<br><br>			
			Umfang des Rechtecks: &nbsp <input type="text" id="umfang" size=10 style="background-color:#E4EDDF" value="<?php echo $_ErgebnisUmfR ?>"  name="umfangR" >
			<br><br>
			Fläche des Rechtecks: &nbsp &nbsp <input type="text" id="flaeche" size=10 style="background-color:#E4EDDF" value="<?php echo $_ErgebnisFlR ?>"  name="flaecheR" >			
			</form>
	</body>
</html>