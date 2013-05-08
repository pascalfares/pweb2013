<html>
<body>


<form name="ali" action="plus.php" method="post">
<input type="text" name="num1"> 
<input type="text" name="num2"><br>
<input name="plus" type="submit" value="plus">
<input name="moins" type="submit" value="moins">
<input name="fois" type="submit" value="fois">
<input name="div" type="submit" value="div"><br>
resultat: <?php
 
$x=$_POST["num1"];
$y=$_POST["num2"];
if($_POST["plus"]){
$z=$x+$y;
echo $z;}

else{ if($_POST["moins"])
{$z=$x-$y;
echo $z;}
else{ if($_POST["fois"])
{$z=$x*$y;
echo $z;}
else{ if($_POST["div"])
{$z=$x/$y;
echo $z;}}}}






 ?>



</form>

</body>
</html> 
