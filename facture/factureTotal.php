<?php 


	session_start();
	
	echo "<table border='1'>";
	echo "<tr>";
	echo '<td>'.objet.'</td>';
	echo '<td>'.prix.'</td>';
	for($i=0;$i<count($_SESSION["objet"]);$i++)
	{
		$v=$v+$_SESSION['prix'][$i];
		echo '</tr>';
		echo "<tr>";
		echo '<td>'  .$_SESSION['objet'][$i].'</td>';
		echo 	'<td>'.$_SESSION['prix'][$i].'<td/>';
		echo "<tr/>";

	}
	echo "<tr>";
	echo '<td align="right">'.$v.'</td>';
	echo "</tr>";
	echo "</table>";

?>