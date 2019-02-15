<?php
function get_flux(){
  //global $bdd;
  $bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");
  $req_article = $bdd->query("SELECT * FROM articles");
  return $req_article;
}

 ?>
