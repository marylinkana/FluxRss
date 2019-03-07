<?php
global $bdd;
   if(isset($_POST['submit']))
	{
   $email = htmlspecialchars($_POST['email']);
   $mdp = sha1(htmlspecialchars($_POST['mdp']));
	 $requete=$bdd->prepare("SELECT * FROM users WHERE email='$email' AND mdp='$mdp'");
   $requete->execute();
	 if($reponse=$requete->fetch())
	 {
		   $_SESSION['connect']=true;
	     $id_u = $reponse['id_u'];
	     //$_SESSION['level']=$reponse['level'];
		 header("location:?p=Flux");
	 }
	 else
	 {
     $_SESSION['connect']=false;
		 echo"<p class='danger'>Adress mail ou mot de passe incorrect</p>";
	 }
	}
?>

<?php
      //require("includes/footer.php");
?>
