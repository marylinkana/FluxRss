<?php
function preference(){
  //global $bdd;
  $bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");
  $id_u = 2;
  return $req_article = $bdd->query("SELECT * FROM articles a, preferences p WHERE a.id_a = p.id_a AND p.id_u ='".$id_u."'  ");

}


 ?>
