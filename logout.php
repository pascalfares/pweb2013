<?php
// On d.marre la session
session_start ();  
 
// On d.truit les variables de notre session
session_unset ();  
 
// On d.truit notre session
session_destroy ();  
 
// On redirige le visiteur vers la page d'accueil
header ('location: index.html');  
?> 
