<?php
// tableau n° d'article et libellé
$arr = array('923' => 'bananes', '942' => 'pommes', '963' => 'oranges', '954' => 'cerises');
// boucle
foreach ($arr as $key => $value) {
  // affichage codes et libellés articles
  echo 'article no '.$key.' : '.$value.'<br />'; }

?>
