<html>
<style type="text/css">
form {  background-color:grey;}
      
.tb {height:30px; width:50px; }
div.ex
{
background-color:grey;
padding:100px;
height:180px;
margin:100px;
}


</style>
<form name="ali" action="tricss.php" method="post">

<div id="header" style="background-color:blue; height:50px">
<h1 style="margin-bottom:0;"> Tri des vecteurs </h1></div>
<div id="menu" style="background-color:#FFD700;height:580px;width:150px;float:left;">
<input name="naif" type="checkbox" value="naif">Naif<br>
<input name="insertion" type="checkbox" value="insertion">Insertion<br>
<input name="selection" type="checkbox" value="selection">Selection<br>
<input name="bulle" type="checkbox" value="bulle">Bulle<br>
<input name="dicho" type="checkbox" value="dicho">Dicho<br>
<br><input name="Trier" type="submit" value="Trier" style="align:center;"></div>

<div id="content" class="ex">

<body>
<input type="text" name="num1" class="tb">
<input type="text" name="num2" class="tb">
<input type="text" name="num3" class="tb">
<input type="text" name="num4" class="tb">
<input type="text" name="num5" class="tb">
<input type="text" name="num6" class="tb">
<input type="text" name="num7" class="tb"><br>

<br><br><br> Votre vecteur trie : 
</body>
<?php 

$T=array($_POST["num1"],$_POST["num2"],$_POST["num3"],$_POST["num4"],$_POST["num5"],$_POST["num6"],$_POST["num7"]);
if($_POST["naif"]){
for ($i=0; $i<=5; $i++)
  { for ($j=$i+1; $j<=6; $j++){
   if ($T[$i]>$T[$j])
{$E=$T[$i];
$T[$i]=$T[$j];
$T[$j]=$E; }}} 

for ($k=0; $k<=6; $k++){
echo " ".$T[$k]." ";}
echo "<br />";}

if($_POST["insertion"]){
for($i=1; $i<=6; $i++)
{ $j=0;
while($T[$j]<$T[$i])
{$j++;}
$E=$T[$i];
for($k=$i;$k>=$j+1;$k--){
$T[$k]=$T[$k-1];}
$T[$j]=$E;
}
for ($l=0; $l<=6; $l++){
echo " ".$T[$l]." ";}
echo "<br />";
}

if($_POST["selection"]){
for($i=0;$i<=5;$i++){
$min=$T[$i]; $pmin=$i;
for($j=$i+1;$j<=6;$j++)
{ if($T[$j]<$min){
$min=$T[$j]; $pmin=$j;
}}
if($pmin!=$i){
$T[$pmin]=$T[$i]; $T[$i]=$min;
}
}
for ($l=0; $l<=6; $l++){
echo " ".$T[$l]." ";}
echo "<br />";
}
if($_POST["bulle"]){

for($i=1;$i<=6;$i++){
for($j=0;$j<=6-($i-1);$j++){
if($T[$j]>$T[$j+1]){
$E=$T[$j+1]; 
$T[$j+1]=$T[$j];
$T[$j]=$E;}}}

for ($l=0; $l<=6; $l++){
echo " ".$T[$l]." ";}
echo "<br />";


}


?> </div>


<div id="footer" style="background-color:blue;text-align:center;">
Structure de donnees </div>
</form></body></html>
