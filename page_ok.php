
<?php
// On d.marre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();  
 
// On r.cup.re nos variables de session
if (isset($_SESSION['login']) && isset($_SESSION['pwd'])) { 
//quelques ligne . titre d'exemple
      // On teste pour voir si nos variables ont bien .t. enregistr.es
      echo '<html>'; 
      echo '<head>'; 
          echo '<title>Page permise pour l\'utilisateur</title>'; 
      echo '</head>'; 
 
      echo '<body>'; 
      echo 'Votre login est '.$_SESSION['login'].' et votre mot de passe est '.$_SESSION['pwd'].'.'; 
      echo '<br />'; 
 
      // On affiche un lien pour fermer notre session
      echo '<a href="./logout.php">Deconnection</a>';  
}  
else { 
      echo 'Vous n\'etes pas autoris. ...';  
}  
?> 

