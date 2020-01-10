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
			$_ErgebnisUmf = "";
			$_ErgebnisFl = "";
			if(isset($_POST["berechnen"]))
			{
				$_ErgebnisUmf = number_format(2*$_POST["radius"]*pi(),2)." cm";
				$_ErgebnisFl = number_format($_POST["radius"]*$_POST["radius"]*pi(),2). " cm²";
			}
		?>
			
		<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
		
			Radius in cm: &nbsp <input type="text" id="radius" style="background-color:#E4EDDF" value="" name="radius" autocomplete="off" required>
			<input type="submit" name="berechnen" value="Berechnen">
			<br><br><br>
			Umfang: &nbsp <input type="text" id="umfang" size=10 style="background-color:#E4EDDF" value="<?php echo $_ErgebnisUmf ?>"  name="umfang" >
			<br><br>
			Fläche: &nbsp &nbsp <input type="text" id="flaeche" size=10 style="background-color:#E4EDDF" value="<?php echo $_ErgebnisFl ?>"  name="flaeche" >
			</form>
	</body>
</html>