<?php
//session_start();
try{
  $bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");
}
catch(EXEPTION $e){
    die("BDD INTROUVABLE");
}
?>
