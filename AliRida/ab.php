<html>
<body>


<form name="ali" action="ab.php" method="post">
<input type="text" name="num1">
<input type="text" name="num2"><br>
plus<input name="op1" type="checkbox" value="plus">
moins<input name="op2" type="checkbox" value="moins">
fois<input name="op3" type="checkbox" value="fois">
div<input name="op4" type="checkbox" value="div"><br>
<br><input name="Calculer" type="submit" value="Calculer">
<br><br><br> resultat: <?php
 function plus($x,$y){
return $x+$y;}
function moins($x,$y){
return $x-$y;}
function fois($x,$y){
return $x*$y;}
function div($x,$y){
return $x/$y;}
$x=$_POST["num1"];
$y=$_POST["num2"];
if($_POST["op1"]){
echo  "<br />". " la somme est ". plus($x,$y) ."<br/>"; }

if($_POST["op2"])
{echo " la soustraction est ". moins($x,$y) . "<br />"; }

if($_POST["op3"])
{ echo " la multiplication est ".fois($x,$y) ."<br />";}

if($_POST["op4"])
{
echo " le quotien est ".div($x,$y) ."<br />"; }






 ?>



</form>

</body>
</html> 
