<html>
	<head>
		<title>facture</title>
	</head>
	<body>
		<form method="post" action="facture.php">
			<label>objet</label>
			<input type="text" name="objet"/><br/>
			<label>prix</label>
			<input type="text" name="prix"/><br/>
			
			<input type="submit" value="add" name="add"/>
			
		</form>
		<form methode="post" action ="factureTotal.php">
			<input value="fin" type="submit" name="fin"/>
		</form>
		<?php include 'factureAdd.php';?>
	</body>
</html>