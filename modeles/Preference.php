<?php
function echo_preference(){
  //global $bdd;
  $bdd=new PDO("mysql:host=localhost;dbname=flux_rss","root","");
  global $id_u;

  $i = 0;


  $req_article = $bdd->query("SELECT * FROM articles a, preferences p WHERE p.id_a = a.id_a AND p.id_u ='".$id_u."'  ");
  //var_dump($req_article);
  while ($rep_article = $req_article->fetch()) {

    $req_like = $bdd->query("SELECT * FROM likes WHERE id_a ='".$rep_article['id_a']."'");
    $req_like = $req_like->rowCount();

    ?>
    <article>
      <span class="numero"><?=$i++?>)</span>
      <button type="submit" class="preference" onclick="<?php disPreferency($rep_article['id_a'], $id_u)?>"><span class="preference">Retirer à mes préférences</span></button>
      <a href="<?= $rep_article['link'] ?>" tararticle="_blank"><span class="title"><b><?=$rep_article['title']?></b></span></a>
      <span class="pubdate"><?=$rep_article['pubdate']?></span>
      <br><span class="description"><?=$rep_article['description']?></span>
      <br><button ><span class="like">like(<?=$req_like?>)</span></button>
    </article>
    <?php
      //var_dump($req_likes);
    }
}


 ?>
