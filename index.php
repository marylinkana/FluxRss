<?php
session_start();

try{
  $bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");
}
catch(EXEPTION $e){
    die("BDD INTROUVABLE");
}

if(!isset($_GET['p']))
{
	$page = "Login";
}

else
{
	if(!file_exists("controllers/".$_GET['p'].".php"))
		$page = "404";
	else
	    $page = $_GET['p'];
}

    ob_start();//permet de suspendre l'affichage
	   include "controllers/".$page.".php";
	   $content = ob_get_contents();
	ob_end_clean();

	include "layout.php";
?>
