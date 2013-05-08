<?php

if($_POST['add']=="add"&&$_POST['objet']!=""&&$_POST['prix']!="")
{	
	
	session_start ();
	$code=$_POST["objet"];
	$article= $_POST["prix"];
	$_SESSION['objet'][]=$code;
	$_SESSION['prix'][]=$article;
	
	
	
}
?>
